<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Tambah user 1
      DB::table('users')->insert([
          'nama_user' => 'John Doe',
          'email' => 'johndoe@gmail.com',
          'password' => bcrypt('abc123'),
          'ic' => '80808080808080',
          'telefon' => '0123456789',
          'jabatan_id' => '1'
      ]);

      // Tambah user 2
      DB::table('users')->insert([
          'nama_user' => 'Marry Lee',
          'email' => 'marrylee@gmail.com',
          'password' => bcrypt('abc123'),
          'ic' => '80808080808080',
          'telefon' => '0123456789',
          'jabatan_id' => '2'
      ]);



    }
}
