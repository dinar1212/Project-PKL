<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsenController extends Controller
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
        $absen = Absen::with('jabatan','pegawai')->get();
        
// dd($absen);
        // return $absen;
        return view('absen.index', ['absen' => $absen]);
        

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
        return view('absen.create', compact('jabatan', 'pegawai'));

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
        $absen = new Absen();
        $absen->id_pegawai = $request->id_pegawai;
        $absen->id_jabatan = $request->id_jabatan;
        $absen->tanggal = date('Y-m-d');
        $absen->jam_masuk = date('h:i:s');
        $absen->status = $request->status;
        $absen->keterangan = $request->keterangan;

        $absen->save();
        return redirect()->route('absen.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $absen = Absen::findOrFail($id);
        $absen = Absen::findOrFail($id);
        return view('absen.show', compact('absen'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absen = Absen::findOrFail($id);
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('absen.edit', compact('absen', 'pegawai', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
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
        $absen = new Absen();
        $absen->id_pegawai = $request->id_pegawai;
        $absen->id_jabatan = $request->id_jabatan;
        $absen->tanggal = $request->tanggal;
        $absen->jam_masuk = $request->jam_masuk;
        $absen->status = $request->status;
        $absen->keterangan = $request->keterangan;

        $absen->save();
        return redirect()->route('absen.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absen = Absen::findOrFail($id);
        $absen->deleteImage();
        $absen->delete();
        return redirect()->route('absen.index')
            ->with('success', 'Data berhasil dibuat!');

    }
}
