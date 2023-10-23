<!DOCTYPE html>
<html>
<head>
    <title>Create anggota</title>
</head>
<body>

<h1>Buat Daftar Anggota</h1>

<form action="<?= base_url('/anggota/create/') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="namaanggota">Nama anggota</label>
    <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

