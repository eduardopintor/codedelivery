@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Novo Cliente</h3>

    @include('errors._check')

    {!! Form::open(['route' => 'admin.clients.store']) !!}

    @include('admin.clients._form')

    {!! Form::submit('Criar Cliente',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection