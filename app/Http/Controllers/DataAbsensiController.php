<?php

namespace App\Http\Controllers;

use App\Models\DataAbsensi;
use Illuminate\Http\Request;

class DataAbsensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        $active = 'data';
        return view('data.index', compact('data', 'active'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pegawai' => 'required',
            'id_jabatan' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        $data = new Data();
        $data->id_absensi = $request->id_absensi;
        $data->id_jabatan = $request->id_jabatan;
        $data->tanggal = $request->tanggal;
        $data->jam_masuk = $request->jam_masuk;
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;

        $data->save();
        return redirect()->route('data.index')
            ->with('success', 'data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        $data = DataAbsensi::findOrFail($id);
        return view('data.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(data $data)
    {

        $data = DataAbsensi::findOrFail($id);
        return view('data.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data $data)
    {
        $validated = $request->validate([
            'id_pegawai' => 'required',
            'id_jabatan' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        $data = new Data();
        $data->id_absensi = $request->id_absensi;
        $data->id_jabatan = $request->id_jabatan;
        $data->tanggal = $request->tanggal;
        $data->jam_masuk = $request->jam_masuk;
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;

        $data->save();
        return redirect()->route('data.index')
            ->with('success', 'data berhasil dibuat!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(data $data)
    {
        $data = DataAbsensi::findOrFail($id);
        $data->delete();
        return redirect()->route('data.index')
            ->with('success', 'data Berhasil Dihapus!');

    }
}
