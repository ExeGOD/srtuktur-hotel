@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Update Data</h1>
    </div>

    <form method="post" action="/dashboard/room/update/{{ $room->id }}">
        @csrf
        <div class="mb-3">
          <label for="RoomNumber" class="form-label">Nomer Ruangan</label>
          <input type="number" name="RoomNumber"  id="RoomNumber" value="{{ $room->RoomNumber }}"  class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="RoomType" class="form-label">Tipe Ruangan</label>
          <input type="text" name="RoomType" id="RoomType" value="{{ $room->RoomType }}" class="form-control" required >
        </div>
        <div class="mb-3">
          <label for="PricePerNight" class="form-label">Harga Per malam</label>
          <input type="number" name="PricePerNight" id="PricePerNight" value="{{ $room->PricePerNight }}"  class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
@endsection