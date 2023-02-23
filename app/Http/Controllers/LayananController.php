<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Opd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::latest()->paginate(5);
        return view('backend.layanan', compact('layanan'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function halamanlayanan()
    {
        return view('backend.layanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opds = Opd::find(1)->get();
        return view('backend.layanan.create', compact('opds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_layanan'  => 'required',
            'nama_layanan'  => 'required',
            'opd_id'  => 'required',
        ]);
      
        Layanan::create([
            'kode_layanan'     => $request->kode_layanan,
            'nama_layanan'     => $request->nama_layanan,
            'opd_id'       => $request->opd_id,
        ]);

        return redirect()->route('layanans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
