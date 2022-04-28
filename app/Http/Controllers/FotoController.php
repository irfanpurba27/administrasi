<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\siswa;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'file'          => 'required',
        ]);
        $test = auth()->user()->id;
        $file           = $request->file('file');
        $nama_file      = $file->getClientOriginalName();
        $request->file->move(public_path($test), $nama_file);

        Foto::create([
            'id_user' => auth()->id(),
            'file' => $nama_file,
        ]);
        

        return redirect('/home')->withToastSuccess('file Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(foto $foto)
    {
        //
    }
}
