<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opd = Opd::paginate(5);
        return view('backend.opd', compact('opd'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function halamanopd()
    {
        return view('backend.opd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.opd.create');
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
            'kode_opd'  => 'required',
            'nama_opd'  => 'required',
        ]);
      
        Opd::create([
            'kode_opd'     => $request->kode_opd,
            'slug'         => Str::slug($request->kode_opd),
            'nama_opd'     => $request->nama_opd,
        ]);

        return redirect()->route('opds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show(Opd $opd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit(Opd $opd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opd $opd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opd $opd)
    {
        //
    }
}
