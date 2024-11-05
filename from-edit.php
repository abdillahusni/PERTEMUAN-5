<?php
include "koneksi.php";
$query = "SELECT FROM barang WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Barang</title>
</head>

<body>
    <h1>Form Edit Data Barang</h1>
    <form action="<?= 'update-data.php?id=' . $row['id']; ?>" method="post">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $row['nama_barang']; ?>" /><br />
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="<?= $row['harga']; ?>" /><br />
        <label for="stok">Stok</label>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" /><br />
        <label for="kategori">Kategori</label>
        <label for=""><?= $row['kategori']; ?></label>
        <select name="kategori">
            <option value="Food" <?= $row['kategori'] == 'Food' ? 'selected' : '' ?>>Food</option>
            <option value="Fashion" <?= $row['kategori'] == 'Fashion' ? 'selected' : '' ?>>Fashion</option>
            <option value="Farmasi" <?= $row['kategori'] == 'Farmasi' ? 'selected' : '' ?>>Farmasi</option>
        </select>
        <button>Update</button>
    </form>
</body>

</html>