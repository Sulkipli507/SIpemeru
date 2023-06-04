@extends('backend.master')

@section('header')
  <h3>Dashboard</h3>
@endsection

@section('content')

    <div class="row clearfix progress-box">
      @if (Auth::user()->role == "admin")
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
             <h1>{{ $countRoom }}</h1>
            <h5 class="text-green padding-top-10 h5">Jumlah Ruangan</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
             <h1>{{ $countUser }}</h1>
            <h5 class="text-light-blue padding-top-10 h5">Jumlah Pengguna</h5>
          </div>
        </div>
      </div>
      @elseif (Auth::user()->role == "staff")
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
              <h1>{{ $countLoan2 }}</h1>
            <h5 class="text-blue padding-top-10 h5">Belum Dikonfirmasi</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
              <h1>{{ $countLoan1 }}</h1>
            <h5 class="text-light-green padding-top-10 h5">Disetujui</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
              <h1>{{ $countLoan3 }}</h1>
            <h5 class="text-light-orange padding-top-10 h5">Ditolak</h5>
          </div>
        </div>
      </div>
      @else
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
          <div class="progress-box text-center">
             <h1>{{ $countLoanUser }}</h1>
            <h5 class="text-blue padding-top-10 h5">Diajukan</h5>
          </div>
        </div>
      </div>
      @endif       
    </div>
  
@endsection