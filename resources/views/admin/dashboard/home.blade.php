@extends('backend.master')

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="{{asset('assetDashboard/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assetDashboard/css/nucleo-svg.css')}}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{asset('assetDashboard/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

@section('content')

    <div class="row">
      @if (Auth::user()->role == "admin")
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">account_balance</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Jumlah Ruangan</p>
                <h4 class="mb-0">{{ $countRoom }}</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Jumlah Pengguna</p>
                <h4 class="mb-0">{{ $countUser }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      @elseif (Auth::user()->role == "staff")
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">history</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Belum Dikonfirmasi</p>
              <h4 class="mb-0">{{ $countLoan2 }}</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">check</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Disetujui</p>
              <h4 class="mb-0">{{ $countLoan1 }}</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">highlight_off</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Ditolak</p>
              <h4 class="mb-0">{{ $countLoan3 }}</h4>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">library_books</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Diajukan</p>
              <h4 class="mb-0">{{ $countLoanUser }}</h4>
            </div>
          </div>
        </div>
      </div>
      @endif       
    </div>
  
@endsection
    
  <script src="{{asset('assetDashboard/js/material-dashboard.min.js?v=3.0.0')}}"></script>
  <script src="{{asset('assetDashboard/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assetDashboard/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assetDashboard/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assetDashboard/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assetDashboard/js/plugins/chartjs.min.js')}}"></script>