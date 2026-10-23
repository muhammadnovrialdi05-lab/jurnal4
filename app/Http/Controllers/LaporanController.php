<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LaporanController extends Controller
{
    /** Daftar laporan dari database. */
    public function index(): View
    {
        $daftarLaporan = Laporan::all()->sortByDesc('tanggal_kejadian');

        return view('laporan.index', compact('daftarLaporan'));
    }

    /** Form pelaporan. */
    public function create(): View
    {
        return view('laporan.create');
    }

    /** Simpan laporan ke tabel laporan. */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama_pelapor'     => 'required|string|max:255',
            'lokasi'           => 'required|string|max:255',
            'tinggi_genangan'  => 'required|integer|min:1|max:1000',
            'tanggal_kejadian' => 'required|date|before_or_equal:today',
        ]);

        $laporan = Laporan::create($data);

        return redirect()->route('laporan.konfirmasi', $laporan);
    }

    /** Halaman konfirmasi setelah laporan tersimpan. */
    public function konfirmasi(Laporan $laporan): View
    {
        return view('laporan.konfirmasi', compact('laporan'));
    }
}
