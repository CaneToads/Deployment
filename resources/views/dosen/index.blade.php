@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar dosen</h1>

       <a href="{{ url('/dosen/createdsn') }}" class="btn btn-primary">Tambah Dosen</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $dosen)
                <tr>
                    <td> {{ $dosen->id}} </td>
                    <td> {{ $dosen->nama}} </td>
                    <td> {{ $dosen->nim}} </td>
                    <td>
                        <a href="{{ url('/dosen/' . $dosen->id . '/editdsn') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/dosen/' . $dosen->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection