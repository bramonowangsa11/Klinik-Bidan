<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;
    public function Suami(){
        return $this->belongsTo(User::class);
    }
    public function Ibu(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'tgl_kb',
        'jmlh_anak',
        'umur_anak_terkecil',
        'jaminan',
        'alki',
        'pasca_plasenta',
        'pasca_salin',
        'do',
        'gc_dari','metode_kb',
        'berat_badan','tinggi_badan','tensi',
        'lila','tgl_kembali','kegagalan','inform_consent',
        'keterangan','id_suami','id_ibu'
    ];
}
