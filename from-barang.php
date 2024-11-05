<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
</head>

<body>
    <h1>Form Input Data Barang</h1>
    <form action="tambah-data.php" method="get">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" /><br />
        <label for="harga">Harga</label>
        <input type="number" name="harga" /><br />
        <label for="stok">Stok</label>
        <input type="number" name="stok" /><br />
        <label for="kategori">Kategori</label>
        <select name="kategori">
            <option value="Food">Food</option>
            <option value="Fashion">Fashion</option>
            <option value="Farmasi">Farmasi</option>
        </select>
        <button>Simpan</button>
    </form>
</body>

</html>