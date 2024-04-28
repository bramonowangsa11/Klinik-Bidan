<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anc extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_pemeriksaan',
        'REG',
        'no_kk',
        'buku_kia',
        'pekerjaan_ibu',
        'pekerjaan_suami',        
        'nama_ibu',
        'nama_suami',
        'nik_ibu',
        'nik_suami',
        'tgl_lahir_ibu',
        'tgl_lahir_suami',
        'pddk_ibu',
        'pddk_suami',
        'alamat',
        'no_hp',
        'paritas',
        'parsing',
        'p4k',
        'HPPT',
        'HPL',
        'umur_kehamilan',
        'anamnesa',
        'TB',
        'LILA',
        'BB',
        'TFU',
        'tensi',
        'status_TT1_K1',
        'TM',
        'FE',
        'BAT_LAIN',
        'PRESENTASI',
        'DJJ',
        'KEPALA_THD_PAP',
        'TBJ',
        'HB','Protein_urine','GOLDAR','HBSAG',
        'IMS','HIV','HDK','ABORTUS','PERDARAHAN','INFEKSI','KPD','LAIN_LAIN',
        'PRESENTASI',
        'trisemester1',
        'trisemester2',
        'trisemester3',
        'FR',
        'RUJUK',
        'keterangan',
    ];
}
