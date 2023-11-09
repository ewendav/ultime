@extends('layouts/new_app')

@section('content')

    <h1 class="admin-title">Edition produit</h1>

    <form method="POST" action="{{ route('admin/updateProduct',$product[0]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        

        <div  class="tab-admin">

            <table class="admin-main-tab">

                <tr class="admin-second-tabb bold">
                    <td >champ</td>
                    <td >valeur actuelle</td>
                    <td >champ de modification</td>
                </tr>

                @foreach ($product[0] as $key => $item)

                    <tr class="admin-second-tabb">
                        <td >
                            {{$key}}
                        </td>

                        <td>
                            @if ($key == "image")

                            <img class="admin-img-bigview" src="{{asset($item)}}" alt="">

                            @else
                            
                            {{$item}}
                
                            @endif
                        </td>

                        <td>

                            @switch($key)
                            @case("image")
                                <input type="file" name="{{$key}}" value="{{$item}}">
                                @break

                            @case("id")
                                <p>non modifiable</p>
                                @break

                            @case("collection_id")
                                <select name="{{$key}}" id="">      
                                    <option value="{{$item}}">{{$item}}</option>

                                    
                                    @foreach ($collection as $keyCollec => $colec)

                                        <option value="{{$colec->id}}">
                                            {{$colec->name}} - {{$colec->id}}
                                        </option>

                                    @endforeach


                                </select>
                                @break

                            @case("sous_collection_id")
                                <select name="{{$key}}" id="">  
                                    <option value="{{$item}}">{{$item}}</option>

                                    
                                    @foreach ($sousCollec as $keyCollec => $colec)
                                    
                                        <option value="{{$colec->id}}">
                                            {{$colec->name}} - {{$colec->id}}
                                        </option>

                                    @endforeach


                                </select>
                                @break

                            @case("sous_categorie_id")
                                <select name="{{$key}}" id="">    
                                    <option value="{{$item}}">{{$item}}</option>
                                    
                                    @foreach ($sousCatego as $keyCollec => $colec)
                                    
                                        <option value="{{$colec->id}}">
                                            {{$colec->name}} - {{$colec->id}}
                                        </option>

                                    @endforeach


                                </select>
                                @break

                            @case("price")
                                <input type="number" name="{{$key}}" value="{{$item}}">
                                
                                @break
                                

                            @case("active")
                                    <select name="{{$key}}">
                                        <option value="{{$item}}">{{$item}}</option>

                                        <option value="0">Produit actif</option>    
                                        <option value="1">Produit non actif</option>                                        
                                    </select>                                    
                                @break

                            @case("size")
                                <select name="{{$key}}"> 
                                    <option value="{{$item}}">{{$item}}</option>

                                    @foreach ($size as $keyCollec => $colec)

                                        <option value="{{$colec->id}}">
                                            {{$colec->name}}
                                        </option>

                                    @endforeach

                                </select>
                                @break

                            @case("variante")
                                <select name="{{$key}}" id="">      
                                    <option value="{{$item}}">{{$item}}</option>

                                    @foreach ($variante as $keyCollec => $colec)
                                    
                                        <option value="{{$colec->id}}">
                                            {{$colec->name}} - {{$colec->id}}
                                        </option>

                                    @endforeach


                                </select>
                                @break

                            @default
                                <input style="resize: both; overflow:auto; width:100%; height:100%;" type="text" name="{{$key}}" value="{{$item}}">
                                @break
                                
                        @endswitch

                        
                        </td>

                    </tr>

                @endforeach

                @foreach ($images as $key => $value)

                    <tr class="admin-second-tabb">
                        <td >
                            {{$key}}
                        </td>

                        <td>
            
                            <img class="admin-img-bigview" src="{{asset($item)}}" alt="">
                        </td>

                    </tr>
                @endforeach

            </table>

            <input class="bouton-couture" class="bouton-couture" type="submit" name="valider" value="Valider" >
                
        </div>

    </form>

@endsection