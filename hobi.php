<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Bagian Navbar -->
    <nav class="Header">
        <ul class="Header-Bar">
            <li><a href="index.php">Home</a></li>
            <li><a href="aktivitas.php">Aktivitas</a></li>
            <li><a href="hobi.php">Hobi</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="Setting">
                <a>Setting</a>
                <ul class="Subsetting">
                    <li><a href="GantiNama.php">Ganti Nama</a></li>
                    <li><a href="GantiGambar.php">Ganti Gambar</a></li>
                    <li><a href="Kembali.php">Kembali</a></li>
                    <li><a href="Keluar.php">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Bagian Pembagian Kolom -->
    <div class="Isihobi">
        <div class="Kolom-Kirihobi">
            <h3 class="Teks">Ini Adalah Halaman Yang Berisikan Hobi Dari Pemilik Website </h3>
            <h4 li><a href="game.php" class="TeksHobi">1. kulineran</a></li></h4>
            <div class="TeksGambar">
                <img src="assets/css/kuliner.jpg" alt="Deskripsi Gambar" class="Gambarhobi">
            </div>
            <h4  li><a href="gambar.php" class="TeksHobi2">2. nonton masha and the bear</a></li></h4>
            <div class="TeksGambar">
                <img src="assets/css/masha.jpg" alt="Deskripsi Gambar" class="Gambarhobi2">
            </div>
            <div class="TeksGambar">
                <img src="assets/css/hobi22.jpg" alt="Deskripsi Gambar" class="Gambarhobi2">
            </div>
        </div>
        <div class="Kolom-Kanan-Semuahobi">
            <div class="Kolom-Kananhobi">
                <h3 li><a href="aktivitas.php">Aktivitas</h3>
                <img src="assets/css/aktivitashobi.jpg" alt="Deskripsi" class="Gambaraktivitashobi">
                <div class="Bagianaktivitashobi">
                <p li><a href="haripertamacoding.php">1. Aktivitas 1</a></li><br>
                <p li><a href="harikeduacoding.php">  2. Aktivitas 2</a></li><br>
                <p li><a href="hariketigacoding.php"> 3. Aktivitas 3</a></li><br>
                <p li><a href="harikeempatcoding.php">4. Aktivitas 4</a></li><br>
                <p li><a href="harikelimacoding.php"> 5. Aktivitas 5</a></li><br>
                <p li><a href="harikeenamcoding.php"> 6. Aktivitas 6</a></li><br>
                <p li><a href="hariketujuhcoding.php">7. Aktivitas 7</a></li><br>
                </p>
                </div>
            </div>
          <div class="Kolom-Kananhobi">
                    <h3 li><a href="blog.php">Blog</h3>
                    <img src="assets/css/blog.jpg" alt="Deskripsi" class="Gambaraktivitashobi">
                    <div class="SidebarItem"><a href="blog-detail.php">Artikel 1: PHP Basics</a></div>
                    <div class="SidebarItem"><a href="blog-detail2.php">Artikel 2: HTML & CSS Guide</a></div>
                    <div class="SidebarItem"><a href="blog-detail3.php">Artikel 3: Website Structure</a></div>
            </div>
    </div>
    <div class="Footer">
        Copyright &copy; 2025
    </div>
</body>
</html>