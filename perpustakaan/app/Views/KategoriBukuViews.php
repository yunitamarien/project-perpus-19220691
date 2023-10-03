<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori Buku</title>
</head>
<body>
    <h1>Daftar Kategori Buku</h1>
    <ul>
        <?php
        // Gantilah ini dengan kode untuk mengambil daftar kategori buku dari database atau sumber data lainnya
        $kategori_buku = array("Fiksi", "Non-Fiksi", "Fantasi", "Drama", "Horor");
        
        // Menampilkan daftar kategori buku
        foreach ($kategori_buku as $kategori) {
            echo "<li><a href='buku_view.php?kategori=$kategori'>$kategori</a></li>";
        }
        ?>
    </ul>
</body>
</html>
