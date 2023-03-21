@extends('backend.master')
@section('content')
    <div class="title text-center">
        <h4>Ajukan peminjaman</h4>
    </div>
    <form action="{{ route('loan-store') }}" method="post">
        @csrf
    
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input name="nim" type="text" class="form-control">
    
            @error('nim')
            <span class="text-danger">
              <strong>{{$message}}</strong>
            </span>
            @enderror
    
        </div>
    
    
        <div class="mb-3">
          <label for="name" class="form-label">Nama Peminjam</label>
          <input name="name" type="text" class="form-control" >
    
          @error('name')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>
    
        <div class="mb-3">
          <label for="prodi" class="form-label">Program studi</label> <br>
          <select name="prodi">
            <option>inf</option>
            <option>spl</option>
            <option>pwk</option>
        </select>
    
          @error('prodi')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>
    
        <div class="mb-3">
          <label for="phone" class="form-label">No handphone</label>
          <input name="phone" type="text" class="form-control">
    
          @error('phone')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>
    
        <div class="mb-3">
          <label for="address" class="form-label">Alamat</label>
          <input name="address" type="text" class="form-control">
    
          @error('address')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>

        <div class="mb-3">
          <label for="room_id" class="form-label">Nama Ruangan</label>
          <select class="form-control" name="room_id">
              <option label="Pilih Ruangan"></option>
              @foreach ($room as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
          </select>
  
        @error('room_id')
        <span class="text-danger">
          <strong>{{$message}}</strong>
        </span>
        @enderror
  
      </div>

        <div class="mb-3">
          <label for="program" class="form-label">Acara</label>
          <input name="program" type="text" class="form-control">
    
          @error('program')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>

        <div class="mb-3">
          <label for="start_date" class="form-label">Tanggal awal</label>
          <input name="start_date" type="date" class="form-control">
    
          @error('start_date')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>

        <div class="mb-3">
          <label for="end_date" class="form-label">Tanggal akhir</label>
          <input name="end_date" type="date" class="form-control">
    
          @error('end_date')
          <span class="text-danger">
            <strong>{{$message}}</strong>
          </span>
          @enderror
    
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection