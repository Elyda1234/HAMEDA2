<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
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
                    <li><a href="Keluar.php">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Bagian Pembagian Kolom -->
    <div class="Isi">
        <div class="Kolom-Kiriindex">
            <h3 class="Teks">Selamat Datang Pengunjung</h3>
            <div class="TeksGambaraktivitashari1">
                <img src="../assets/css/<?= $images[1] ?? 'default.jpg' ?>" alt="Deskripsi Gambar" class="Gambarindex">
            <p class="teksgame"> 
                <i>Website</i> ini dibuat oleh M. Hafiz Ramadhan sebagai bagian dari tugas mata kuliah Komputer dan Pemrograman. Melalui <i>website</i> ini saya ingin menjadikan sebagai ruang terbuka untuk menampilkan hasil belajar, informasi pribadi, serta dokumentasi dari pembuatan website ini sendiri. 
            </p>

             <h4 class="Teks">Apa Saja Hal Yang Terdapat Pada <i>Website</i> Ini?</h4>
             <p class="Teks">
                 1. Tugas Kuliah<br>
                 Berisi tugas yang diberikan kepada saya selama semester ini dalam matakuliah Komputer dan Pemrograman. <br>
                 2. Dokumentasi<br>
                 <i>Website</i> ini berisi tentang dokumentasi selama saya membuat tugas ini. <br>
                 3. Informasi Pribadi<br>
                 Berisikan berbagai informasi pribadi dari saya sendiri, seperti biodata, hobi, dan juga riwayat pendidikan. <br>
             </p>
            </div>
        </div>
        <div class="Kolom-Kanan-Semua">
            <div class="Kolom-Kananindex">
                <h3 li><a href="biodata.php">Biodata</a></li></h3>
                <img src="../assets/css/<?= $images[2] ?? 'default.jpg' ?>" alt="Deskripsi Gambar" class="Gambarbiodataindex"> 
                <p>Biodata Pembuat Website</p>
            </div>
            <div class="Kolom-Kananindex2">
                 <h3 li><a href="aktivitas.php">Aktivitas</a></li></h3>
                <img src="../assets/css/<?= $images[3] ?? 'default.jpg' ?>" alt="Deskripsi Gambar" class="Gambarrr">
                <p>Perkembangan Pembuatan Website</p>
            </div>
        </div>
    </div>
    <div class="Footer">
        Copyright &copy; 2025
    </div>
</body>
</html>