<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'nama_pelapor',
        'lokasi',
        'tinggi_genangan',
        'tanggal_kejadian',
    ];

    protected $casts = [
        'tinggi_genangan'  => 'integer',
        'tanggal_kejadian' => 'date',
    ];

    /**
     * Status genangan berdasarkan tinggi (cm):
     *  < 30 cm  => Waspada
     *  30-79 cm => Siaga
     *  >= 80 cm => Awas
     */
    public function getStatusAttribute(): string
    {
        return match (true) {
            $this->tinggi_genangan >= 80 => 'Awas',
            $this->tinggi_genangan >= 30 => 'Siaga',
            default                      => 'Waspada',
        };
    }
}
