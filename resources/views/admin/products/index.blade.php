@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Listado de productos</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Productos registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/products/create')}}" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            @if ($product['status'] !== 'inactivo')
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="data:image/jpeg;base64,{{ base64_encode($product->image) }}" alt=""
                                width="150px" height="150px" class="mx-auto p-2"></td>
                                <td>{{$product->status}}</td>
                                <td>
                                    ver/ editar / borrar
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
@endsection