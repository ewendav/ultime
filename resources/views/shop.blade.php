@extends('layouts/new_app')

@section('content')

<script>
    let navbar = document.querySelector("nav");
    navbar.style.transform =" translateY(0)";
</script>


<script defer src="{{asset('js/shop.js')}}"></script>

<section class="shop-container">

    <div class="shop-description-container">
        <h2>Collection {{$head}}</h2>
        <p>{{$description}}</p>
    </div>


    <div class="shop-filters-container">

        <div class="filters">   

            @if ($sousCollec->count() > 0)

                @foreach ($sousCollec as $p)   
                
                    @if ($p->id == $sousCollectionId_slug)
                        <a class="cate-button selected" disabled href="">{{$p->name}}
                        </a>                         
                    @else
                        <a class="cate-button" href="{{                        
                            route("collection/sousCollection", [
                                "collectionId_slug" => $p->collection_id,
                                "sousCollectionId_slug" => $p->id,
                            ])                        
                            }}">{{$p->name}}
                        </a> 
                    @endif                    

                @endforeach    

            @endif

        </div>

        <div class="subcategories">                 

            @if ($sousCatego->count() > 0)

                @foreach ($sousCatego as $p)

                    @if ($p->id == $sousCategorieId_slug)
                        <a class="cate-button selected" href="">
                            {{$p->name}}
                        </a>
                    @else
                        <a class="cate-button" href="{{
                            route("collection/sousCollection/sousCategorie", [
                                "collectionId_slug" => $sousCollec[0]->collection_id,
                                "sousCollectionId_slug" => $p->sous_collection_id,
                                "sousCategorieId_slug" => $p->id
                            ])}}">
                            {{$p->name}}
                        </a>                         
                    @endif

                @endforeach

            @endif

        </div>
        
    </div>

    <div class="shop">


        @if ($products->count() > 0)        

            @foreach ($products as $key => $p)
            
                @if ($key == "")
                    @foreach ($p as $nullArticles)
                        <a href="/collection/{{$nullArticles->collection_id}}/produit/{{$nullArticles->id}}" class="shop-item">
                            <div class="item-img" style="background-image: url('{{asset($nullArticles->image)}}')" >
                            </div>
                                <p class="shop-item-name">{{$nullArticles->name}}</p>
                                <p class="shop-item-price price">{{$nullArticles->price}} €</p>
                        </a>
                    @endforeach
                @else

                    <a href="/collection/{{$p[0]->collection_id}}/produit/{{$p[0]->id}}" class="shop-item">
                        <div class="item-img" style="background-image: url('{{asset($p[0]->image)}}')" >
                        </div>
                            <p class="shop-item-name">{{$p[0]->name}}</p>
                            <p class="shop-item-price price">{{$p[0]->price}} €</p>
                    </a>

                @endif
            @endforeach

        @else

            <span class="error">Plus de produits dans cette collection</span>            
            
        @endif
        
    </div>
    <div class="links">

        {{$products->links('pagination::default')}}

    </div>



</section>



@endsection