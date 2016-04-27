@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Categorias</h3>

    <p><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Nova Categoria</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $categories->render() !!}

</div>
@endsection