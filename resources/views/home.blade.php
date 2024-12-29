@extends('layouts.main_layout')
@section('content')
    {{-- Empty - avaliar se a variavel existe, se é 0/vazio/null --}}
    @empty($values)
        <p>Não Existe</p>
    @else
        <p>Existe</p>
    @endempty

    {{-- Isset - Está ou não está definido a variável --}}
    @isset($value)
        <p>Existe a variável</p>
    @else
        <p>Não Existe a variável</p>
    @endisset

    {{-- Unless - Verificar se uma condição não é verdadeira." --}}
    @unless ($value == 100)
        <p>OKKKK</p>
    @endunless
@endsection
