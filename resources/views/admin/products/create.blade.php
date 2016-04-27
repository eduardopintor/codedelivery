@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Novo Produto</h3>

    @include('errors._check')

    {!! Form::open(['route' => 'admin.products.store']) !!}

    @include('admin.products.form')

    {!! Form::submit('Criar Produto',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection