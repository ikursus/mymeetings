<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query Builder - dapatkan rekod senarai jabatan dari table jabatan
        // $senarai_jabatan = DB::table('jabatan')->get();
        $senarai_jabatan = Jabatan::all();

        return view('folder_jabatan/template_senarai', compact('senarai_jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('folder_jabatan/template_borang_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Semak borang (validasi)
        $request->validate([
          'nama' => 'required|min:3'
        ]);

        // Dapatkan semua data dari borang
        // $data = $request->only('nama');
        $data = $request->all();

        // DB::table('jabatan')->insert($data);
        Jabatan::create($data);

        // Paparkan result
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
      // Dapatkan data dari table users berdasarkan ID
      // $jabatan = DB::table('jabatan')->where('id', $id)->first();
      $jabatan = Jabatan::find($id);

      // Papar template edit jabatan
      return view('folder_jabatan/template_borang_edit', compact('jabatan') );


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
      // Semak borang (validasi)
      $request->validate([
        'nama' => 'required|min:3'
      ]);

      // Dapatkan semua data dari borang
      // $data = $request->only('nama');
      $data = $request->all();

      // DB::table('jabatan')->where('id', $id)->update($data);
      Jabatan::find($id)->update($data);

      // Paparkan result
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
      // Cari jabatan yang nak di delete
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        // Kembali ke halaman jabatan
        return redirect('/jabatan');
    }
}
