<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Penjualan</title>
</head>
<body>
     <table border="1">
          <caption>
               Data Stok Barang
               <form action="" method="get">
                   <select name="filter">
                       <?php
                       $q_kategori = "SELECT kategori FROM barang group by kategori";
                       $result_kategori = $mysqli->query($q_kategori);
                       while($r_kategori = $result_kategori->fetch_assoc()){
                        ?>
                           <option value="<?= $r_kategori['kategori'];?>"><?= $r_kategori['kategori'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value="Filter" />
                </form>
            </caption>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php
            if(isset($_GET['filter'])){
                $query = "SELECT * FROM barang where kategori='$_GET[filter]'";
            }else{
                $query = "SELECT * FROM barang";
            }
            $result = $mysqli->query($query);
            $no=0;
            while($row = $result->fetch_assoc()) {
                $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_barang'];?></td>
                    <td><?= FormatRupiah($row['harga']); ?></td>
                    <td><?= $row['stok_barang'];?></td>
                    <td><?= $row['kategori'];?></td>
                    <td>
                        <a href="<?='form-edit.php?id='.$row['id'];?>">Edit</a>
                        <a href="<?= 'hapus-data.php?id='.$row['id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <a href="form-barang.php">Tambah Data Barang</a>
</body>
</html>