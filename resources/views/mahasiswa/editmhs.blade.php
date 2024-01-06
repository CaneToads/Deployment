@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <form method="POST" action="{{ url('/mahasiswa/' . $mhs->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mhs->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <textarea class="form-control" id="nim" name="nim" rows="3" required>{{ $mhs->nim }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection