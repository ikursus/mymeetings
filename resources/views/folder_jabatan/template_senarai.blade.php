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

<table class="table table-bordered" id="jabatan-table">

<thead>
  <tr>
    <th>ID</th>
    <th>NAMA JABATAN / UNIT / BAHAGIAN</th>
    <th>TINDAKAN</th>
  </tr>
</thead>

</table>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection


@section('script')
<script>
$(function() {
    $('#jabatan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('/jabatan/datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false}
        ]
    });
});
</script>
@endsection
