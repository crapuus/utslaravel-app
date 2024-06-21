<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisi = Divisi::paginate(5);
        return view('divisi.index', compact('divisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        return view('divisi.create', compact('jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jabatan_id' => 'required|exists:jabatans,id',
            'nama_divisi' => 'required|string|max:255',
            'ruang' => 'required|string|max:255',
            'gedung' =>  'string|max:255', 
            'nomor_ruang' =>  'integer|max:255',
        ]);

        $data = $request->all();
        $divisi = Divisi::create($data);
        $divisi->jabatan()->associate(Jabatan::findOrFail($request->jabatan_id));
        $divisi->save();

        return redirect('/divisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.show', compact('divisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.edit', ['divisi'=> Divisi::find($id)],compact('jabatan'));
        
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
        $request->validate([
        'nama_divisi' => 'required|string|max:255',
        'ruang' => 'required|string|max:255',
        'Gedung' =>  'string|max:255',
        'nomor_ruang' =>  'integer|max:255',
        ]);

        $data = $request->all();
         $divisi = Divisi::find($id);
         $divisi->update($data);
        return redirect('/divisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();
        return redirect('/divisi');
    }
}
