<!-- trainer.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="trainer">
        <h2>Trainer dan Pengurus</h2>
        <ul>
            @foreach ($namaTrainer as $nama)
                <li>{{ $nama }}</li>
            @endforeach
        </ul>
    </section>
@endsection
