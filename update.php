<?php include 'config.php'; 
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM bookings WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Booking</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Edit Booking</h2>
<form method="post">
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
    <select name="tipe_kamar">
        <option <?= $data['tipe_kamar']=='Single'?'selected':'' ?>>Single</option>
        <option <?= $data['tipe_kamar']=='Double'?'selected':'' ?>>Double</option>
        <option <?= $data['tipe_kamar']=='Suite'?'selected':'' ?>>Suite</option>
    </select>
    <input type="date" name="checkin" value="<?= $data['checkin'] ?>" required>
    <input type="date" name="checkout" value="<?= $data['checkout'] ?>" required>
    <select name="status">
        <option <?= $data['status']=='Belum Dibayar'?'selected':'' ?>>Belum Dibayar</option>
        <option <?= $data['status']=='Sudah Dibayar'?'selected':'' ?>>Sudah Dibayar</option>
    </select>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe_kamar'];
    $in   = $_POST['checkin'];
    $out  = $_POST['checkout'];
    $stat = $_POST['status'];

    $conn->query("UPDATE bookings SET nama='$nama', tipe_kamar='$tipe', checkin='$in', checkout='$out', status='$stat' WHERE id=$id");
    header("Location: index.php");
}
?>
</body>
</html>
