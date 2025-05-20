<!DOCTYPE html>
<html>
<head>
    <title>Booking Saya - Sistem Booking Gazebo UNNES</title>
    <style>
        a.button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        button.delete {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Booking Saya</h2>

    <a href="/user/bookings/create" class="button">Tambah Booking</a>

    <!-- Contoh pesan error -->
    <p style="color:red;"> <!-- Contoh error message bisa ditampilkan di sini jika ada --> </p>

    <table>
        <thead>
            <tr>
                <th>Gazebo</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gazebo A</td>
                <td>2025-06-01</td>
                <td>Pending</td>
                <td>
                    <form action="/user/bookings/1" method="POST" onsubmit="return confirm('Hapus booking ini?');" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="delete">Hapus</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Gazebo B</td>
                <td>2025-06-05</td>
                <td>Approved</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
