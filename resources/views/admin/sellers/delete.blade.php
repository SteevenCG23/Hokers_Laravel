@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Vendedor: {{ $user->name }}</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar el registro?</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/sellers/'.$user->id.'/deleteSeller')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre:</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Correo:</label>
                                    <input type="email" value="{{$user->email}}" name="email" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/sellers/sellersIndex') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar vendedor</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection