<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_anak',
        'nik_anak',
        'nama_orangtua',
        'tgl_lahir',
        'alamat',
        'berat_badan',
        'panjang_badan',
        'HBO','BCG','PENTA','PCV','IPV','ROTA_VIRUS',
        'MK','booster'
    ];
}