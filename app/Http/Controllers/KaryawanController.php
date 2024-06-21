<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::paginate(10);
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'tanggal_lahir' =>  'required|date',
        'gender' => 'required|in:pria,wanita',
        'pendidikan_terakhir' => 'required|string|max:255',
]);

        $data = $request->all();
        Karyawan::create($data);
        return redirect('/karyawan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('karyawan.edit', ['karyawan' => Karyawan::find($id)]);
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
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'tanggal_lahir' =>  'required|date',
        'gender' => 'required|in:pria,wanita',
        'pendidikan_terakhir' => 'required|string|max:255',
        ]);
        $data = $request->all();

        $karyawan = Karyawan::find($id);
        $karyawan->update($data);
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
