@extends('backend.master')

@section('content')
    <a href="{{route('room-create')}}"><button class="btn btn-primary">Tambah data</button></a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Ruangan</th>
            <th scope="col">Nama Ruangan</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Gambar</th>
            <th scope="col">Fasilitas</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $key => $item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->code}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->capacity}}</td>
            <td>
                @if($item->image)
                    <img src="{{asset('storage/' . $item->image)}}" width="48px"/>
                @else 
                    No image
                @endif
            </td>
            <td>{{$item->facility}}</td>
            <td>
                <a class="btn btn-primary" href="{{route("room-edit", $item->id)}}">Edit</a>
                <form action="{{route("room-delete", $item->id)}}" method="post" style="display:inline" class="form-check-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >HAPUS</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
