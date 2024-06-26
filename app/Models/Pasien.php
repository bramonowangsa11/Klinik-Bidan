<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
        
    }
    protected $fillable = [
        'name', 
        'nik',
        'alamat',
        'ttl',
        'no_telp',
        'jenis_kelamin',
        'user_id',
    ];
}
