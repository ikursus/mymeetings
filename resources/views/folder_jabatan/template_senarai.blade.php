@extends('layouts/app')

@section('content')
<!-- // Comment dalam HTML -->
{{-- Comment dalam format blade --}}
<?php // comment dalam format PHP ?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Senarai Jabatan</div>

                <div class="panel-body">

                  <p>
                    <a href="/jabatan/add" class="btn btn-primary">Tambah Jabatan</a>
                  </p>

<table class="table table-bordered">

<thead>
  <tr>
    <th>ID</th>
    <th>NAMA JABATAN / UNIT / BAHAGIAN</th>
    <th>TINDAKAN</th>
  </tr>
</thead>

<tbody>

<tr>
  <td>1</td>
  <td>UNIT IT</td>
  <td>
    <a href="" class="btn btn-sm btn-primary">EDIT</a>
    <a href="" class="btn btn-sm btn-danger">DELETE</a>
  </td>
</tr>

</tbody>
</table>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
