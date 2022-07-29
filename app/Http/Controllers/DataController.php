<?php

namespace App\Http\Controllers;

use App\Models\Data;
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
        //
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
        //
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'nis' => 'required|unique:siswas|max:255',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required',
        //     'tgl_lahir' => 'required',
        //     'alamat' => 'required',
        // ]);
        // $data = new Data();
        // $data->nama = $request->nama;
        // $data->nis = $request->nis;
        // $data->jenis_kelamin = $request->jenis_kelamin;
        // $data->agama = $request->agama;
        // $data->tgl_lahir = $request->tgl_lahir;
        // $data->alamat = $request->alamat;
        // $data->save();
        // return redirect()->route('data.index')
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
        $data = Data::findOrFail($id);
        return view('data.show', compact('data'));

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
        $data = Data::findOrFail($id);
        return view('data.edit', compact('data'));

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

        // $data = Data::findOrFail($id);
        // $data->nama = $request->nama;
        // $data->nis = $request->nis;
        // $data->jenis_kelamin = $request->jenis_kelamin;
        // $data->agama = $request->agama;
        // $data->tgl_lahir = $request->tgl_lahir;
        // $data->alamat = $request->alamat;
        // $data->save();
        // return redirect()->route('data.index')
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
        $data = Data::findOrFail($id);
        $data->delete();
        return redirect()->route('data.index')
            ->with('success', 'Data bBerhasil Dihapus!');

    }
}
