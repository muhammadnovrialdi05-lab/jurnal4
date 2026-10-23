@extends('layouts.app')

@section('title', 'Laporan Terkirim')

@section('content')
    <h2>Laporan Berhasil Dikirim</h2>

    <x-alert type="success">
        Terima kasih, {{ $laporan->nama_pelapor }}. Laporan Anda telah tersimpan dan akan ditindaklanjuti oleh BPBD Kabupaten Bandung.
    </x-alert>

    <div class="grid" style="max-width:360px;margin-bottom:20px">
        @include('partials.laporan-card', ['laporan' => $laporan])
    </div>

    <a href="{{ route('laporan.index') }}" class="btn">Lihat Daftar Laporan</a>
    <a href="{{ route('laporan.create') }}" class="btn" style="background:#64748b">Buat Laporan Lagi</a>
@endsection
