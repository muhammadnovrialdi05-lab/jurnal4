@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>
    <p class="meta">Total {{ $daftarLaporan->count() }} laporan tersimpan.</p>

    @if ($daftarLaporan->isEmpty())
        <x-alert type="info">Belum ada laporan banjir.</x-alert>
    @else
        <div class="grid">
            @foreach ($daftarLaporan as $laporan)
                @include('partials.laporan-card', ['laporan' => $laporan])
            @endforeach
        </div>
    @endif
@endsection
