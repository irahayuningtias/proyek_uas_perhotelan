<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    public $fillable = [
        'id_reservasi',
        'jml_tamu',
        'check_in',
        'check_out',
        'lama_inap',
        'nama_pemesan',
        'no_identitas',
        'no_hp',
        'diskon',
        'total_byr',
        'id_hotel',
    ];

    public function reservasi(){
        return $this->belongsTo(Deskripsi::class);
    }
}
