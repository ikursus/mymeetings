<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingsController extends Controller
{
  // Papar senarai meetings
  public function paparsenarai()
  {
    return view('meetings/template_meetings');
  }

  // Function paparkan template tambah meeting
  public function borangTambahMeeting()
  {
    return view('meetings/template_borang_tambah_meetings');
  }

  // Function terima data dari borang tambah meeting
  public function simpanDataMeeting( Request $request )
  {
    // Proses validasi data
    // $this->validate( $request, $data );
    $request->validate( [
      'nama' => 'required|min:3'
      ] );

    // Terima SEMUA data dari input borang
    $data = $request->all();

    return $data;
  }

}
