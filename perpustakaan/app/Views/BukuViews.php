<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <?php
    // Gantilah ini dengan kode untuk mengambil daftar buku dari database berdasarkan kategori yang dipilih
    if (isset($_GET['kategori'])) {
        $kategori_terpilih = $_GET['kategori'];
        
        // Misalnya, Anda dapat mengambil daftar buku dari database di sini berdasarkan kategori
        // $daftar_buku = ambil_daftar_buku_dari_database($kategori_terpilih);
        // ...

        // Menampilkan daftar buku
        echo "<ul>";
        foreach ($daftar_buku as $buku) {
            echo "<li>$buku</li>";
        }
        echo "</ul>";
    } else {
        echo "Silakan pilih kategori buku terlebih dahulu.";
    }
    ?>

    <p><a href="kategori_buku_view.php">Kembali ke Daftar Kategori Buku</a></p>
</body>
</html>
