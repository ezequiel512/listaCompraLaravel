@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar producto
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form>
                        {{ method_field('PUT') }}
                        {{-- TODO: Protección contra CSRF --}}

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Categoría</label>
                            <input type="text" name="categoria" id="categoria" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Imagen</label>
                            <input type="text" name="imagen" id="imagen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>
                    </form>
                    {{-- TODO: Cerrar formulario --}}

                </div>
            </div>
        </div>
    </div>

@stop
