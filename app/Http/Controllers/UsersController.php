<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Function paparkan senarai users
    public function paparsenarai()
    {
      return view('users/template_pengguna');
    }

    // Function paparkan template tambah user
    public function borangTambahUser()
    {
      return view('users/template_borang_tambah_user');
    }

    // Function terima data dari borang tambah user
    public function simpanDataUser( Request $request )
    {
      // Proses validasi data
      // $this->validate( $request, $data );
      $request->validate( [
        'nama_user' => 'required|min:3'
        ] );

      // Terima data dari 1 input yang diperlukan
      // $data = $request->input('nama_user');

      // Terima SEMUA data dari input borang
      $data = $request->all();

      // Terima nama dan email
      // $data = $request->only('nama_user', 'email');

      // Terima SEMUA data kecuali yang dinyatakan
      // $data = $request->except('nama_user', 'email');

      return $data;
    }
}
