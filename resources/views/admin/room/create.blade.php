@extends('backend.master')
@section('content')
<div class="title text-center">
    <h4>Tambah Data Ruangan</h4>
</div>
<form action="{{route("room-store")}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="code" class="form-label">Kode Ruangan</label>
        <input name="code" class="form-control">

        @error('code')
        <span class="text-danger">
          <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>


    <div class="mb-3">
      <label for="name" class="form-label">Nama Ruangan</label>
      <input name="name"class="form-control" >

      @error('name')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>



    <div class="mb-3">
      <label for="capacity" class="form-label">Kapasitas</label>
      <input name="capacity"class="form-control">

      @error('capacity')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
