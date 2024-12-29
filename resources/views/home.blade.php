@extends('layouts.main_layout')
@section('content')
    {{-- Instrução IF simples --}}
    @if ($value == 100)
        <h1>Primeira Parte do Código</h1>
    @endif

    {{-- Instrução IF ELSE --}}
    @if ($value != 100)
        <h1>Primeira Parte do Código</h1>
    @else
        <h1>Segunda Parte do Código</h1>
    @endif

    {{-- Instrução IF ELSEIF ELSE ENDIF --}}
    @if ($value < 10)
        <p>Primeiro</p>
    @elseif($value < 50)
        <p>Segundo</p>
    @elseif($value <= 100)
        <p>Terceiro</p>
    @elseif($value < 200)
        <p>Quarto</p>
    @else
        <p>Outro caso</p>
    @endif
@endsection
