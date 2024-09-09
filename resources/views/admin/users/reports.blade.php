@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>Reportes</h1>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Generar reporte</h3>
            </div>
            <div class="card-body">
                <a href={{url('/admin/users/usersPdf')}} class="btn btn-success"><i class="bi bi-printer"></i> Listado de usuarios</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Generar reporte por fechas</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.users.usersPdfDates')}}" method="GET">
                    <div class="row">

                        <div class="col-md-4">
                            <label for="">Fecha inicio:</label>
                            <input type="date" name="fecha_inicio" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">Fecha fin:</label>
                            <input type="date" name="fecha_fin" class="form-control" required>
                        </div>
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <button class="btn btn-success"><i class="bi bi-printer"></i> Generar reporte</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection