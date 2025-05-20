<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - Sistem Booking Gazebo UNNES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 40px auto;
        }
        h2, h3 {
            color: #3C7962;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li {
            background: #e0f2ec;
            margin: 8px 0;
            padding: 12px;
            border-radius: 8px;
            font-size: 18px;
        }
        a.button {
            display: inline-block;
            margin: 12px 10px 0 0;
            padding: 10px 20px;
            background-color: #3C7962;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        a.button:hover {
            background-color: #2f5e49;
        }
    </style>
</head>
<body>
    <h2>Dashboard Admin</h2>

    <p>Selamat datang, Admin!</p>

    <h3>Statistik Booking</h3>
    <ul>
        <li>Total Gazebo: 10</li>
        <li>Total Booking: 50</li>
        <li>Booking Pending: 5</li>
        <li>Booking Approved: 40</li>
        <li>Booking Rejected: 5</li>
    </ul>

    <a href="/admin/gazebos" class="button">Kelola Gazebo</a>
    <a href="/admin/bookings" class="button">Kelola Booking</a>
</body>
</html>
