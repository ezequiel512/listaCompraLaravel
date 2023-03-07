@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:100%"/>

    </div>
    <div class="col-sm-8">

        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$arrayProductos[0]}}
        </h4>

    </div>
</div>
@stop
