<?php

namespace App\Http\Controllers;

use App\Models\anc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AncController extends Controller
{
    public function search(Request $request){
        $ancs = anc::where('nama_ibu','like','%'.$request->input('keyword').'%')
                ->orWhere('nama_suami','like','%'.$request->input('keyword').'%')
                ->paginate(10);
        if($ancs->isEmpty()){
            return redirect('/ibu-hamil')->with('errors',"data tidak  ditemukan");
        }
        
        return view('layouts/admin/bumil-table-data',compact('ancs'));
        
    }
    public function showid($id){
        $ancs = anc::findOrFail($id);
        return view('layouts.admin.detail-bumil',compact('ancs'));
    }
    public function index(){
        $ancs = anc::paginate(5);
        return view('layouts.admin.bumil-table-data',compact('ancs'));
    }
    public function store(Request $request){
        $validated_data = $request->validate([
            'tgl_pemeriksaan' => 'required|date',
            'REG' => 'required|string',
            'buku_kia' => 'required|boolean',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_suami' => 'required|string',
            'no_kk' => 'required|string',
            'nama_ibu' => 'required|string',
            'nama_suami' => 'required|string',
            'nik_ibu' => 'required|string',
            'nik_suami' => 'required|string',
            'tgl_lahir_ibu' => 'required|date',
            'tgl_lahir_suami' => 'required|date',
            'pddk_ibu' => 'required|string',
            'pddk_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'paritas' => 'required|string',
            'parsing' => 'required|string',
            'p4k' => 'required|boolean',
            'HPPT' => 'required|date',
            'HPL' => 'required|date',
            'umur_kehamilan' => 'required|string',
            'anamnesa' => 'required|string',
            'TB' => 'required|integer',
            'LILA' => 'required|integer',
            'BB' => 'required|integer',
            'TFU' => 'required|integer',
            'tensi' => 'required|string',
            'status_TT1_K1' => 'required|string',
            'TM' => 'required|string',
            'FE' => 'required|string',
            'BAT_LAIN' => 'required|string',
            'PRESENTASI' => 'required|string',
            'DJJ' => 'required|string',
            'KEPALA_THD_PAP' => 'required|string',
            'TBJ' => 'required|string',
            'Protein_urine' => 'required|string',
            'GOLDAR' => 'required|string',
            'HBSAG' => 'required|string',
            'IMS' => 'required|string',
            'HIV' => 'required|string',
            'HDK' => 'required|boolean',
            'ABORTUS' => 'required|boolean',
            'PERDARAHAN' => 'required|boolean',
            'INFEKSI' => 'required|boolean',
            'KPD' => 'required|boolean',
            'LAIN_LAIN' => 'required|string',
            'RUJUK' => 'required|string',
            'trisemester1' => 'required|integer',
            'trisemester2' => 'required|integer',
            'trisemester3' => 'required|integer',
            'FR' => 'required|string',
            'HB' => 'required|string',
            'keterangan' => 'required|string',

        ], [
            'required' => ':attribute wajib diisi.',
            'date' => ':attribute harus dalam format tanggal yang valid.',
            'string' => ':attribute harus berupa teks.',
            'boolean' => ':attribute harus bernilai benar atau salah.',
            'integer' => ':attribute harus berupa angka.',
        ]);

        $anc = anc::create($validated_data);
        session::flash('success','data berhasil ditambahkan');
        return redirect('/ibu-hamil');
    }

    public function destroy($id){
        $anc = anc::findOrFail($id);
        $anc->delete();
        Session::flash('success','data berhasil dihapus');
        return redirect('/ibu-hamil');
    }

    public function update(Request $request,$id){
        $validated_data = $request->validate([
            'tgl_pemeriksaan' => 'required|date',
            'REG' => 'required|string',
            'nama_ibu' => 'required|string',
            'buku_kia' => 'required|boolean',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'no_kk' => 'required|string',
            'nama_suami' => 'required|string',
            'nik_ibu' => 'required|string',
            'nik_suami' => 'required|string',
            'tgl_lahir_ibu' => 'required|date',
            'tgl_lahir_suami' => 'required|date',
            'pddk_ibu' => 'required|string',
            'pddk_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'paritas' => 'required|string',
            'parsing' => 'required|string',
            'p4k' => 'required|boolean',
            'HPPT' => 'required|date',
            'HPL' => 'required|date',
            'umur_kehamilan' => 'required|string',
            'anamnesa' => 'required|string',
            'TB' => 'required|integer',
            'LILA' => 'required|integer',
            'BB' => 'required|integer',
            'TFU' => 'required|integer',
            'tensi' => 'required|string',
            'status_TT1_K1' => 'required|string',
            'TM' => 'required|string',
            'FE' => 'required|string',
            'BAT_LAIN' => 'required|string',
            'PRESENTASI' => 'required|string',
            'DJJ' => 'required|string',
            'KEPALA_THD_PAP' => 'required|string',
            'TBJ' => 'required|string',
            'Protein_urine' => 'required|string',
            'GOLDAR' => 'required|string',
            'HBSAG' => 'required|string',
            'IMS' => 'required|string',
            'HIV' => 'required|string',
            'HDK' => 'required|boolean',
            'ABORTUS' => 'required|boolean',
            'PERDARAHAN' => 'required|boolean',
            'INFEKSI' => 'required|boolean',
            'KPD' => 'required|boolean',
            'LAIN_LAIN' => 'required|string',
            'RUJUK' => 'required|string',
            'trisemester1' => 'required|integer',
            'trisemester2' => 'required|integer',
            'trisemester3' => 'required|integer',
            'FR' => 'required|string',
            'keterangan' => 'required|string',
        ], [
            'required' => ':attribute wajib diisi.',
            'date' => ':attribute harus dalam format tanggal yang valid.',
            'string' => ':attribute harus berupa teks.',
            'boolean' => ':attribute harus bernilai benar atau salah.',
            'integer' => ':attribute harus berupa angka.',
        ]);
        $anc = anc::findOrFail($id);
        $anc->update($validated_data);
        Session::flash('success','data berhasil diupdate');
        return redirect('/ibu-hamil');
    }

    
}