<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Buku</h1>

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

    <h2>Form Tambah Buku Baru</h2>
    <form action="proses_tambah_buku.php" method="POST">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis" required><br><br>

        <label for="tahun">Tahun Terbit:</label>
        <input type="number" id="tahun" name="tahun" required><br><br>

        <!-- Tambahkan lebih banyak input sesuai kebutuhan Anda -->

        <input type="submit" value="Tambah Buku">
    </form>

    <p><a href="kategori_buku_view.php">Kembali ke Daftar Kategori Buku</a></p>
</body>
</html>
