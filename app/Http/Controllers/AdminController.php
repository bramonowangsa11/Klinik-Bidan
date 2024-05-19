<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
}
