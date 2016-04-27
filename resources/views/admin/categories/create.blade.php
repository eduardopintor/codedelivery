@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Nova Categoria</h3>

    {!! Form::open(['route' => 'admin.categories.store']) !!}

    <div class="form-group">
        {!! Form::label('Name', 'Nome:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Criar Categoria',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection