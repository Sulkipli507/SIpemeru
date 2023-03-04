@extends('backend.master')
@section('content')
<form action="{{route("room-update", $rooms->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="code" class="form-label">Kode Ruangan</label>
      <input name="code"class="form-control" value="{{$rooms->code}}">
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Nama Ruangan</label>
      <input name="name" class="form-control" value="{{$rooms->name}}">
    </div>

    <div class="mb-3">
      <label for="capacity" class="form-label">Kapasitas</label>
      <input name="capacity"class="form-control" value="{{$rooms->capacity}}">
    </div>
    
    <div>
      <label for="image">Gambar</label><br>
      <img src="{{asset('storage/'.$rooms->image)}}" width="120px" /><br>
      <input name="image" type="file" class="form-control">
      <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
      <hr class="my-3">
    </div>

    <div class="mb-3">
      <label for="facility" class="form-label">Fasilitas</label>
      <input name="facility"class="form-control" value="{{$rooms->facility}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
