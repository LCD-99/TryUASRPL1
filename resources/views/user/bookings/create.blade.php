<!DOCTYPE html>
<html>
<head>
    <title>Buat Booking Baru - Sistem Booking Gazebo UNNES</title>
    <style>
        label {
            font-weight: bold;
        }
        select, input[type="date"] {
            width: 200px;
            padding: 6px;
            margin-top: 4px;
            margin-bottom: 12px;
        }
        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        .error-list {
            color: red;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>

    <h2>Buat Booking Baru</h2>

    <!-- Contoh daftar error -->
    <div class="error-list" id="error-messages" style="display:none;">
        <ul>
            <!-- Contoh error, tampilkan kalau ada -->
            <!-- <li>Gazebo harus dipilih.</li> -->
            <!-- <li>Tanggal booking harus diisi.</li> -->
        </ul>
    </div>

    <form action="/user/bookings" method="POST">
        <!-- Ingat, jika di Laravel harus ada token CSRF -->

        <label for="gazebo_id">Pilih Gazebo:</label><br>
        <select name="gazebo_id" id="gazebo_id" required>
            <option value="">-- Pilih Gazebo --</option>
            <option value="1">Gazebo A</option>
            <option value="2">Gazebo B</option>
            <option value="3">Gazebo C</option>
        </select><br>

        <label for="booking_date">Tanggal Booking:</label><br>
        <input type="date" name="booking_date" id="booking_date" required min="2025-05-20"><br>

        <button type="submit">Booking</button>
    </form>

</body>
</html>
