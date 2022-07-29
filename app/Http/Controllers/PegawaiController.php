<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
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
        $pegawai = Pegawai::all();
        $active = 'pegawai';
        return view('pegawai.index', compact('pegawai', 'active'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pegawai.create');
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
            'nama_pegawai' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'id_jabatan' => 'required|unique:jabatans',
        ]);
        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->id_jabatan = $request->id_jabatan;

        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'nama_pegawai' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'id_jabatan' => 'required|unique:jabatans',
        ]);
        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->id_jabatan = $request->id_jabatan;

        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data bBerhasil Dihapus!');

    }
}
