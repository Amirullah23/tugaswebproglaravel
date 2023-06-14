<!-- jadwal.blade.php -->
@extends('layouts.app')

@section('content')
    <section id="jadwal">
        <h2>Jadwal Belajar Stir Mobil</h2>
        <table>
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $jadwalItem)
                    <tr>
                        <td>{{ $jadwalItem['hari'] }}</td>
                        <td>{{ $jadwalItem['jam'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
