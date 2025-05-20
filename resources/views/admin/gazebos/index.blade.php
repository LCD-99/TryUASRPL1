@extends('layouts.app')

@section('content')
<h2>Daftar Gazebo</h2>

<a href="{{ route('gazebos.create') }}">Tambah Gazebo</a>

<table border="1" cellpadding="10" cellspacing="0" style="margin-top:10px">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gazebos as $gazebo)
        <tr>
            <td>{{ $gazebo->name }}</td>
            <td>{{ $gazebo->description }}</td>
            <td>
                <a href="{{ route('gazebos.edit', $gazebo) }}">Edit</a> |
                <form action="{{ route('gazebos.destroy', $gazebo) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus gazebo ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color:red;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
