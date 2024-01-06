@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Prodi</h1>

       <a href="{{ url('/prodi/createprd') }}" class="btn btn-primary">Tambah prodi</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prodi</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodis as $prd)
                <tr>
                    <td> {{ $prd->id}} </td>
                    <td> {{ $prd->prodi}} </td>

                    <td>
                        <a href="{{ url('/prodi/' . $prd->id . '/editprd') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/prodi/' . $prd->id) }}" method="POST" style="display:inline">
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