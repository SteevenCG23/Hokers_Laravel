@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de producto</h1>
    </div>
    <hr>

    <div class="row">
        <div class="cold-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingrese la información requerida</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control">
                                <label for="">Descripción</label>
                                <input type="text" class="form-control">
                                <label for="">Precio</label>
                                <input type="text" class="form-control">
                                <label for="">Foto</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
