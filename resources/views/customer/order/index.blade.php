@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pedidos</h3>

    <p><a href="{{ route('customer.order.create') }}" class="btn btn-primary">Novo Pedido</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->status }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $orders->render() !!}

</div>
@endsection