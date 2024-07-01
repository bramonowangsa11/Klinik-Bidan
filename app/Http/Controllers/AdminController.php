<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Carbon\Carbon;
use App\Models\anc;
use App\Models\User;
use App\Models\Pasien;
use App\Models\CobaAnc;
use App\Models\Imunisasi;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('layouts/admin/admin');
    }
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
            return view('layouts.admin.admin-reservasi2',compact('tgl','availableSessions'));
            
        }
        else{
            return redirect()->back()->with('errors', 'reservasi hanya bisa dilakukan maks h-1 dari tanggal reservasi');
        } 
    }

    public function dashboard(){
        $now =Carbon::now('Asia/Jakarta');
        $hari = $now->day;
        $bulan = $now->month;
        $tahun = $now->year;

        $kb_thismonth = Kb::whereYear('tgl_kb',$tahun)->whereMonth('tgl_kb',$bulan)->count();
        $bumil_thismonth = CobaAnc::whereYear('tgl_pemeriksaan',$tahun)->whereMonth('tgl_pemeriksaan',$bulan)->count();
        $today_reservation = Reservasi::whereDate('tgl_reservasi',$now)->count();
        $imunisasi_thismonth = Imunisasi::whereYear('tanggal',$tahun)
        ->whereMonth('tanggal',$bulan)->count();
        $count_user = User::count();
        $count_pasien = Pasien::count();
        return view('layouts.admin.admin-dashboard',compact('kb_thismonth',
                                'bumil_thismonth',
                                'imunisasi_thismonth',
                                'today_reservation',
                                'count_user',
                                'count_pasien'));
    }
}
