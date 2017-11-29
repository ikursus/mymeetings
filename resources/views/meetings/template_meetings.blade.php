@extends('layouts/app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Senarai Meetings</div>

                <div class="panel-body">

                  <p>
                    <a href="/meetings/add" class="btn btn-primary">Tambah Meeting</a>
                  </p>

<table class="table table-bordered">

<thead>
  <tr>
    <th>ID</th>
    <th>NAMA</th>
    <th>TARIKH</th>
    <th>TINDAKAN</th>
  </tr>
</thead>

<tbody>

<tr>
  <td>1</td>
  <td>Meeting Client A</td>
  <td>2017-11-26</td>
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
