@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Prodi</h2>
        <form method="POST" action="{{ url('/prodi/' . $mhs->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $mhs->prodi }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection