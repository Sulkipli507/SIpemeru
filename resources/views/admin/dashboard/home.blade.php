@extends('backend.master')
@section('content')
    <h2>Jumlah Ruangan: {{ $countRoom }} </h2>
    <h2>Jumlah Pengguna: {{ $countUser }} </h2>
    <h2>Jumlah Peminjaman: {{ $countLoan }} </h2>
@endsection