@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

       <a href="{{ url('/mahasiswa/createmhs') }}" class="btn btn-primary">Tambah Mahasiswa</a>

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
                @foreach ($mahasiswas as $mhs)
                <tr>
                    <td> {{ $mhs->id}} </td>
                    <td> {{ $mhs->nama}} </td>
                    <td> {{ $mhs->nim}} </td>
                    <td>
                        <a href="{{ url('/mahasiswa/' . $mhs->id . '/editmhs') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/mahasiswa/' . $mhs->id) }}" method="POST" style="display:inline">
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