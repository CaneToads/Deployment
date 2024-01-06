@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Prodi</h2>
        <form method="POST" action="{{ url('/prodi') }}">
            @csrf
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
