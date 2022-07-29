<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
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
        $absensi = Absensi::all();
        $active = 'absensi';
        return view('absensi.index', compact('absensi', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'nis' => 'required|unique:siswas|max:255',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required',
        //     'tgl_lahir' => 'required',
        //     'alamat' => 'required',
        // ]);
        // $absensi = new Absensi();
        // $absensi->nama = $request->nama;
        // $absensi->nis = $request->nis;
        // $absensi->jenis_kelamin = $request->jenis_kelamin;
        // $absensi->agama = $request->agama;
        // $absensi->tgl_lahir = $request->tgl_lahir;
        // $absensi->alamat = $request->alamat;
        // $absensi->save();
        // return redirect()->route('absensi.index')
        //     ->with('success', 'Data berhasil dibuat!');
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
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));

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
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));

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
        //
        // $validated = $request->validate([

        //     'nama' => 'required',
        //     'nis' => 'required|unique:siswas|max:255',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required',
        //     'tgl_lahir' => 'required',
        //     'alamat' => 'required',

        // ]);

        // $absensi = Absensi::findOrFail($id);
        // $absensi->nama = $request->nama;
        // $absensi->nis = $request->nis;
        // $absensi->jenis_kelamin = $request->jenis_kelamin;
        // $absensi->agama = $request->agama;
        // $absensi->tgl_lahir = $request->tgl_lahir;
        // $absensi->alamat = $request->alamat;
        // $absensi->save();
        // return redirect()->route('absensi.index')
        //     ->with('success', 'Data berhasil diedit!');

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
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();
        return redirect()->route('absensi.index')
            ->with('success', 'Data bBerhasil Dihapus!');

    }
}
