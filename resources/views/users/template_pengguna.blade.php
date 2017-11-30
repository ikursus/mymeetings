@extends('layouts/app')

@section('content')
<!-- // Comment dalam HTML -->
{{-- Comment dalam format blade --}}
<?php // comment dalam format PHP ?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Senarai Pengguna</div>

                <div class="panel-body">

                  <p>
                    <a href="/users/add" class="btn btn-primary">Tambah User</a>
                  </p>

<table class="table table-bordered">

<thead>
  <tr>
    <th>ID</th>
    <th>NAMA</th>
    <th>EMAIL</th>
    <th>TELEFON</th>
    <th>TINDAKAN</th>
  </tr>
</thead>

<tbody>

@foreach( $senarai_users as $pengguna )
<tr>
  <td>{{ $pengguna->id }}</td>
  <td>{{ $pengguna->nama_user }}</td>
  <td>{{ $pengguna->email }}</td>
  <td>{{ $pengguna->telefon }}</td>
  <td>
    <a href="{{ url('/users/' . $pengguna->id) }}" class="btn btn-sm btn-primary">EDIT</a>

    <form method="POST" action="{{ url('/users/' . $pengguna->id) }}">

      <input type="hidden" name="_method" value="DELETE">

      {{ csrf_field() }}

      <button type="submit" class="btn btn-sm btn-danger">DELETE</button>

    </form>




  </td>
</tr>
@endforeach

</tbody>
</table>

<p>Jumlah User: {{ $senarai_users->total() }} orang</p>
{{ $senarai_users->links() }}

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
