<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Daftar Booking Hotel</h2>
<a href="create.php">+ Tambah Booking</a>
<table>
    <tr>
        <th>ID</th><th>Nama</th><th>Tipe Kamar</th>
        <th>Check-in</th><th>Check-out</th><th>Status</th><th>Aksi</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM bookings");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['tipe_kamar'] ?></td>
        <td><?= $row['checkin'] ?></td>
        <td><?= $row['checkout'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
