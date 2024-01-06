@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Matakuliah</h2>
        <form method="POST" action="{{ url('/matakuliah/' . $mkl->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Matakuliah</label>
                <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="{{ $mkl->matakuliah }}" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection