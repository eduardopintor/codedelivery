@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Clientes</h3>

    <p><a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Novo Cliente</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->user->name }}</td>
            <td>
                <a href="{{ route('admin.clients.edit', ['id' => $client->id]) }}" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $clients->render() !!}

</div>
@endsection