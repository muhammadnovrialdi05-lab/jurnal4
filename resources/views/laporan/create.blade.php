@extends('layouts.app')

@section('title', 'Buat Laporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    <div class="box">
        @if ($errors->any())
            <x-alert type="danger">Data belum valid, periksa kembali isian Anda.</x-alert>
        @endif

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <div class="field">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>
                @error('nama_pelapor') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label for="lokasi">Lokasi (Kecamatan)</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="mis. Dayeuhkolot" required>
                @error('lokasi') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="1" required>
                @error('tinggi_genangan') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label for="tanggal_kejadian">Tanggal Kejadian</label>
                <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="{{ old('tanggal_kejadian', now()->toDateString()) }}" max="{{ now()->toDateString() }}" required>
                @error('tanggal_kejadian') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection
