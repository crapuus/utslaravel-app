<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::paginate(5);
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
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
        'nama_karyawan' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'umur' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'nohp' => 'required|integer|max:999999999999999',
]);

        $data = $request->all();
        Jabatan::create($data);
        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jabatan = Jabatan::find($id);
        // return view('jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jabatan.edit', ['jabatan' => Jabatan::find($id)]);
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
        'nama_karyawan' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'umur' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'nohp' => 'required|integer|max:999999999999999',
        ]);
        $data = $request->all();

        $jabatan = Jabatan::find($id);
        $jabatan->update($data);
        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('/jabatan');
    }
}
