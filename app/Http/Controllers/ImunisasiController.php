<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImunisasiController extends Controller
{
    public function inputImunisasi(){
        return view('layouts.admin.input-table-imunisasi');
    }
    public function search(Request $request){
        $imunisasis = Imunisasi::where('nama_anak','like','%'.$request->input('keyword').'%')
                ->paginate(10);
        if($imunisasis->isEmpty()){
            return redirect('/admin')->with('errors',"data tidak  ditemukan");
        }
        else{
            return view('layouts/admin/dashboard-admin',compact('imunisasis'));
        }
    }
    public function index(){
        $imunisasis = Imunisasi::paginate(10);
        
        // return response()->json(['data' => $imunisasi], 200);
        return view('layouts/admin/dashboard-admin',compact('imunisasis'));
    }
    public function showid($id){
        $imunisasi = Imunisasi::find($id);

        if (!$imunisasi) {
            abort(404);
        }

        return view('layouts.admin.detail-table-imunisasi', ['imunisasi' => $imunisasi]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_anak' => 'required|string|max:255',
            'nik_anak' => 'required|string|numeric|digits:16',
            'nama_orangtua' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'berat_badan' => 'required|numeric',
            'panjang_badan' => 'required|numeric',
            'HBO' => 'required|boolean',
            'BCG' => 'required|boolean',
            'PENTA' => 'required|in:0,1,2,3',
            'IPV' => 'required|in:0,1,2,3',
            'PCV' => 'required|in:0,1,2,3',
            'ROTA_VIRUS' => 'required|in:0,1,2,3',
            'MK' => 'required|boolean',
            'booster' => 'required|in:PENTA,MK',
            'tanggal' => 'required|date'
            
        ],[
            'nama_anak.required' => 'Nama anak harus diisi.',
            'nama_anak.string' => 'Nama anak harus berupa teks.',
            'nama_anak.max' => 'Nama anak maksimal :max karakter.',
            'nik_anak.required' => 'NIK anak harus diisi.',
            'nik_anak.numeric' => 'NIK anak harus berupa angka.',
            'nik_anak.digits' => 'NIK harus terdiri dari 16 digit.',
            'nama_orangtua.required' => 'Nama orang tua harus diisi.',
            'nama_orangtua.string' => 'Nama orang tua harus berupa teks.',
            'nama_orangtua.max' => 'Nama orang tua maksimal :max karakter.',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi.',
            'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal :max karakter.',
            'berat_badan.required' => 'Berat badan harus diisi.',
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'panjang_badan.required' => 'Panjang badan harus diisi.',
            'panjang_badan.numeric' => 'Panjang badan harus berupa angka.',
            'HBO.required' => 'Kolom HBO harus diisi.',
            'HBO.boolean' => 'Kolom HBO harus berupa benar atau salah.',
            'BCG.required' => 'Kolom BCG harus diisi.',
            'BCG.boolean' => 'Kolom BCG harus berupa benar atau salah.',
            'PENTA.required' => 'Kolom PENTA harus diisi.',
            'PENTA.in' => 'Kolom PENTA harus memiliki nilai 0, 1, 2, atau 3.',
            'IPV.required' => 'Kolom IPV harus diisi.',
            'IPV.in' => 'Kolom IPV harus memiliki nilai 0, 1, 2, atau 3.',
            'PCV.required' => 'Kolom PCV harus diisi.',
            'PCV.in' => 'Kolom PCV harus memiliki nilai 0, 1, 2, atau 3.',
            'ROTA_VIRUS.required' => 'Kolom ROTA VIRUS harus diisi.',
            'ROTA_VIRUS.in' => 'Kolom ROTA VIRUS harus memiliki nilai 0, 1, 2, atau 3.',
            'MK.required' => 'Kolom MK harus diisi.',
            'MK.boolean' => 'Kolom MK harus berupa benar atau salah.',
            'booster.required' => 'Kolom Booster harus diisi.',
            'booster.in' => 'Kolom Booster harus memiliki nilai PENTA atau MK.',
            'tanggal.required' => 'Tanggal harus diisi.',
            
        ]);
        $imunisasi = Imunisasi::create($validatedData);
        Session::flash('success', 'Pasien berhasil didaftarkan');
        return redirect('/input-table');
    }

    public function destroy($id)
    {
        $imunisasi = Imunisasi::findOrFail($id);
        $imunisasi->delete();
        Session::flash('success', 'data berhasil dihapus');
        return redirect('/admin');
    }

    public function update(Request $request, $id)
    {
        $imunisasi = Imunisasi::findOrFail($id);

        

        $validatedData = $request->validate([
            'nama_anak' => 'required|string|max:255',
            'nik_anak' => 'required|string|numeric|digits:16',
            'nama_orangtua' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'berat_badan' => 'required|numeric',
            'panjang_badan' => 'required|numeric',
            'HBO' => 'required|boolean',
            'BCG' => 'required|boolean',
            'PENTA' => 'required|in:0,1,2,3',
            'IPV' => 'required|in:0,1,2,3',
            'PCV' => 'required|in:0,1,2,3',
            'ROTA_VIRUS' => 'required|in:0,1,2,3',
            'MK' => 'required|boolean',
            'booster' => 'required|in:PENTA,MK',
            'tanggal' => 'required|date',
        ],[
            'nama_anak.required' => 'Nama anak harus diisi.',
            'nama_anak.string' => 'Nama anak harus berupa teks.',
            'nama_anak.max' => 'Nama anak maksimal :max karakter.',
            'nik_anak.required' => 'NIK anak harus diisi.',
            'nik_anak.numeric' => 'NIK anak harus berupa angka.',
            'nik_anak.digits' => 'NIK harus terdiri dari 16 digit.',
            'nama_orangtua.required' => 'Nama orang tua harus diisi.',
            'nama_orangtua.string' => 'Nama orang tua harus berupa teks.',
            'nama_orangtua.max' => 'Nama orang tua maksimal :max karakter.',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi.',
            'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal :max karakter.',
            'berat_badan.required' => 'Berat badan harus diisi.',
            'berat_badan.numeric' => 'Berat badan harus berupa angka.',
            'panjang_badan.required' => 'Panjang badan harus diisi.',
            'panjang_badan.numeric' => 'Panjang badan harus berupa angka.',
            'HBO.required' => 'Kolom HBO harus diisi.',
            'HBO.boolean' => 'Kolom HBO harus berupa benar atau salah.',
            'BCG.required' => 'Kolom BCG harus diisi.',
            'BCG.boolean' => 'Kolom BCG harus berupa benar atau salah.',
            'PENTA.required' => 'Kolom PENTA harus diisi.',
            'PENTA.in' => 'Kolom PENTA harus memiliki nilai 0, 1, 2, atau 3.',
            'IPV.required' => 'Kolom IPV harus diisi.',
            'IPV.in' => 'Kolom IPV harus memiliki nilai 0, 1, 2, atau 3.',
            'PCV.required' => 'Kolom PCV harus diisi.',
            'PCV.in' => 'Kolom PCV harus memiliki nilai 0, 1, 2, atau 3.',
            'ROTA_VIRUS.required' => 'Kolom ROTA VIRUS harus diisi.',
            'ROTA_VIRUS.in' => 'Kolom ROTA VIRUS harus memiliki nilai 0, 1, 2, atau 3.',
            'MK.required' => 'Kolom MK harus diisi.',
            'MK.boolean' => 'Kolom MK harus berupa benar atau salah.',
            'booster.required' => 'Kolom Booster harus diisi.',
            'booster.in' => 'Kolom Booster harus memiliki nilai PENTA atau MK.',
            'tanggal.required' => 'Tanggal harus diisi.',
            
        ]);

        $imunisasi->update($validatedData);
        Session::flash('success', 'data berhasil diupdate');
        return redirect()->back();
    }
}
