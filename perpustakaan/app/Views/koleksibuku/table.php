<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/KoleksiBuku/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th></th>
            <th>tb_buku_id</th>
            <th>nomor_koleksi</th>
            <th>status_koleksi</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_KoleksiBuku as $k=>$v): ?> 
            <tr>
                <td><?=$v['tb_buku_id'] ?></td>
                <td><?=$v['nomor_koleksi'] ?></td>
                <td><?=$v['status_koleksi'] ?></td>
                <td> <a href="<?=base_url("/KoleksiBuku/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('apakah anda yakin untuk menghapusnya tuan??')" action="<?=base_url('KoleksiBuku/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>