@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Panel principal</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$totalUsers}}</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-people"></i>
                </div>
                <a href="{{url('admin/users/index')}}" class="small-box-footer">Más información <i class="bi bi-info-circle"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$totalSellers}}</h3>
                    <p>Vendedores</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-briefcase-fill"></i>
                </div>
                <a href="{{url('admin/sellers/indexSeller')}}" class="small-box-footer">Más información <i class="bi bi-info-circle"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$totalProducts}}</h3>
                    <p>Productos</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-cart4"></i>
                </div>
                <a href="{{url('admin/products')}}" class="small-box-footer">Más información <i class="bi bi-info-circle"></i></a>
            </div>
        </div>
    </div>
@endsection