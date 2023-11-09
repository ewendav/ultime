<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Taille;
use App\Models\Product;
use App\Models\Welcome;
use App\Models\Variante;
use App\Models\collection;
use Illuminate\Http\Request;
use App\Models\sousCategorie;
use App\Models\sousCollection;
use App\Models\products_tailles;
use App\Models\ProductGroups;

use Illuminate\Support\Facades\Storage;



class ShopController extends Controller
{


    public function index(){

        $productsTricot = Product::where("collection_id", "=", "2")->where("active", "=", "1")->get();
        $welcome = Welcome::firstOrFail();

        $productsCouture = Collection::find(1)->products()->get();




        return view("welcome",  [
            "products1" => $productsCouture,
            "products2" => $productsTricot,
            "welcome" => $welcome,
            "collections" => Collection::all(),
            "start" => true
        ]);
    }


    public function collection(Request $request, string $collectionId_slug, string $sousCollectionId_slug = null, string $sousCategorieId_slug = null){
        $collection = collection::where("id", "=", $collectionId_slug)->firstOrFail();
        $sousCollec = SousCollection::where("collection_id", "=", $collectionId_slug)->get();
        $sousCollecArray = array();
        foreach ($sousCollec->toArray() as $value) {
                array_push($sousCollecArray, $value["id"]);
        }

        $sousCatego = sousCategorie::whereIn("sous_collection_id", $sousCollecArray)->get();

        if($sousCollectionId_slug != null){
            $products = Product::where("active", "=", "1")->where("collection_id", "=", $collectionId_slug)->where("sous_collection_id", "=", $sousCollectionId_slug);
        }else{
            $products = Product::where("active", "=", "1")->where("collection_id", "=", $collectionId_slug);
        }

        if($sousCategorieId_slug != null){
            $products = $products->where("sous_categorie_id","=", $sousCategorieId_slug);
        }

        $products = $products->paginate(16);

        return view("shop", [
            "head" => $collection->name,
            "products" => $products->setCollection($products->groupBy('variante')),
            "description"=> $collection->description,
            "backgroundImg"=> $collection->image,
            "sousCollec"=> $sousCollec,
            "sousCatego"=> $sousCatego,
            "sousCategorieId_slug"=> $sousCategorieId_slug,
            "sousCollectionId_slug"=> $sousCollectionId_slug,
            ]);
    }

    public function produit(string $collectionId_slug,string $produitId_slug){
        $produit = Product::where("id", "=",$produitId_slug)->where("active", "=", "1")->get();

        $sizes = [];
        $variantes = [];
        $images = Image::where("product_id", "=", $produitId_slug)->get();

        if($produit[0]->group_id != null){

            $IdVarianteProduit = ProductGroups::where("product_id", "=" , $produit[0]->id)->firstOrFail()->variante;

            $productGroupVariante = ProductGroups::where("group_id", "=", $produit[0]->group_id)
                ->where("variante", "=", $IdVarianteProduit)->get();


            $variantesDuProduit = ProductGroups::where("group_id", "=", $produit[0]->group_id)
                ->distinct("variante")
                ->get();

            foreach ($variantesDuProduit as $v){

                if($v->product_id !== $produit[0]->id){
                $variantes[] = Product::where("id", "=", $v->product_id)->first();

                }

            }

            foreach ($productGroupVariante as $p){

                if($p->taille != null){

                    $t = Taille::where("id", "=", $p->taille)
                        ->first();

                    $sizes[$t->name] = $p->product_id;
                }

            }
        }


        return view("product", [
            "product" => $produit[0],
            "sizes" => $sizes,
            "variantes" => $variantes,
            "images" => $images,
        ]);
    }

    public function ajouterAuPanier($productId){

        $product = Product::find($productId);

        $ligneGroup = ProductGroups::where("product_id", "=", $productId)->find(1);

        $idTaille = null;
        $idVariante = null;

        if($ligneGroup?->taille){
            $idTaille = Taille::find( $ligneGroup->taille);
        }

        if($ligneGroup?->variante){
            $idVariante = Variante::find($ligneGroup->variante);
        }


        $cart = session()->get('cart', []);


        $cart[$productId]=[
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'taille' => $idVariante?->name,
            'variante' => $idTaille?->name,
        ];

        session()->put('cart', $cart);

    }

    public function panier(){

        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $pdt){
            $total += $pdt["price"];
        }

        return view('panier', [
            'total' => $total,
            'cart' =>  $cart,

        ]);
    }

    public function panierSupprimer($productId_slug){
        $cart = session()->get('cart', []);



        $total = 0;

        foreach ($cart as $pdt){
            $total += $pdt["price"];
        }

        return view('panier', [
            'total' => $total,
        ]);

    }

    public function createProduct(Request $request){

        if (is_null($request->name)){

            $collection = collection::all();
            $sousCollec = SousCollection::all();
            $sousCatego = SousCategorie::all();

            $size = Taille::all();
            $variante = Variante::all();

            return view("admin.createProduct",[
                "product" => Product::firstOrFail()->toArray(),
                "sousCollec" => $sousCollec,
                "collection" => $collection,
                "sousCatego" => $sousCatego,
                "size" => $size,
                "variante" => $variante,
            ]);
        }else{

            $produits = Product::all();
            $id = sizeof($produits);


            Product::create([
                "id" => $id,
                "collection_id" => $request->collection_id,
                "sous_collection_id" => $request->sous_collection_id,
                "sous_categorie_id" => $request->sous_categorie_id,
                "name" => $request->name,
                "description" => $request->description,
                "image" => $request->image,
                "price" => $request->price,
                "active" => $request->active,
                "size" => $request->size,
                "variante" => $request->variante,

            ]);

            return view("dashboard");

        }
    }


    public function showProduct(Product $produit){
        $products = Product::all();

        return view ("admin.product",[
            "prods" => $products->toArray(),
        ]);

    }

    public function editProduct(string $product_id_slug){
        $product = Product::where("id", "=", $product_id_slug)->get()->toArray();


        $collection = collection::all();


        $sousCollec = SousCollection::where("collection_id", "=", $product[0]["collection_id"])->get();

        $sousCatego = SousCategorie::where("sous_collection_id", "=", $sousCollec->toArray()[0]["id"])->get();



        $size = Taille::all();
        $variante = Variante::all();
        $images = Image::where("product_id", "=", $product_id_slug)->get();


        return view("admin.editProduct",[
            "product" => $product,
            "images" => $images->toArray(),
            "sousCollec" => $sousCollec,
            "collection" => $collection,
            "sousCatego" => $sousCatego,
            "size" => $size,
            "variante" => $variante,
        ]);
    }

    public function updateProduct(Request $request){
        $produit = Product::where("id", "=", $request->id);

        // $rules = [
        //     'title' => 'bail|required|string|max:255',
        //     "id" => 'bail|required|int|',
        //     "collection_id"=> 'bail|required|int|',
        //     "sous_collection_id"=> 'bail|required|int|',
        //     "sous_categorie_id"=>'bail|required|int|',
        //     "name"=>$request->name,
        //     "description"=>$request->description,
        //     "price"=>'bail|required|int|',
        //     "active"=>'bail|required|int|',
        //     "size"=>'bail|required|string|max:255',
        //     "variante"=>'bail|required|string|max:255',
        // ];

        // // if ($request->has("image")){
        // //     $rules["picture"] = 'bail|required|image|max:1024';
        // // }
        // $this->validate($request, $rules);

            // if ($request->has("image")) {

            //     Storage::delete($request->image);

            //     $path = $request->file("image")->store("public/imgs/produits");

            //     $save = new Photo;

            //     $save->name = "test";
            //     $save->path = $path;

            //     $save->save();
            // }

        $produit->update([
            "id" =>$request->id,
            "collection_id"=> $request->collection_id,
            "sous_collection_id"=> $request->sous_collection_id,
            "sous_categorie_id"=>$request->sous_categorie_id,
            "name"=>$request->name,
            "description"=>$request->description,
            "price"=>$request->price,
            "active"=>$request->active,
            "size"=>$request->size,
            "variante"=>$request->variante,
            "image" => isset($chemin_image) ? $chemin_image : $request->image,
        ]);


        return redirect(route("admin/product"));
    }

    public function destroyProduct(string $product_id_slug){
        $produit = Product::where("id", "=", $product_id_slug);
        // Storage:delete($produit->image)

        $produit->delete();


        return redirect(route("admin/product"));

    }




    public function editAttribute($attribute_slug, Request $request){

        if(is_null($request)){

        }else{

            $attribute = match ($attribute_slug) {
                "collections" => Collection::all(),
                "sousCollections" => SousCollection::all(),
                "sousCategorie " => SousCategorie::all(),
                "tailles " => products_tailles::all(),
                "descriptions" => collection::all()
            };


            return view("admin.editAttribute",[
                "attribute" => $attribute->toArray(),
                "attribute_slug" => $attribute_slug,

            ]);

        }


    }

    public function updateAttribute(Request $request){

        return view("admin.editAttribute",[
            // "attribute" => $attribute,
        ]);
    }

}

