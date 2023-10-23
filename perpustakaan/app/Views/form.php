<!DOCTYPE html>
<html>
<head>
    <title>Create Anggota</title>
</head>
<body>

<h1>Create Anggota</h1>

<form action="<?= base_url('Anggota/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="namapenerbit">Nama Anggota</label>
    <input type="text" name="Anggota" value="<?=$data['Anggota'] ?? ''?>" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

