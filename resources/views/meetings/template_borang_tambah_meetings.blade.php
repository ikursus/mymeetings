@extends('layouts/app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Tambah Meeting</div>

                <div class="panel-body">

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <form method="POST" action="">

                    {{ csrf_field() }}

                    <div class="form-group">
                      <label>Nama Meeting</label>
                      <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Tarikh Meeting</label>
                      <input type="date" name="tarikh" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Masa Meeting</label>
                      <input type="time" name="masa" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" name="lokasi" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Jabatan</label>
                      <select name="jabatan" class="form-control">
                        <option value="1">Jabatan 1</option>
                        <option value="2">Jabatan 2</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Minit</label>
                      <input type="file" name="minit" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                  </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
