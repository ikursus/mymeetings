@extends('layouts/app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Tambah User</div>

                <div class="panel-body">

                  <form method="POST" action="">

                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" name="nama_user" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>IC User</label>
                      <input type="text" name="ic" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Email User</label>
                      <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Password User</label>
                      <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Telefon User</label>
                      <input type="text" name="telefon" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Jabatan</label>
                      <select name="jabatan" class="form-control">
                        <option value="1">Jabatan 1</option>
                        <option value="2">Jabatan 2</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                  </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection