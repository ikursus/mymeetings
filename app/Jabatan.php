<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    // Setup info table jabatan
    protected $table = 'jabatan';

    // Setup filter data column yang akan diisi oleh model
    // Fungsi mass assignment (membolehkan penggunaan $request->all() )
    protected $fillable = [
      'nama'
    ];

}
