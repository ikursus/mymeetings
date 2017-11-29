@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

<center><img src="images/logo.png" alt="Logo" style="max-width: 200px;"></center>

<p>Tarikh: {{ date('H:i:s') }}</p>

<p>Selamat datang admin!</p>
<ul>
<li><a href="users">Lihat senarai users</a></li>
<li><a href="meetings">Lihat senarai meetings</a></li>
</ul>

</div>
</div>
</div>
</div>
</div>


@endsection
