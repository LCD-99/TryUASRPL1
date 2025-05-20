<!DOCTYPE html>
<html>
<head>
    <title>Detail Booking - Sistem Booking Gazebo UNNES</title>
</head>
<body>

    <h2>Detail Booking</h2>

    <p><strong>User:</strong> Agus Santoso</p>
    <p><strong>Gazebo:</strong> Gazebo A</p>
    <p><strong>Tanggal Booking:</strong> 2025-06-01</p>
    <p><strong>Status:</strong> Pending</p>

    <form action="/admin/bookings/1" method="POST">
        <!-- Biasanya CSRF token dan method PUT di-handle Laravel, di HTML statis ini kita abaikan -->
        
        <label>Status:</label><br>
        <select name="status" required>
            <option value="pending" selected>Pending</option>
            <option value="approved">Approved</option>
            <option value="rejected">Rejected</option>
        </select><br><br>

        <button type="submit">Update Status</button>
    </form>

</body>
</html>
