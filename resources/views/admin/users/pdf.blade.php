@extends('layouts.pdf')
@section('content')
    <h2 style="text-align: center"><u>Listado de usuarios</u></h2>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user['role'] !== 'admin' && $user['role'] !== 'seller' && $user['status'] !== 'inactivo')
                    <tr>

                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>

                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
