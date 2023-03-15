@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-4">

            <img src="https://picsum.photos/200/300/?random" style="height:100%" />

        </div>
        <div class="col-sm-8">
            <h4>
                nombre: {{ $productos->nombre }}
            </h4>
            <h4>
                categoria: {{ $productos->categoria }}
            </h4>
            <br>
            <h6>
                Producto actualmente comprado
            </h6>
            <form action="{{ url('/productos/comprar/'.$productos['id'])}}" method="POST">
                {{ method_field('PUT') }}
                <button class="btn btn-default" type="submit" style="background-color: rgb(247, 45, 45)">comprado</button>
            </form>
            <a class="btn btn-default" type="submit" style="background-color: rgb(241, 207, 10)"
                href="{{ url('/productos/edit/' . $productos->id) }}">editar el producto</a>
            <a class="btn btn-default" type="submit" style="background-color: lightgray"
                href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">volver al listado de productos</a>
        </div>

    </div>
@stop
