<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Antrian;
use App\Models\Opd;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        //opd
        $opds = Opd::all();
        //no_setiap_opd
        $no_dpmptsp = $this->no_dpmptsp();
        //tanggal
        $tanggal = Carbon::now();
        
        return view('welcome', compact('tanggal', 'opds', 'no_dpmptsp',));
    }

    public function no_dpmptsp()
    {
        // $lastNo = DB::table('antrians')->max('no_antrian');
        $noByDate = DB::table('antrians')
                            ->where(DB::raw('date(created_at)'), '=', DB::raw('curdate()'))
                            ->count();
        if($noByDate > 0) {
            $lastNo = DB::table('antrians')->max('no_antrian');
            $urutan = (int) substr($lastNo, 3, 3);
            $urutan++;
            $huruf = "A";
            $lastNo = $huruf . sprintf("%03s", $urutan);
        } else {
            $lastNo = "A001";
        }
        return $lastNo;
        
    }

    public function dpmptsp_store(Request $request)
    {
        //create antrian
        $antrian = Antrian::create([
            'kode_layanan' => 'A', 
            'no_antrian'   => $request->no_antrian,
            'nama_layanan' => 'DPMPTSP',
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Berhasil dicetak!',
            'data'    => $antrian  
        ]);
    }
    
}
