@extends('layouts.master')

@section('content')
<h1 class="h2">User</h1>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>User</th>
        <th>Username</th>
        <th>Aktif</th>
        <th>Peran</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
@foreach($user as $users)
      <tr>
        <td>{{$users->username}}</td>
        <td>{{$users->user}}</td>
        <td>{{$users->user_aktif}}</td>
        <td>{{$users->peran_id}}</td>
        <td>loading</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</main>
@endsection