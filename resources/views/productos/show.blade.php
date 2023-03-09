@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:100%"/>

    </div>
    <div class="col-sm-8">
        <h4>
            nombre: {{$productos->nombre}}
        </h4>
        <h4>
            categoria: {{$productos->categoria}}
        </h4>
        <br>
        <h6>
            Producto actualmente comprado
        </h6>

        @if ($productos->pendiente==false)
        <button class="btn btn-default" type="submit" style="background-color: rgb(155, 1, 1)">comprado</button>
        @elseif($productos->pendiente==true)
        <button class="btn btn-default" type="submit" style="background-color: rgb(1, 155, 1)">comprar</button>
        @endif
        <a class="btn btn-default" type="submit" style="background-color: lightgray" href="{{ url('/productos/edit/' . $productos->id ) }}">editar el producto</a>
        <a class="btn btn-default" type="submit" style="background-color: lightgray" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">volver al listado de productos</a>
    </div>

</div>
@stop
