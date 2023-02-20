<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Antrian;
use App\Models\Opd;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   

    public function index()
    {
        return view('welcome');
    }
    
}
