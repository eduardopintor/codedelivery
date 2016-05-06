@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Nova Cupom</h3>

    @include('errors._check')

    {!! Form::open(['route' => 'admin.coupons.store']) !!}

    @include('admin.coupons._form')

    {!! Form::submit('Criar Cupom',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection