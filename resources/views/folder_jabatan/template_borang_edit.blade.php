@extends('layouts/app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Edit Jabatan</div>

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

                    <input type="hidden" name="_method" value="PATCH">

                    {{ csrf_field() }}

                    <div class="form-group">
                      <label>Nama Jabatan / Unit / Bahagian</label>
                      <input type="text" name="nama" class="form-control" value="{{ $jabatan->nama }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                  </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
