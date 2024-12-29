@extends('layouts.main_layout')
@section('content')
    {{-- For --}}
    @for ($i = 0; $i < 5; $i++)
        <p>{{ $i }}
        <p>
    @endfor

    {{-- Foreach - Percorrer uma coleção de dados --}}
    @foreach ($cities as $city)
        <p>{{ $city }}</p>
    @endforeach

    {{-- Forelse --}}
    @forelse ($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Names está vazio</p>
    @endforelse

    @while ($index < 6)
        <p>Indice: {{ $index }}</p>
        @php
            $index++;
        @endphp
    @endwhile

    {{-- Continue e Break--}}
    {{-- For --}}
    <h1>Continue e Break</h1>
    @for ($i = 0; $i < 10; $i++)
        {{-- Continue --}}
        @if ($i == 2)
            @continue
        @endif
        
        <h1>{{ $i }}<h1>


        {{-- Break --}}
        @if ($i == 7)
            @break
        @endif
    @endfor

    {{-- Loop Variable --}}
    @foreach ($cities as $city)
        <p>City: {{ $city }}</p>
        <p>Index: {{ $loop->index }}</p>
        <p>Iteration: {{ $loop->iteration }}</p>
        <p>Remaining: {{ $loop->remaining }}</p>
        <p>Count: {{ $loop->count }}</p>
        
        @if($loop->first)
            <p>Esta é a primeira iteração.</p>
        @endif
        
        @if($loop->last)
            <p>Esta é a última iteração.</p>
        @endif
    @endforeach
@endsection
