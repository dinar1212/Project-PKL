<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
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

        $pegawai = Pegawai::with('jabatan')->get();
// dd($pegawai);
        // return $pegawai;
        return view('pegawai.index', ['pegawai' => $pegawai]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('pegawai.create', compact('jabatan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama_pegawai' => 'required',
        //     'id_jabatan' => 'required',
        //     'tgl_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        // ]);
        // $pegawai = new Pegawai();
        // $pegawai->nama_pegawai = $request->nama_pegawai;
        // $pegawai->id_jabatan = $request->id_jabatan;
        // $pegawai->tgl_lahir = $request->tgl_lahir;
        // $pegawai->jenis_kelamin = $request->jenis_kelamin;
        // $pegawai->alamat = $request->alamat;
        // $pegawai->save();
        // return redirect()->route('pegawai.index')
        //     ->with('success', 'Data berhasil dibuat!');
        $validated = $request->validate([
            'id_pegawai' => 'required',
            'id_jabatan' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->id_pegawai = $request->id_pegawai;
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;

        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        // $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {

        // $pegawai = Pegawai::findOrFail($id);
        $jabatan = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'id_pegawai' => 'required',
            'jabatan' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->id_pegawai = $request->id_pegawai;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;

        $pegawai->save();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->deleteImage();
        $pegawai->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Data berhasil dibuat!');

    }
}
