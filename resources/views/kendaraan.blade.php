<!-- kendaraan.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="kendaraan">
        <h2>Kendaraan</h2>
        <h3>Manual</h3>
        <ul>
            @foreach ($kendaraanManual as $kendaraan)
                <li>{{ $kendaraan }}</li>
            @endforeach
        </ul>

        <h3>Matic</h3>
        <ul>
            @foreach ($kendaraanMatic as $kendaraan)
                <li>{{ $kendaraan }}</li>
            @endforeach
        </ul>
    </section>
@endsection
