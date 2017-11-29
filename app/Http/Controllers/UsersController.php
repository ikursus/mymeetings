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
}
