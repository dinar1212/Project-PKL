<?php

namespace App\Http\Controllers;

use App\Models\AbsenPegawai;
use App\Models\Absensi;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\User;
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
    public function index2()
    {
        $absensi = AbsenPegawai::all();
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $user = User::all();

// dd($absensi);
        // return $absensi;
        return view('absensi.index2', compact('absensi', 'pegawai', 'jabatan', 'user'));

    }
    public function index()
    {
        $absensi = AbsenPegawai::all();
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $user = User::all();

// dd($absensi);
        // return $absensi;
        return view('absensi.index', compact('absensi', 'pegawai', 'jabatan', 'user'));

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
        date_default_timezone_set('Asia/Jakarta');

        $validated = $request->validate([
            'id_pegawai' => 'required',
            'id_jabatan' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        $absensi = new Absensi();
        $absensi->id_pegawai = $request->id_pegawai;
        $absensi->id_jabatan = $request->id_jabatan;
        $absensi->tanggal = date('Y-m-d');
        $absensi->jam_masuk = date('h:i:s');
        $absensi->status = $request->status;
        $absensi->keterangan = $request->keterangan;

        $absensi->save();
        return redirect()->route('absen.index')
            ->with('success', 'Absen Berhasil');

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
        $absensi = Absensi::findOrFail($id);

        // $absensi = new Absensi();
        $absensi->id_pegawai = $request->id_pegawai;
        $absensi->id_jabatan = $request->id_jabatan;
        $absensi->tanggal = $request->tanggal;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->status = $request->status;
        $absensi->keterangan = $request->keterangan;

        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil diedit!');

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
        $absensi->delete();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil hapus!');

    }
}
