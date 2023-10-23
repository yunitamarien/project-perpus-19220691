<!DOCTYPE html>
<html>
<head>
    <title>Create Pengguna</title>
</head>
<body>

<h1>Buat Daftar Pengguna</h1>

<form action="<?= base_url('/pengguna/create/') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="namaPengguna">Nama pengguna</label>
    <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" required><br>

    <label for="katasandi">katasandi</label>
    <input type="text" name="katasandi" value="<?=$data['katasandi'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

