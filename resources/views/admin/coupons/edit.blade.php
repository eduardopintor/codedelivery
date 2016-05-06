@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Editando Cupom: {{ $category->name }}</h3>

    @include('errors._check')

    {!! Form::model($category, ['route' => ['admin.coupons.update', $category->id]]) !!}

    @include('admin.coupons._form')

    {!! Form::submit('Salvar Cupom',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection