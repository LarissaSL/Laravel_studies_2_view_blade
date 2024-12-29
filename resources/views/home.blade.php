@extends('layouts.main_layout')
@section('content')
    @session('name')
        <h1>Existe a variavel name {{ session('name') }}</h1>
    @endsession
@endsection
