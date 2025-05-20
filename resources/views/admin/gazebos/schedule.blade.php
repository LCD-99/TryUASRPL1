<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Booking Gazebo - Sistem Booking Gazebo UNNES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
        }
        h2, h3 {
            color: #3C7962;
        }
        ul {
            padding-left: 20px;
            margin-bottom: 30px;
        }
        ul li {
            margin-bottom: 6px;
            font-size: 18px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f8f5;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .no-data {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>

    <h2>Jadwal Booking Gazebo</h2>

    <h3>Daftar Gazebo</h3>
    <ul>
        <li>Gazebo A - Tempat duduk outdoor nyaman</li>
        <li>Gazebo B - Dekat dengan kantin fakultas</li>
        <li>Gazebo C - Area teduh dengan pemandangan taman</li>
        <!-- Tambah gazebo lain sesuai data -->
    </ul>

    <h3>Jadwal Booking Seluruh Gazebo</h3>
    <table>
        <thead>
            <tr>
                <th>Gazebo</th>
                <th>Tanggal Booking</th>
                <th>User</th>
                <th>Status</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gazebo A</td>
                <td>2025-06-01</td>
                <td>Agus Santoso</td>
                <td>Pending</td>
                <td>Diskusi kelompok</td>
            </tr>
            <tr>
                <td>Gazebo B</td>
                <td>2025-06-05</td>
                <td>Siti Nurhaliza</td>
                <td>Approved</td>
                <td>Presentasi tugas</td>
            </tr>
            <tr>
                <td>Gazebo C</td>
                <td>2025-06-10</td>
                <td>Budi Wijaya</td>
                <td>Rejected</td>
                <td>Rapat organisasi</td>
            </tr>
            <!-- Tambah data booking sesuai kebutuhan -->
        </tbody>
    </table>

</body>
</html>
