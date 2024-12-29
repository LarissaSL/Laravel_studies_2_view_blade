@extends('layouts.main_layout')
@section('content')
    {{-- Switch Case --}}
    @switch($value)
        @case(100)
            <p>Valor {{ $value }}</p>
        @break

        @case(200)
            <p>Valor {{ $value }}</p>
        @break

        @case(300)
            <p>Valor {{ $value }}</p>
        @break

        @default
            <p>Outro</p>
    @endswitch
@endsection
