<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingsController extends Controller
{
  public function paparsenarai() {
    return view('meetings/template_meetings');
  }
}
