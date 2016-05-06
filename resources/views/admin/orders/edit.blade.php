@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pedido: #{{ $order->id }} - R$ {{ $order->total }} </h2>

    <h3>Cliente: {{ $order->client->user->id }} - {{ $order->client->user->name }} </h3>
    <h4>Data: {{ $order->created_at }}</h4>
    <hr>
    <h4>Endereço de Entrega</h4>
    <p>
        {{ $order->client->address }}<br>
        {{ $order->client->city }} -{{ $order->client->state }}<br>
        CEP: {{ $order->client->zipcode }}

    </p>
    <hr>
    @include('errors._check')

    {!! Form::model($order, ['route' => ['admin.orders.update', $order->id]]) !!}

    @include('admin.orders._form')

    {!! Form::submit('Salvar Pedido',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection