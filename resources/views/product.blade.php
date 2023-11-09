@extends('layouts/new_app')

@section('content')
    <script defer src="{{asset('js/shop.js')}}"></script>

    <input type="hidden" class="jsSelector" value="product">


<div class="product-container">

    <div class="product-imgs">
        <a target="_blank" href="{{$product->image}}">

            <img src="{{asset($product->image)}}" alt="">

        </a>


        @foreach($images as $i)

            <a target="_blank" href="{{asset($i->url)}}">
                <img src="{{asset($i->url)}}" alt="">

            </a>



        @endforeach

    </div>

    <div class="product-details">

            <div class="product-details-high">
                <p class="product-title">{{$product->name}}</p>

                <p class="product-price">{{$product->price}} EUR</p>

                <p class="product-description">{{$product->description}}</p>
            </div>


            <form id="product-form" class="product-form" action="" method="GET">

                @csrf

                @if ($sizes != null)
                <div class="product-line"></div>

                <div class="margin-inline">

                    <p class="product-details-taille-header" >Tailles : </p>
                    <div class="product-details-taille">


                        @foreach ($sizes as $key => $value)

                                <div class="product-details-taille-choice-container">
                                    <input id="taille-choice{{$key}}"  class="product-details-taille-choice" type="radio" name="product-size" value="{{$value}}">
                                    <label class="taille-choice-label" for="taille-choice{{$key}}">{{$key}}</label>
                                </div>

                        @endforeach

                    </div>

                </div>

                @else

                    <input name="product-size" type="hidden" checked="true" value="{{$product->id}}">

                @endif
                <p class="size-warning taille">Vous devez sélectioner une taille</p>

                    @if ($variantes != null)
                        <div class="product-line"></div>

                <div class="margin-inline">
                        <p class="product-details-taille-header" >Variantes : </p>
                        <div class="product-details-taille">



                            @foreach ($variantes as $v)


                                <div class="product-details-taille-choice-container">
                                    <input id="variante-choice{{$v->id}}" class="product-details-taille-choice" type="radio" name="product-size">
                                    <label class="variante-choice-label variante-selected" for="variante-choice{{$v->id}}">
                                        <a href="{{route("produit",[
                                                    "collectionId_slug" => $v->collection_id,
                                                    "produitId_slug" => $v->id,
                                                ])}}">
                                        <img class="variante-image" src="{{asset($v->image)}}" alt="">
                                        </a>
                                    </label>
                                </div>

                            @endforeach


                        </div>
                </div>
                    @endif

                    <div class="product-line"></div>

                    <div class="product-submit margin-inline" >
                        Ajouter au panier
                    </div>
                <p class="size-warning erreur">Erreur inatendue</p>


            </form>

        <div class="product-line no-mb"></div>


        <div class="product-extra-description-container">

            <div class="product-extra-header margin-inline">
                <p>Description</p>
                <p class="plus">+</p>
            </div>

            <div class="innerHTML" >
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
            </div>

        </div>

        <div class="product-line no-mt"></div>

        <div class="product-line no-mb no-mt"></div>

        <div class="product-extra-livraison-container ">

            <div class="product-extra-header margin-inline">
                <p>Livraison</p>
                <p class="plus">+</p>
            </div>

            <div class="innerHTML" >
                <ul>
                    <li>Livraison en main propre sur nantes</li>
                    <li>Envoi posssible à la charge du client</li>
                </ul>
            </div>

        </div>

        <div class="product-line no-mt"></div>






    </div>
</div>



@endsection
