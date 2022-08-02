<?php

namespace App\Http\Controllers;

use App\Models\Dasbor;
use Illuminate\Http\Request;

class DasborController extends Controller
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
        $dasbor = Dasbor::all();
        $active = 'dasbor';
        return view('dasbor.index', compact('dasbor', 'active'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.create');

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
    'dasbor' => 'required',

]);
$dasbor = new Dasbor();
$dasbor->dasbor = $request->dasbor;
$dasbor->save();
return redirect()->route('dasbor.index')
    ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Dasbor $dasbor)
    {
        $dasbor = Dasbor::findOrFail($id);
return view('dasbor.show', compact('dasbor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Dasbor $dasbor)
    {
        $dasbor = Dasbor::findOrFail($id);
return view('dasbor.edit', compact('dasbor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dasbor $dasbor)
    {
        $dasbor = Dasbor::findOrFail($id);
$dasbor->delete();
return redirect()->route('dasbor.index')
    ->with('success', 'Data Berhasil Dihapus!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dasbor)
    {
        $dasbor = Dasbor::findOrFail($id);
        $dasbor->delete();
        return redirect()->route('dasbor.index')
            ->with('success', 'Data Berhasil Dihapus!');

    }
}
