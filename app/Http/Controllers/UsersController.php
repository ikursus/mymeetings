<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class UsersController extends Controller
{
    // Function paparkan senarai users
    public function paparsenarai()
    {
      // Dapatkan senarai users dari table users
      $senarai_users = DB::table('users')->get();
      // Bagi response papar template_pengguna yang disertakan dengan variable
      // $senarai_users
      return view('users/template_pengguna', compact('senarai_users'));
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
        'nama_user' => 'required|min:3',
        'password' => 'confirmed'
      ] );

      // Terima data dari 1 input yang diperlukan
      // $data = $request->input('nama_user');

      // Terima SEMUA data dari input borang
      //$data = $request->except('_token', 'password', 'password_confirmation');
      $data = $request->only('nama_user', 'email', 'telefon', 'jabatan_id', 'ic');
      // Attachkan maklumat password yang di encrypt kepada array $data
      $data['password'] = bcrypt( $request->input('password') );

      // Simpan rekod user baru ke dalam table users
      DB::table('users')->insert($data);

      // Terima nama dan email
      // $data = $request->only('nama_user', 'email');

      // Terima SEMUA data kecuali yang dinyatakan
      // $data = $request->except('nama_user', 'email');

      // Bagi response redirect kepada halaman senarai users
      return redirect('/users');
    }

    public function borangEditUser($id)
    {
      $user = DB::table('users')->where('id', $id)->first();

      return view('users/template_borang_edit_user', compact('user'));
    }

    public function updateDataUser(Request $request, $id)
    {
      // Proses validasi data
      // $this->validate( $request, $data );
      $request->validate( [
        'nama_user' => 'required|min:3',
        'email' => 'required|unique:users,email,' . $id
      ] );

      // Terima data dari 1 input yang diperlukan
      // $data = $request->input('nama_user');

      // Terima SEMUA data dari input borang
      //$data = $request->except('_token', 'password', 'password_confirmation');
      $data = $request->only('nama_user', 'email', 'telefon', 'jabatan_id', 'ic');
      // Attachkan maklumat password yang di encrypt kepada array $data
      $data['password'] = bcrypt( $request->input('password') );

      // Simpan rekod user baru ke dalam table users
      DB::table('users')->where('id', $id)->update($data);

      // Terima nama dan email
      // $data = $request->only('nama_user', 'email');

      // Terima SEMUA data kecuali yang dinyatakan
      // $data = $request->except('nama_user', 'email');

      // Bagi response redirect kepada halaman senarai users
      return redirect('/users');
    }
}
