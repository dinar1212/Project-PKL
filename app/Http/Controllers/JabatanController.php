<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        $active = 'jabatan';
        return view('jabatan.index', compact('jabatan', 'active'));

    }
}
