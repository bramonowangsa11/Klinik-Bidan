<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservasiController extends Controller
{   
    public function sesibyDate(Request $request){
        $tgl = $request['tgl_reservasi'];
        $tgl_reservasi = Carbon::parse($tgl);
        $hSebelumReservasi = $tgl_reservasi->copy();
        $today = Carbon::now();
        
        if($today->lt($hSebelumReservasi)){
            $allSessions = range(1, 14);
            $selectedSessions = Reservasi::where('tgl_reservasi', $tgl_reservasi)
                ->pluck('sesi')->toArray();
            $availableSessions = array_diff($allSessions, $selectedSessions);
            return view('layouts.users.user-reservasi2',compact('tgl','availableSessions'));
            
        }
        else{
            return redirect()->back()->with('errors', 'reservasi hanya bisa dilakukan maks h-1 dari tanggal reservasi');
        } 
    }
    public function index(){
        $reservasis = Reservasi::paginate(10);
        if($reservasis->isEmpty()){
            return response()->json([
                'success' => false,
                'messages' => 'data kosong',
            ],404);
        }
        else{
            return response()->json([
                'success' => true,
                'messages' => 'ok',
                'data' => $reservasis,
            ],200);
        }
    }

    public function store(Request $request){
        $validated_data = $request->validate([
            'tgl_reservasi' => 'required|date',
            'sesi' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12,14',
            'layanan' => 'required|in:Bumil,KB,Imunisasi',
            'keterangan' => 'required|string|max:255',
        ],[
            'tgl_reservasi.required' => 'Tanggal reservasi wajib diisi.',
            'tgl_reservasi.date' => 'Tanggal reservasi harus dalam format tanggal yang valid.',
            'sesi.required' => 'Sesi wajib dipilih.',
            'sesi.in' => 'Sesi yang dipilih tidak valid.',
            'layanan.required' => 'Layanan wajib dipilih.',
            'layanan.in' => 'Layanan yang dipilih tidak valid.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
        ]);
        $tgl = $validated_data['tgl_reservasi'];
        $sesi = $validated_data['sesi'];
        $reservasiSama = Reservasi::where('tgl_reservasi',$tgl)
            ->where('sesi',$sesi)
            ->exists(); 
        if($reservasiSama){
            return redirect()->back()->with('errors', 'sudah terdapat reservasi pada sesi dan tanggal tersebut');
        }
        else{
            $validated_data['user_id'] = Auth::user()->id;
            $reservasis = Reservasi::create($validated_data);
            Session::flash('success', 'reservasi berhasil didaftarkan');
            return redirect('/pasien');
        }
    }

    public function destroy($id){
        $reservasi = Reservasi::findOrfail($id);
        $reservasi->delete();
        Session::flash('success','data berhasil dihapus');
        return redirect('/ibu-hamil');
    }

    public function update(Request $request, $id){
        $validated_data = $request->validate([
            'tgl_reservasi' => 'required|date',
            'sesi' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12,14',
            'layanan' => 'required|in:Bumil,KB,Imunisasi',
            'keterangan' => 'required|string|max:255',
        ],[
            'tgl_reservasi.required' => 'Tanggal reservasi wajib diisi.',
            'tgl_reservasi.date' => 'Tanggal reservasi harus dalam format tanggal yang valid.',
            'sesi.required' => 'Sesi wajib dipilih.',
            'sesi.in' => 'Sesi yang dipilih tidak valid.',
            'layanan.required' => 'Layanan wajib dipilih.',
            'layanan.in' => 'Layanan yang dipilih tidak valid.',
            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
        ]);
        $tgl = $validated_data['tgl_reservasi'];
        $sesi = $validated_data['sesi'];
        $reservasiSama = Reservasi::where('tgl_reservasi',$tgl)
            ->where('sesi',$sesi)
            ->exists(); 
        if($reservasiSama){
            return response()->json([
                'success'=> false,
                'messages'=>'sudah terdapat reservasi pada sesi dan tanggal tersebut'
            ],404);
        }
        else{
            $validated_data['user_id'] = $reservasi['user_id'];
            $reservasi->update($validated_data);
            
            return response()->json([
                'success'=> true,
                'messages'=>'data berhasil tersimpan'
            ],200);
        }
        
    }

    public function showid($id){
        $reservasi = Reservasi::findOrfail($id);
    }


}
