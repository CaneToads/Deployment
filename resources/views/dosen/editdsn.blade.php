@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit dosen</h2>
        <form method="POST" action="{{ url('/dosen/' . $dsn->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $dsn->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nip</label>
                <textarea class="form-control" id="nip" name="nip" rows="3" required>{{ $dsn->nip }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection