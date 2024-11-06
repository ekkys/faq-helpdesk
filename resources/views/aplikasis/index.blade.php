@extends('layouts.mainlayout')

@section('content')
    <div class="container mt-5">
        <h2>Daftar Aplikasi</h2>
        <a href="{{ route('aplikasis.create') }}" class="btn btn-success mb-3">Tambah Aplikasi</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Aplikasi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aplikasis as $aplikasi)
                    <tr>
                        <td>{{ $aplikasi->id }}</td>
                        <td>{{ $aplikasi->nama_aplikasi }}</td>
                        <td>
                            <a href="{{ route('aplikasis.edit', $aplikasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('aplikasis.destroy', $aplikasi->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
