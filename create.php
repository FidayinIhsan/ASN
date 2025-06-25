<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Booking</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Tambah Booking</h2>
<form method="post">
    <input type="text" name="nama" placeholder="Nama Tamu" required>
    <select name="tipe_kamar">
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Suite">Suite</option>
    </select>
    <input type="date" name="checkin" required>
    <input type="date" name="checkout" required>
    <select name="status">
        <option value="Belum Dibayar">Belum Dibayar</option>
        <option value="Sudah Dibayar">Sudah Dibayar</option>
    </select>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe_kamar'];
    $in   = $_POST['checkin'];
    $out  = $_POST['checkout'];
    $stat = $_POST['status'];

    $conn->query("INSERT INTO bookings (nama, tipe_kamar, checkin, checkout, status)
                  VALUES ('$nama', '$tipe', '$in', '$out', '$stat')");
    header("Location: index.php");
}
?>
</body>
</html>
