@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Matakuliah</h2>
        <form method="POST" action="{{ url('/matakuliah') }}">
            @csrf
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Matakuliah</label>
                <input type="text" class="form-control" id="matakuliah" name="matakuliah" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
