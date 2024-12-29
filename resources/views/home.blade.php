@extends('layouts.main_layout')
@section('content')
    @production
        <p>Estou em ambiente de produção</p>
    @else
        <p>Não estou em ambiente de produção</p>
    @endproduction

    @env('local')
        <p>Estou no ambiente local {{ env('DB_DATABASE') }}</p>
    @endenv
@endsection
