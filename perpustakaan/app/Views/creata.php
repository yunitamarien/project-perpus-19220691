<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
</head>
<body>
    <h1>Tambah Anggota</h1>
    <form method="post" action="<?php echo base_url('anggota/create'); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>


