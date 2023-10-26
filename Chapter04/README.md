## Belajar CSS (Cascading Style Sheet) Dasar
Yang akan dipelajari terdiri dari :
1. CSS Font Family, Padding, Margin
2. Design Table dengan CSS, Properti Overflow CSS
3. Display CSS : Inline, Block, None dan selengkapnya
4. CSS Gradient, Grid (Mengatur layout), CSS Selector
5. CSS Border (Property Style, color, width, dll)
6. CSS Position, Box Shadow, Animation, Background Image
7. Latihan Tutorial Dasar untuk Pemula

``` html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padding dan table</title>
    <style>
      table {
        background-color: #04aa6d;
        color: white;
      }
      td {
        padding: 8px;
      }
      tr {
        border-bottom: 1px solid #ddd;
      }
      tr:hover {
        background-color: #f5f5f5;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>Kolom 1, Baris 1</td>
        <td>Kolom 2, Baris 1</td>
      </tr>
      <tr>
        <td>Kolom 1, Baris 2</td>
        <td>Kolom 2, Baris 2</td>
      </tr>
      <tr>
        <td>Kolom 1, Baris 3</td>
        <td>Kolom 2, Baris 3</td>
      </tr>
    </table>
  </body>
</html>

```

# Membuat UI Sederhana
``` html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- Menghubungkan file CSS eksternal -->
    <title>Website Responsif</title>
  </head>
  <body>
    <header>
      <h1>Selamat Datang di Website Kami</h1>
      <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
      </nav>
    </header>
    <main>
      <section class="content">
        <h2>Tentang Kami</h2>
        <p>
          Kami adalah perusahaan yang berfokus pada pengembangan web dan
          teknologi.
        </p>
      </section>
      <section class="content">
        <h2>Layanan Kami</h2>
        <ul>
          <li>Desain Web</li>
          <li>Pengembangan Aplikasi</li>
          <li>Optimisasi SEO</li>
        </ul>
      </section>
    </main>
    <footer>&copy; 2023 Website Responsif. Hak Cipta Dilindungi.</footer>
  </body>
</html>
```

hasilnya
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/116e121d-b693-4c58-8c0b-bc4b5fd8e98d)
