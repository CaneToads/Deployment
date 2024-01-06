@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Daftar</h2>
        <form method="POST" action="{{ url('/dosen') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nip</label>
                <textarea class="form-control" id="nip" name="nip" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
