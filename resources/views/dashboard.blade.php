<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @auth
                        @if(Auth::user()->role == 1)
                            {{ __("Page administrateur") }}

                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>


    @auth
        @if(Auth::user()->role == 1)
            <div class="admin-controlcenter">

                <div class="admin-controlcenter-left">

                    <a href="{{route("admin/product")}}">modifier les produits</a>



                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug" => "descriptions",
                        ])}}">modifier les descriptions</a>


                </div>

                <div class="admin-controlcenter-left">

                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug"=>"collections",
                        ])}}">modifier les collections</a>

                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug"=>"sousCollections",
                        ])}}">modifier les sous collections</a>

                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug"=>"sousCategorie",
                        ])}}">modifier les sous catégorie</a>

                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug"=>"tailles",
                        ])}}">modifier les tailles</a>

                    <a href="{{route("admin/editAttribute",[
                            "attribute_slug"=>"variantes",
                        ])}}">modifier les variantes</a>

                </div>


            </div>
        @endif
    @endauth



</x-app-layout>
