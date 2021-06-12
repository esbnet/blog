@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<h1>Relação de produtos</h1>

@if($busca != "")
    <p>O usuário está procurando: {{$busca}}</p>
@endif

@endsection
