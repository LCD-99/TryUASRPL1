<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User - Sistem Booking Gazebo UNNES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
            color: #333;
        }
        h2, h3 {
            color: #3C7962;
            margin-bottom: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #e6f0ea;
        }
        tbody tr:nth-child(even) {
            background-color: #f9fdf9;
        }
        a.button {
            display: inline-block;
            margin-top: 20px;
            margin-right: 10px;
            padding: 10px 24px;
            background-color: #3C7962;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        a.button:hover {
            background-color: #2f5e49;
        }
    </style>
</head>
<body>
    <h2>Dashboard User</h2>

    <p>Selamat datang, User!</p>

    <h3>Booking Saya</h3>

    <table>
        <thead>
            <tr>
                <th>Gazebo</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gazebo A</td>
                <td>2025-06-01</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Gazebo B</td>
                <td>2025-06-05</td>
                <td>Approved</td>
            </tr>
        </tbody>
    </table>

    <a href="/user/bookings/create" class="button">Buat Booking Baru</a>
    <a href="{{ url('/admin/gazebos/schedule') }}" class="button">Lihat Jadwal Booking Gazebo</a>
</body>
</html>
