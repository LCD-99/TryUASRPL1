<!DOCTYPE html>
<html>
<head>
    <title>Register - Sistem Booking Gazebo UNNES</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
        <br><br>
        <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
        <br><br>
        <button type="submit">Daftar</button>
    </form>

    @if ($errors->any())
        <div style="color:red; margin-top:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
</body>
</html>
