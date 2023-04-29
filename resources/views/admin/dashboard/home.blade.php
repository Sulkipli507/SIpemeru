@extends('backend.master')
@section('content')
    <div class="row">
      @if (Auth::user()->role == "admin")
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card text-white bg-secondary">
          <div class="card-body text-center">
            <h5 class="card-title">Jumlah Ruangan</h5>
            <h1>{{ $countRoom }}</h1>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card text-dark bg-warning">
          <div class="card-body text-center">
            <h5 class="card-title">Jumlah Pengguna</h5>
            <h1>{{ $countUser }}</h1>
          </div>
        </div>
      </div>
      @elseif (Auth::user()->role == "staff")
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card text-dark bg-info">
          <div class="card-body text-center">
            <h5 class="card-title">Peminjaman Disetujui</h5>
            <h1>{{ $countLoan1 }}</h1>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card text-dark bg-secondary">
          <div class="card-body text-center">
            <h5 class="card-title">Peminjaman Belum Disetujui</h5>
            <h1>{{ $countLoan2 }}</h1>
          </div>
        </div>
      </div>
      @else
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card text-dark bg-info">
          <div class="card-body text-center">
            <h5 class="card-title">Peminjaman diajukan</h5>
            <h1>{{ $countLoanUser }}</h1>
          </div>
        </div>
      </div>
      @endif       
    </div>
@endsection