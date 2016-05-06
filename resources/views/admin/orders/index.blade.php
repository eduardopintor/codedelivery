@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pedidos</h3>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Data</th>
            <th>Itens</th>
            <th>Entregador</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>#{{ $order->id }}</td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->created_at }}</td>
            <td>
                @foreach($order->items as $item)
                <li>{{ $item->qty }} - {{ $item->product->name }} - {{ $item->product->price }}</li>
                @endforeach
            </td>
            <td>
                @if($order->deliveyman)
                    {{ $order->deliveryman_id->name }}
                @else
                    --
                @endif
            </td>
            <td>{{ $order->status }}</td>
            <td>
                <a href="{{ route('admin.orders.edit', ['id' => $order->id]) }}" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $orders->render() !!}

</div>
@endsection