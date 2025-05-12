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
            <h1>Artikel 2: Panduan HTML dan CSS</h1>
            <p class="Tanggal">Tanggal: 02 April 2025</p>
            <div class="teksgame">
            <h2>Panduan HTML dan CSS untuk Pemula</h2>
            <p>HTML dan CSS merupakan fondasi utama dalam pembuatan website. HTML digunakan untuk menyusun struktur konten, sedangkan CSS berperan dalam mempercantik tampilan. Berikut ini adalah pengenalan dasar mengenai HTML dan CSS.</p>
            <h3>Struktur Dasar HTML</h3>
            <p>Sebuah dokumen HTML selalu dimulai dengan deklarasi dan memiliki struktur dasar seperti berikut:</p>

            <pre>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
              &lt;head&gt;
                &lt;title&gt;Judul Halaman&lt;/title&gt;
              &lt;/head&gt;
              &lt;body&gt;
                &lt;h1&gt;Halo Dunia!&lt;/h1&gt;
                &lt;p&gt;Ini adalah paragraf pertama saya.&lt;/p&gt;
              &lt;/body&gt;
            &lt;/html&gt;
            </pre>


            <h3>Heading dan Paragraf</h3>
            <p>HTML memiliki 6 tingkatan heading dan elemen paragraf yang umum digunakan.</p>

            <pre>
            &lt;h1&gt;Heading 1&lt;/h1&gt;
            &lt;h2&gt;Heading 2&lt;/h2&gt;
            &lt;p&gt;Ini adalah paragraf.&lt;/p&gt;
            </pre>

            <h3>Membuat Tabel</h3>

            <p>Tabel dalam HTML dibuat menggunakan tag seperti berikut.</p>

            <pre>
            &lt;table border="1"&gt;
              &lt;tr&gt;
                &lt;th&gt;Nama&lt;/th&gt;
                &lt;th&gt;Jurusan&lt;/th&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;Hafiz&lt;/td&gt;
                &lt;td&gt;Matematika&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/table&gt;
            </pre>

            <h3>Dasar CSS: Internal Style</h3>

            <p>CSS dapat ditulis langsung di dalam tag.</p>

            <pre>
            &lt;style&gt;
              body {
                background-color: #f4f4f4;
                font-family: Arial, sans-serif;
              }

              h1 {
                color: navy;
              }

              p {
                font-size: 16px;
              }
            &lt;/style&gt;
            </pre>


            <h3>CSS Inline Style</h3>

            <p>CSS juga bisa langsung ditambahkan ke elemen HTML menggunakan atribut style.</p>

            <pre>
            &lt;p style="color: red; font-weight: bold;"&gt;
              Ini paragraf berwarna merah dan tebal.
            &lt;/p&gt;
            </pre>

            <h3>Mengatur Layout dengan CSS</h3>

            <p>Dengan CSS, kita bisa mengatur tata letak, seperti menempatkan elemen di tengah atau membuat kolom.</p>

            <pre>
            &lt;style&gt;
              .container {
                width: 80%;
                margin: 0 auto;
              }

              .kolom {
                float: left;
                width: 50%;
              }
            &lt;/style&gt;
            </pre>

            <h3>Kesimpulan</h3>
            <p>HTML dan CSS sangat penting untuk dikuasai oleh siapa pun yang ingin membuat website. Dengan memahami dasar-dasarnya, kamu sudah bisa membangun halaman web statis sederhana. Langkah selanjutnya adalah memperdalam penggunaan elemen, tata letak, dan responsivitas.</p>
            </div>
         </div>

        <!-- Footer -->
    <div class="Footer">
        Copyright &copy; 2025
    </div>

</body>
</html>
