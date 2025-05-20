@extends('layouts.app')

@section('content')
<h2>Edit Gazebo</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gazebos.update', $gazebo) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ old('name', $gazebo->name) }}" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description">{{ old('description', $gazebo->description) }}</textarea><br><br>

    <button type="submit">Update</button>
</form>
@endsection
