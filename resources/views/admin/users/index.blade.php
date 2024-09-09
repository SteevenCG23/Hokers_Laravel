@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Listado de usuarios</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <a href="{{ url('admin/users/usersIndex') }}" class="btn bg-secondary active" > 
                            <input type="radio" name="options" id="option_b1" autocomplete="off" checked="">Activos
                        </a>
                        <a href="{{ url('admin/users/showInactiveUsers') }}" class="btn bg-secondary">
                            <input type="radio" name="options" id="option_b2" autocomplete="off">Inactivos
                        </a>
                    </div>

                    <div class="card-tools">
                        <a href="{{ url('admin/users/createUser') }}" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>

                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user['role'] !== 'admin' && $user['role'] !== 'seller' && $user['status'] !== 'inactivo')
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ url('admin/users/' . $user->id.'/show') }}" type="button" class="btn btn-info btn-sm" title="Ver"><i class="bi bi-eye"></i></a>
                                                <a href="{{ url('admin/users/' . $user->id . '/edit') }}" type="button" class="btn btn-success btn-sm" title="Editar"><i class="bi bi-pencil"></i></a>
                                                <a href="{{ url('admin/users/' . $user->id . '/confirmDeleteUser') }}" type="button" class="btn btn-danger btn-sm" title="Eliminar"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(function() {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                    "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Usuarios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscar:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true,
                                "lengthChange": true,
                                "autoWidth": false,
                                buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        orientation: 'landscape',
                                        buttons: [{
                                            text: 'Copiar',
                                            extend: 'copy'

                                        }, {
                                            extend: 'pdf'
                                        }, {
                                            extend: 'csv'
                                        }, {
                                            extend: 'excel'
                                        }, {
                                            text: 'Imprimir',
                                            extend: 'print'
                                        }]
                                    },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'auto'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
