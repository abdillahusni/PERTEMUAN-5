<?php
include "koneksi.php";
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$query = "UPDATE barang SET
            nama_barang='$nama_barang',
            harga='$harga',
            stok='$stok',
            kategori='$kategori' 
         where id='$_GET[id]'
    ";
$mysqli->query($query);
header('location:index.php');
