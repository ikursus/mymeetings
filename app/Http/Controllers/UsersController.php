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
      // $senarai_users = DB::table('users')->get();
      $senarai_users = DB::table('users')->orderBy('id', 'desc')->paginate(2);
      // Bagi response papar template_pengguna yang disertakan dengan variable
      // $senarai_users
      // $jumlah_users = DB::table('users')->count();

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
      // Dapatkan data dari table users berdasarkan ID
      $user = DB::table('users')->where('id', $id)->first();
      // Paparkan template borang edit user
      return view('users/template_borang_edit_user', compact('user'));
    }

    public function updateDataUser(Request $request, $id)
    {
      // Proses validasi data
      $request->validate( [
        'nama_user' => 'required|min:3',
        'email' => 'required|unique:users,email,' . $id
      ] );

      // Terima SEMUA data dari input borang
      $data = $request->only('nama_user', 'email', 'telefon', 'jabatan_id', 'ic');
      // Semak adakah password ingin dikemaskini (ruangan password tidak kosong)
      if ( ! empty( $request->input('password') ) )
      {
        // Attachkan maklumat password yang di encrypt kepada array $data
        $data['password'] = bcrypt( $request->input('password') );
      }

      // Simpan rekod user baru ke dalam table users
      DB::table('users')->where('id', $id)->update($data);

      // Bagi response redirect kepada halaman senarai users
      return redirect('/users');
    }

    // function delete users
    public function deleteUser($id)
    {
      // Cari user yang nak di delete
      $user = DB::table('users')->where('id', $id)->delete();

      // Bagi respon redirect ke senarai user
      return redirect('/users');
    }

}
