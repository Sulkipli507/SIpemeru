@extends('backend.master')
@section('content')
<form action="{{route("room-update", $room->id)}}" method="post">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="code" class="form-label">Kode Ruangan</label>
      <input name="code"class="form-control" value="{{$room->code}}">
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Nama Ruangan</label>
      <input name="name" class="form-control" value="{{$room->name}}">
    </div>
    <div class="mb-3">
      <label for="capacity" class="form-label">Kapasitas</label>
      <input name="capacity"class="form-control" value="{{$room->capacity}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
