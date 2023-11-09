@extends('layouts/new_app')

@section('content')

    <h1 class="admin-title">Edition {{$attribute_slug}}</h1>

    <form method="POST" action="{{ route('admin/updateAttribute') }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf



        <div class="tab-admin">

            

                @foreach ($attribute as $item)


                    <table class="admin-main-tab">

                    <tr class="admin-second-tabb bold">
                        <td >champ</td>
                        <td >valeur actuelle</td>
                        <td >champ de modification</td>
                    </tr>

                    @foreach ($item as $key => $item)

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

                                            

                                            <option value="{{$item}}"></option>

                                        </select>
                                        @break
                                        

                                    @default
                                        <input style="resize: both; overflow:auto; width:100%; height:100%;" type="text" name="{{$key}}" value="{{$item}}">
                                        @break
                                        
                                @endswitch


                            
                            </td>

                        </tr>

                    @endforeach

                    </table>

                    
                @endforeach


                


            <input class="bouton-couture" class="bouton-couture" type="submit" name="valider" value="Valider" >
                
        </div>

    </form>

@endsection