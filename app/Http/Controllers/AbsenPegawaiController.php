<?php

namespace App\Http\Controllers;

use App\Models\AbsenPegawai;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class AbsenPegawaiController extends Controller
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
        return view('absenpegawai.masuk');
        
    }

    public function indexkeluar()
    {
        return view('absenpegawai.keluar');
    }

    // public function absen(Request $request)
    // {
    //     $user_id = Auth::user()->id;
    //     $date = date("Y-m-d");
    //     $time = date("H:i:s");

    //     $absen = new Absen;
    //     if (isset($request->btnIn)) {
    //         $absen->create([
    //             'user_id' => $user_id,
    //             'date' => $date,
    //             'time_in' => $time
    //         ]);
    //         return "absen masuk";
    //     } else if (isset($request->btnOut)) {

    //     }
    //     return $request->all();
    // }

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
        $timezone = "Asia/Jakarta";
        $datetime = new DateTime('now', new DateTimeZone($timezone));
        $date = $datetime->format("Y-m-d");
        $localtime = $datetime->format("H:i:s");

        $absenpegawai = AbsenPegawai::where([
            ['user_id', '=', auth()->user()->id],
            ['date', '=', $date],
        ])->first();

        if ($absenpegawai) {
            return redirect()->route('absenpegawai')
                ->with('error', 'Data Absen sudah ada !');
        } else {
            AbsenPegawai::create([
                'user_id' => auth()->user()->id,
                'date' => $date,
                'time_in' => $localtime,
            ]);
        }
        return redirect()->route('absenpegawai')
            ->with('success', 'Absen Berhasil !');
    }

    public function absenkeluar(Request $request)
    {
        $timezone = "Asia/Jakarta";
        $datetime = new DateTime('now', new DateTimeZone($timezone));
        $date = $datetime->format("Y-m-d");
        $localtime = $datetime->format("H:i:s");

        $absenpegawai = AbsenPegawai::where([
            ['user_id', '=', auth()->user()->id],
            ['date', '=', $date],
        ])->first();

        $dt = [
            'time_out' => $localtime,
        ];

        if ($absenpegawai->time_out == "") {
            $absenpegawai->update($dt);
            return redirect()->route('absen-pegawai')
                ->with('success', 'Data Absen Sudah Ada !');
        } else {
            return redirect()->route('absen-pegawai')
                ->with('error', 'Absen Berhasil !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AbsenPegawai  $absenPegawai
     * @return \Illuminate\Http\Response
     */
    public function show(AbsenPegawai $absenPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AbsenPegawai  $absenPegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(AbsenPegawai $absenPegawai)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AbsenPegawai  $absenPegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbsenPegawai $absenPegawai)
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
     * @param  \App\Models\AbsenPegawai  $absenPegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsenPegawai $absenPegawai)
    {
        $absenpegawai = AbsenPegawai::findOrFail($id);
        $absenpegawai->delete();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil hapus!');

    }

}
