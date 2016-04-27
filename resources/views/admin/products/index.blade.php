@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Produtos</h3>

    <p><a href="{{ route('admin.products.create') }}" class="btn btn-primary">Novo Produto</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $products->render() !!}

</div>
@endsection