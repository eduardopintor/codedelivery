@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Editando Cliente: {{ $client->user->name }}</h3>

    @include('errors._check')

    {!! Form::model($client, ['route' => ['admin.clients.update', $client->id]]) !!}

    @include('admin.clients._form')

    {!! Form::submit('Salvar Cliente',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection