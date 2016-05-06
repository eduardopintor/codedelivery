@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Cupons</h3>

    <p><a href="{{ route('admin.coupons.create') }}" class="btn btn-primary">Novo Cupom</a></p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Valor</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coupons as $coupon)
        <tr>
            <td>{{ $coupon->id }}</td>
            <td>{{ $coupon->code }}</td>
            <td>{{ $coupon->value }}</td>
            <td>
                <a href="{{ route('admin.coupons.edit', ['id' => $coupon->id]) }}" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $coupons->render() !!}

</div>
@endsection