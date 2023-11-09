@extends('layouts/new_app')

@section('content')

<a class="bouton-couture admin-button-back  " href="{{route("dashboard")}}">retour au dashboard</a>
<a class="bouton-couture admin-button-right   " href="{{route("admin/createProduct")}}">ajouter <br> un produit</a>

<h1  class="admin-title">Visualisation produits</h1>
    <div class="tab-admin">
    

        <table class="admin-main-tab">

            <tr class="admin-second-tab" >
                <td>image</td>
                <td>id</td>
                <td>collection</td>
                <td>sous collection</td>
                <td>sous catégorie</td>
                <td>nom</td>
                <td>prix</td>
                <td>éditer</td>
                <td>supprimer</td>
            </tr>

            @foreach ($prods as $p )
                <tr class="admin-second-tab">
                    <td>
                        <img class="admin-img-bigview" src="{{asset($p["image"])}}" alt="">

                    </td>
                    <td>
                        {{ $p["id"]}}
                    </td>

                    <td>
                        {{ $p["collection_id"]}}


                    </td>

                    <td>
                        {{ $p["sous_collection_id"]}}

                    </td>

                    <td>
                        {{ $p["sous_categorie_id"]}}

                    </td>
                    <td>
                        {{ $p["name"]}}

                    </td>

                    <td>
                        {{ $p["price"]}}€
                    </td>

                    <td>
                        <a class="bouton-couture small" href="{{                        
                            route("admin/editProduct", [
                                "product_id_slug" => $p["id"],
                            ])                        
                            }}">editer</a>
                    </td>

                    <td>
                        <a class="bouton-couture small red" href="{{                        
                            route("admin/destroyProduct", [
                                "product_id_slug" => $p["id"],
                            ])                        
                            }}">supprimer</a>
                    </td>


                </tr>
            @endforeach

        </table>

    </div>



@endsection