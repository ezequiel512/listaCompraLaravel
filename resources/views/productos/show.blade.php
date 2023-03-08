@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:100%"/>

    </div>
    <div class="col-sm-8">

        <h4>
            nombre: {{$arrayProductos[0]}}
        </h4>
        <h4>
            categoria: {{$arrayProductos[1]}}
        </h4>
        <br>
        <h6>
            Producto actualmente comprado
        </h6>
        <button class="btn btn-default" type="submit" style="background-color: rgb(155, 1, 1)">Pendiente de compra</button>
        <a class="btn btn-default" type="submit" style="background-color: lightgray" href="{{ url('/productos/edit/' . $id ) }}">editar el producto</a>
        <a class="btn btn-default" type="submit" style="background-color: lightgray" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">volver al listado de productos</a>
    </div>
</div>
@stop
