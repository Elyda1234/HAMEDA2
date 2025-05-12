<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Blog - Artikel 1</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>


        <!-- Navbar -->
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
                    <li><a href="Kembaliartikel.php">Kembali</a></li>
                    <li><a href="Keluar.php">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </nav>

        <!-- Konten Artikel Detail -->
         <div class="Isi1">
        <div class="Kolom-Kiri">
            <div class="TeksGambaraktivitashari1">
            <h1>Artikel 3: Struktur Website</h1>
            <p class="Tanggal">Tanggal: 03 April 2025</p>
            <div class="teksgame">
            <h3>Struktur Folder Website Sederhana</h3>

            <p>Agar pengembangan website lebih rapi dan mudah dikelola, sangat penting untuk menyusun struktur folder dengan benar. Struktur folder yang baik membantu memisahkan file HTML, CSS, JavaScript, dan aset lain seperti gambar atau font.</p>


            <h3>Contoh Struktur Folder Sederhana</h3>

            <p>Berikut adalah struktur dasar folder sebuah website kecil:</p>

            <pre>
            /website-ku/
            ├── index.html
            ├── about.html
            ├── /css/
            │   └── style.css
            ├── /js/
            │   └── script.js
            ├── /img/
               └── profil.jpg

 Keterangan:
/website-ku/: folder utama website

index.html: halaman utama

css/: folder untuk semua file CSS

js/: folder untuk file JavaScript

img/: folder gambar
            </pre>


            <h3>Menghubungkan CSS dari Folder CSS</h3>

            <p>Untuk menghubungkan file CSS dari folder /css, gunakan tag seperti berikut:</p>

            <pre>
            &lt;link rel="stylesheet" href="css/style.css"&gt;

Letakkan tag ini di dalam bagian {head} dokumen HTML.
            </pre>


            <h3>Memanggil File JavaScript dari Folder js</h3>

            <p>File JavaScript bisa diletakkan di bagian akhir dokumen HTML (sebelum /body>):</p>

            <pre>
            &lt;script src="js/script.js"&gt;&lt;/script&gt;
            </pre>

            <h3>Menampilkan Gambar dari Folder img</h3>

            <p>Gunakan tag {img} untuk menampilkan gambar:</p>
            <pre>
            &lt;img src="img/profil.jpg" alt="Foto Profil" width="200"&gt;
            </pre>
            <h3>Tips Tambahan:</h3>
            <p>Gunakan nama folder dan file yang deskriptif dan tidak mengandung spasi.<br>
            Simpan semua gambar di folder img, jangan campur dengan file HTML.<br>
            Gunakan ekstensi .css untuk stylesheet dan .js untuk JavaScript agar mudah dikenali<br></p>

            <h3>Kesimpulan</h3>
            <p>Dengan menyusun struktur folder secara rapi sejak awal, kamu akan lebih mudah mengelola website saat ukurannya berkembang. Struktur sederhana ini juga mempermudah debugging dan kolaborasi jika kamu bekerja dalam tim</p>
            </div>
        </div>

        <!-- Footer -->
          <div class="Footer">
        Copyright &copy; 2025
    </div>

</body>
</html>
