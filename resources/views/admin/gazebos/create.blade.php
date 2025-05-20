@extends('layouts.app')

@section('content')
<h2>Tambah Gazebo Baru</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gazebos.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description">{{ old('description') }}</textarea><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
