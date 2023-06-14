<!-- paket.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="paket">
        <h2>Paket Jasa</h2>
        <ul>
            @foreach ($paketJasa as $paket)
                <li>{{ $paket }}</li>
            @endforeach
        </ul>
    </section>
@endsection
