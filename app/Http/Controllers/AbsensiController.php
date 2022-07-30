<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::with('jabatan')->get();
        $absensi = Absensi::with('pegawai')->get();
// dd($absensi);
        // return $absensi;
        return view('absensi.index', ['absensi' => $absensi]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $pegawai = Pegawai::all();
        return view('absensi.create', compact('jabatan', 'pegawai'));

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
        $absensi = new Absensi();
        $absensi->id_pegawai = $request->id_pegawai;
        $absensi->id_jabatan = $request->id_jabatan;
        $absensi->tanggal = $request->tanggal;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->status = $request->status;
        $absensi->keterangan = $request->keterangan;

        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $absensi = Absensi::findOrFail($id);
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('absensi.edit', compact('absensi', 'pegawai', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_pegawai' => 'required',
            'id_jabatan' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        $absensi = new Absensi();
        $absensi->id_absensi = $request->id_absensi;
        $absensi->id_jabatan = $request->id_jabatan;
        $absensi->tanggal = $request->tanggal;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->status = $request->status;
        $absensi->keterangan = $request->keterangan;

        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->deleteImage();
        $absensi->delete();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');

    }
}
