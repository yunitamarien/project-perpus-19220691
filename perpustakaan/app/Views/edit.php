

<h1>Edit Anggota</h1>

<form action="/members/<?= $member['id']; ?>" method="post">
    <label for="name">Nama</label>
    <input type="text" name="name" value="<?= $member['name']; ?>" required>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?= $member['email']; ?>" required>

    <label for="phone">Telepon</label>
    <input type="tel" name="phone" value="<?= $member['phone']; ?>">

    <button type="submit">Simpan Perubahan</button>
</form>

<a href="/members">Batal</a>


<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/Anggota/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Anggota</th>
            <th>Kota</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_anggota as $k=>$v): ?>
            <tr
                <td><?php echo isset($v['anggota']) ? $v['anggota'] : ''; ?></td>
                <td><?=$v['kota'] ?></td>
                <td> <a href="<?=base_url("/anggota/edit/".$v['id'])?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apa kamu yakin ingin menghapus nya ??')" form action="<?=base_url('anggota/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!DOCTYPE html>
<html>
<head>
    <title>Create anggota</title>
</head>
<body>

<h1>Create anggota</h1>

<form action="<?= base_url('anggota/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="namaanggota">Nama Anggota</label>
    <input type="text" name="anggota" value="<?=$data['anggota'] ?? ''?>" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>