@extends('backend.master')
@section('content')
    <form action="{{ route('loan-update', $loan->id) }}" method="post">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input name="nim" type="text" class="form-control" value="{{ $loan->nim }}">
        </div>
    
    
        <div class="mb-3">
          <label for="name" class="form-label">Nama Peminjam</label>
          <input name="name" type="text" class="form-control" value="{{ $loan->name }}">
        </div>
    
        <div class="mb-3">
          <label for="prodi" class="form-label">Program studi</label> <br>
          <select name="prodi">
            <option>{{ $loan->prodi }}</option>
            <option>teknik informatika</option>
            <option>teknik sipil</option>
            <option>teknik perencanaan wilayah & kota</option>
        </select>
        </div>
    
        <div class="mb-3">
          <label for="phone" class="form-label">No handphone</label>
          <input name="phone" type="text" class="form-control" value="{{ $loan->phone }}">
        </div>
    
        <div class="mb-3">
          <label for="address" class="form-label">Alamat</label>
          <input name="address" type="text" class="form-control" value="{{ $loan->address }}">
        </div>

        <div class="mb-3">
          <label for="room_id" class="form-label">Nama Ruangan</label>
          <select class="form-control" name="room_id">
              @foreach ($room as $item)
              <option @if ($loan->room_id == $item->id) selected @endif value="{{ $item->id }}">{{$item->name}}</option>
              @endforeach
          </select>
      </div>

        <div class="mb-3">
          <label for="program" class="form-label">Acara</label>
          <input name="program" type="text" class="form-control" value="{{ $loan->program }}">
        </div>

        <div class="mb-3">
          <label for="start_date" class="form-label">Tanggal mulai</label>
          <input name="start_date" type="datetime-local" class="form-control" value="{{ $loan->start_date }}">
        </div>

        <div class="mb-3">
          <label for="end_date" class="form-label">Tanggal selesai</label>
          <input name="end_date" type="datetime-local" class="form-control" value="{{ $loan->end_date }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status">
                <option>{{ $loan->status }}</option>
                <option>belum disetujui</option>
                <option>tidak disetujui</option>
                <option>disetujui</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection