<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/pengguna/form/')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Pengguna</th>
            <th>katasandi</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_pengguna as $k=>$v): ?>
            <tr>
                <td><?=$v['nama_lengkap'] ?></td>
                <td><?=$v['katasandi'] ?></td>
                <td> <a href="<?=base_url('/pengguna/edit/'.$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('yakin ingin menghapusnya ??')" action="<?=base_url('/pengguna/hapus/')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>