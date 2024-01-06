@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Matakuliah</h1>

       <a href="{{ url('/matakuliah/createmkl') }}" class="btn btn-primary">Tambah Matakuliah</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matakuliah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliahs as $mkl)
                <tr>
                    <td> {{ $mkl->id}} </td>
                    <td> {{ $mkl->matakuliah}} </td>

                    <td>
                        <a href="{{ url('/matakuliah/' . $mkl->id . '/editmkl') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/matakuliah/' . $mkl->id) }}" method="POST" style="display:inline">
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