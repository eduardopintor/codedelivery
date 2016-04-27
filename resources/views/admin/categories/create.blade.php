@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Nova Categoria</h3>

    @include('errors._check')

    {!! Form::open(['route' => 'admin.categories.store']) !!}

    @include('admin.categories._form')

    {!! Form::submit('Criar Categoria',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection