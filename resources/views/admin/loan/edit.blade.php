@extends('backend.master')
@section('content')
    <form action="{{ route('loan-edit', $loan->id) }}" method="post">
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
            <option>inf</option>
            <option>spl</option>
            <option>pwk</option>
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
              <option label="Pilih Ruangan"></option>
              @foreach ($room as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
          </select>
      </div>

        <div class="mb-3">
          <label for="program" class="form-label">Acara</label>
          <input name="program" type="text" class="form-control" value="{{ $loan->program }}">
        </div>

        <div class="mb-3">
          <label for="start_date" class="form-label">Tanggal awal</label>
          <input name="start_date" type="date" class="form-control" value="{{ $loan->start_date }}">
        </div>

        <div class="mb-3">
          <label for="end_date" class="form-label">Tanggal akhir</label>
          <input name="end_date" type="date" class="form-control" value="{{ $loan->end_date }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status">
                <option>{{ $loan->status }}</option>
                <option>belum</option>
                <option>tidak</option>
                <option>disetujui</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection