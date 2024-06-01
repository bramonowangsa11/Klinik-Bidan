<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'nik' => 'required|unique:pasiens,nik|numeric|digits:16 ',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'no_telp' => 'required|string|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

        ],[
            'name.required' => 'Nama wajib diisi.',
            'email.required'=>'Email wajib diisi',
            'email.unique'=>'Email sudah terdaftar',
            'nik.numeric' => 'Format NIK harus berupa angka.',
            'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'password.required'=>'Password wajib diisi',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.date' => 'Format tanggal lahir tidak valid.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.string' => 'Nomor telepon harus berupa teks.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Buat data pasien
        $pasien = Pasien::create([
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'alamat' => $validatedData['alamat'],
            'ttl' => $validatedData['ttl'],
            'no_telp' => $validatedData['no_telp'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'user_id' => $user->id,
        ]);

        
        Session::flash('success', 'Pasien berhasil didaftarkan');
        return redirect('/');
    }

    public function index(){
        $user = auth()->user();
        return view('layouts.users.user-reservasi',compact('user'));
    }

    public function daftar(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|unique:pasiens,nik|numeric|digits:16 ',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'no_telp' => 'required|string|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',

        ],[
            'name.required' => 'Nama wajib diisi.',
            'nik.numeric' => 'Format NIK harus berupa angka.',
            'no_telp.numeric'=> 'Format nomor telpon harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.date' => 'Format tanggal lahir tidak valid.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.string' => 'Nomor telepon harus berupa teks.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
        ]);

        $pasien = Pasien::create([
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'alamat' => $validatedData['alamat'],
            'ttl' => $validatedData['ttl'],
            'no_telp' => $validatedData['no_telp'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'user_id' => null,
        ]);  
    }

    public function findBynik(Request $request){
        $validatedData = $request->validate([
            'nik'=> 'required','numeric','digits:16'
        ],[
            'nik.required' => 'nik wajib diisi',
            'nik.numeric' => 'nik harus terdiri dari angka',
            'nik.digits' => 'nik harus terdiri dari 16 digit',
        ]);

        $pasien = Pasien::where('nik',$validatedData['nik'])->first();
        if($pasien->isEmpty()){
            return response()->json(['message'=>'pasien tidak ditemukan'],404);
        }
        else{
            return response()->json($pasien);
        }
    }
}
