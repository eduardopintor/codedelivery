@extends('layouts.app')

@section('content')
<h1>Olá {{ $nome  }}</h1>

<ul>
    @foreach($liguagens as $linguagem)
        <li>{{ $linguagem }}</li>
    @endforeach
</ul>
@endsection