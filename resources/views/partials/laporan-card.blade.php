@php $status = $laporan->status; @endphp

<div class="card {{ strtolower($status) }}">
    <h3>{{ $laporan->lokasi }}</h3>
    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tanggal: {{ $laporan->tanggal_kejadian->translatedFormat('d F Y') }}</p>
    <p>Tinggi genangan: <strong>{{ $laporan->tinggi_genangan }} cm</strong></p>
    <span class="badge {{ strtolower($status) }}">{{ $status }}</span>
</div>
