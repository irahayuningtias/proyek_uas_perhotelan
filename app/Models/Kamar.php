<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Deskripsi;

class Kamar extends Model
{
    use HasFactory;

    public $table = "kamar";
    public $primaryKey = 'id_kamar';

    public $fillable = [
        'id_hotel',
        'id_kamar',
        'jenis_kamar',
        'foto',
        'deskripsi_kamar',
        'hrg_per_mlm',
    ];

    public function kamar(){
        return $this->hasMany(Deskripsi::class);
    }

    public function reservasi(){
        return $this->belongsTo(Kamar::class);
    }
}