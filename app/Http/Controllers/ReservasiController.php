<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservasiController extends Controller
{   
<<<<<<< HEAD
=======
    public function todayReservation(){
        $now = Carbon::now()->toDateString();
        $reservasis = Reservasi::where('tgl_reservasi',$now)->paginate(5);
        if($reservasis->isEmpty()){
            Session::flash('errors','tidak terdapat reservasi pada hari ini');
            return view('layouts.admin.lihat-reservasi',compact('reservasis'));
        }
        else{
            return view('layouts.admin.lihat-reservasi',compact('reservasis'));
        }
    }
>>>>>>> 7073fbfef0c460cc0220e61459d64a9524d2506c
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
        if(Auth::user()->role == "admin"){
            $reservasis = Reservasi::with('user')->paginate(5);
            return view('layouts.admin.lihat-reservasi',compact('reservasis'));
        }
        else{
            $id_user = Auth::user()->id;
            $reservasis = Reservasi::with('user')->where('user_id',$id_user)->paginate(5);
            return view('layouts.users.lihat-reservasi-user',compact('reservasis'));
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
            if(Auth::user()->role=='pasien'){
                return redirect('/pasien');
            }
            else{
                return redirect('/daftar-reservasi');
            }
            
        }
    }

    public function destroy($id){
        if(Auth::user()->role == "pasien"){
            $reservasis = Reservasi::findOrfail($id);
            $tgl = $reservasis["tgl_reservasi"];
            $sesi = $reservasis["sesi"];
            switch ($sesi){
                case 1:{
                    $jam = '06:00';
                    break;
                }
                case 2:{
                    $jam = '06:30';
                    break;
                }
                case 3:{
                    $jam = '07:00';
                    break;
                }
                case 4:{
                    $jam = '07:30';
                    break;
                }
                case 5:{
                    $jam = '08:00';
                    break;
                }
                case 6:{
                    $jam = '08:30';
                    break;
                }
                case 7:{
                    $jam = '16:00';
                    break;
                }
                case 8:{
                    $jam = '16:30';
                    break;
                }
                case 9:{
                    $jam = '17:00';
                    break;
                }
                case 10:{
                    $jam = '17:30';
                    break;
                }
                case 11:{
                    $jam = '18:00';
                    break;
                }
                case 12:{
                    $jam = '18:30';
                    break;
                }
                case 13:{
                    $jam = '19:00';
                    break;
                }
                case 14:{
                    $jam = '19:30';
                    break;
                }
            }
            $tgl_jam = $tgl.' '.$jam;
            $waktu_reservasi = Carbon::createFromFormat('Y-m-d H:i', $tgl_jam,'Asia/Jakarta');
            $now = Carbon::now('Asia/Jakarta');
            $perbedaanJam = $waktu_reservasi->diffInHours($now);
            if($perbedaanJam<3){
                return redirect()->back()->with('errors','pembatalan reservasi hanya dapat dilakukan 3 jam sebelum waktu reservasi');
            }
            else{
                $reservasis->delete();
                Session::flash('success','data berhasil dihapus');
                return redirect()->back();
            }
        }
        else{
            $reservasi = Reservasi::findOrfail($id);
            $reservasi->delete();
            Session::flash('success','data berhasil dihapus');
            return redirect()->back();
        }
        
        
    }
    public function todayReservation(){
        $now = Carbon::now('Asia/Jakarta');
        $reservasis = Reservasi::with(['user'])
            ->whereDate('tgl_reservasi',$now)->paginate(12);
        return view('layouts.admin.lihat-reservasi',compact('reservasis'));
    }

    

}