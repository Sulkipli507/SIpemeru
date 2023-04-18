@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
          <div class="card text-white bg-secondary">
            <div class="card-body text-center">
              <h5 class="card-title">Jumlah Ruangan</h5>
              <h1>{{ $countRoom }}</h1>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-dark bg-warning">
            <div class="card-body text-center">
              <h5 class="card-title">Jumlah Pengguna</h5>
              <h1>{{ $countUser }}</h1>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-dark bg-info">
            <div class="card-body text-center">
              <h5 class="card-title">Jumlah Peminjaman</h5>
              <h1>{{ $countLoan }}</h1>
            </div>
          </div>
        </div>
      </div>
@endsection