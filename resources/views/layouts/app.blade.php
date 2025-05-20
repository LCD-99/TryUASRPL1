<!DOCTYPE html>
<html>
<head>
    <title>Sistem Booking Gazebo UNNES</title>
</head>
<body>
    <nav>
        @auth
            Halo, {{ auth()->user()->name }} ({{ auth()->user()->role }}) |
            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </nav>
    <hr>

    <div>
        @if(session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif

        @yield('content')
    </div>
</body>
</html>
