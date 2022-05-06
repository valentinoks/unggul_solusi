<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pelanggan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePelangganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelangganRequest $request)
    {
        $pelanggan = Pelanggan::create($request->all());
        return $pelanggan;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show($KODE_PELANGGAN)
    {
        return Pelanggan::find($KODE_PELANGGAN);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelangganRequest  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelangganRequest $request, Pelanggan $pelanggan)
    {
        $data = Pelanggan::find($request->KODE_PELANGGAN);

        $data->NAMA = $request->NAMA;
        $data->DOMISILI = $request->DOMISILI;
        $data->JENIS_KELAMIN = $request->JENIS_KELAMIN;
        
        $data->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($KODE_PELANGGAN)
    {
        return Barang::find($KODE_PELANGGAN)->delete();
    }
}
