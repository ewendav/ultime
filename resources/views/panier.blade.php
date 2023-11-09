@extends('layouts/new_app')

@section('content')
    <script defer src="{{asset('js/shop.js')}}"></script>
    <div id="" class="big-image-shop-container panier-header">

        <div class="shop-description-container panier-header">
            <h2>Panier </h2>
        </div>
        <div class="little-line"></div>
    </div>

    <section class="panier">





        @if(session()->get('cart', []) !== [])

            <table class="panier-tab">

                <tr class="panier-tab-header">
                    <td>{{session()->get('cart') > 1 ? "Produits" : "Produit"}}</td>
                    <td></td>
                    <td>Prix</td>
                </tr>

                @foreach(session()->get('cart', []) as $ligne)

                    <tr class="panier-spacer"></tr>

                    <tr class="panier-tab-ligne">

                        <td class="panier-tab-ligne-product">
                            <img class="panier-image" src="{{asset($ligne["image"])}}" alt="">
                            <div>
                                <p class="panier-product-name">{{$ligne["name"]}}</p>
                                <p >{{$ligne["taille"] !== null ? $ligne["taille"] : "Taille unique" }}</p>
                            </div>

                        </td>

                        <td class="panier-tab-ligne-action">
                            <div>
                                <a href="{{route("panier/supprimer",["productId_slug" => $ligne["id"]])}}" class="product-submit submit-panier supprimer-panier">Supprimer du panier</a>
                            </div>

                        </td>

                        <td class="panier-tab-ligne-price">

                            <p class="panier-product-name"> {{$ligne["price"]}} €</p>


                        </td>

                    </tr>

                    <tr class="panier-spacer"></tr>


                @endforeach

            </table>

        <div class="panier-total">

            <p>Total : {{$total}}€</p>
            <p>Taxes & Livraisons calculées au paiement</p>

            <a class="product-submit submit-panier">Paiement</a>

        </div>


        @else

        @endif




    </section>






@endsection
