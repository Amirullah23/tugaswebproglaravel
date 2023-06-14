<!-- lokasi.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="lokasi">
        <h2>Lokasi dan Kontak</h2>
        <address>
            Alamat: {{ $lokasi['alamat'] }}<br>
            Telepon: {{ $lokasi['telepon'] }}<br>
            Email: {{ $lokasi['email'] }}
        </address>
    </section>
@endsection
