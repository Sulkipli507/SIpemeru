@extends('backend.master')
@section('content')
<div class="title text-center">
    <h4>Tambah Data Ruangan</h4>
</div>
<form action="{{route("room-store")}}" enctype="multipart/form-data" method="post">
    @csrf

    <div class="mb-3">
        <label for="code" class="form-label">Kode Ruangan</label>
        <input name="code" type="text" class="form-control">

        @error('code')
        <span class="text-danger">
          <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>


    <div class="mb-3">
      <label for="name" class="form-label">Nama Ruangan</label>
      <input name="name" type="text" class="form-control" >

      @error('name')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <div class="mb-3">
      <label for="capacity" class="form-label">Kapasitas</label>
      <input name="capacity" type="number" class="form-control">

      @error('capacity')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Gambar</label>
      <input name="image" type="file" class="form-control">

      @error('image')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <div class="mb-3">
      <label for="facility" class="form-label">Fasilitas</label>
      <input name="facility" type="text" class="form-control">

      @error('facility')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <div class="mb-3">
      <label for="format" class="form-label">Format surat</label>
      <input name="format" type="file" class="form-control">

      @error('format')
      <span class="text-danger">
        <strong>{{$message}}</strong>
      </span>
      @enderror

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
