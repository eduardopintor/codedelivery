@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Editando Cupom: {{ $coupon->name }}</h3>

    @include('errors._check')

    {!! Form::model($coupon, ['route' => ['admin.coupons.update', $coupon->id]]) !!}

    @include('admin.coupons._form')

    {!! Form::submit('Salvar Cupom',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection