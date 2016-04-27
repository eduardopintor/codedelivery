@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Editando Categoria: {{ $category->name }}</h3>

    @include('errors._check')

    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id]]) !!}

    @include('admin.categories.form')

    {!! Form::submit('Criar Categoria',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection