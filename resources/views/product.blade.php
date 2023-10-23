@extends('layouts/new_app')

@section('content')

<script>
    let navbar = document.querySelector("nav");
    navbar.style.transform =" translateY(0)";
</script>

<div class="product-container">

    <div class="product-imgs">
{{--        <img src="{{asset($product->image)}}" alt="">--}}
{{--        <img src="{{asset($product->image)}}" alt="">--}}
{{--        <img src="{{asset($product->image)}}" alt="">--}}

        <img src="/imgs/produits/sac-basque.jpg" alt="">
        <img src="/imgs/produits/sac-basque.jpg" alt="">
        <img src="/imgs/produits/sac-basque.jpg" alt="">

    </div>

    <div class="product-details">

            <div class="product-details-high">
                <p class="product-title">{{$product->name}}</p>
                <p class="product-price">{{$product->price}} EUR</p>
            </div>

            <form action="" method="GET">

                @if ($product->size != null)
                    <div class="product-details-taille">

                        @foreach ($sizes as $size)
                            @if ($size["stock"] > 0)
                                <div class="product-details-taille-choice-container">
                                    <input id="taille-choice{{$size["taille"]}}"  class="product-details-taille-choice" type="radio" name="product-size" value="{{$size["taille"]}}">
                                    <label class="test" for="taille-choice{{$size["taille"]}}">{{$size["taille"]}}</label>
                                </div>

                            @endif

                        @endforeach


                    </div>
                @endif

            </form>




    </div>
</div>



@endsection
