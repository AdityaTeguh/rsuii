@extends('layouts.master')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="container mt-3">
        <div class="row">
          <div class="col-sm-8 col-md-6">
            <h1 class="h2 pt-4">Pendaftaran User</h1>
            <hr>
      
            <form action="{{url('/user')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="user">Nama</label>
                <input type="text"
                class="form-control @error('user') is-invalid @enderror"
                id="user" name="user"
                value="{{ old('user') }}">
                @error('user')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
      
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text"
                class="form-control @error('username') is-invalid @enderror"
                id="username" name="username" value="{{ old('username') }}">
                @error('username')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
      
              <div class="form-group">
                <label for="peran_id">Peran</label>
                <select class="form-control" @error('peran_id') is-invalid @enderror"
                id="peran_id" name="peran_id"
                value="{{ old('peran_id') }}">
                    <option selected>Pilih Salah Satu</option>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                    <option value="mobile-jkn">Mobile JKN</option>
                  </select>
                @error('peran_id')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
              <label for="user_aktif">Aktifkan User?</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="user_aktif" value="1">
                <label class="form-check-label" for="inlineRadio1">Ya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
              </div>
              <div class="form-group">
                <label for="kunci">Password</label>
                <input type="text"
                class="form-control @error('kunci') is-invalid @enderror"
                id="kunci" name="kunci" value="{{ old('kunci') }}">
                @error('kunci')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>     
              <button type="submit" class="btn btn-primary my-2">Daftar</button>
            </form>
      
          </div>
        </div>
      </div>

</main>
@endsection