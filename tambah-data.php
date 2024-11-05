<?php
include "koneksi.php";
$nama_barang = $_GET['nama_barang'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];
$kategori = $_GET['kategori'];
$query = "INSERT INTO barang (nama_barang, harga, stok, kategori)
        VALUES (
            '$nama_barang',
            '$harga',
            '$stok',
            '$kategori'
        )";
$mysqli->query($query);
header('location:index.php');
