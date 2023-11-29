disini saya akan mencoba membuat website penjualan makanan yang responsif dengan html dan css, sebagai referensi saya melihatnya di youtube mohon maaf bila kurang memuaskan. 
disini saya membuat website penjualan makanan  yang berisi beranda , menu yang akan di jual, dan tempat untuk memberi saran dan menghubungi saya.
terima kasih sebelumnya.
## 1. pada landing page saya menggunakan css standar, sedikit tailwind css, dan java script untuk change gambar
#### htmlnya:
```html dan sedikit tailwind
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WaregCUY</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <nav>
      <div class="navigasibar">
        <!-- Navbar start -->
        <div class="logo">
          <a href="#" class="font-semibold">Wareg<span>CUY.</span></a>
        </div>
        <div class="menu">
          <ul>
            <li class="transition ease-in-out delay-150 hover:scale-110"><a href="#home">Beranda</a></li>
            <li class="transition ease-in-out delay-150 hover:scale-110"><a href="menu.html">Menu</a></li>
            <li><a href="https://www.instagram.com/miqdamsyiam/" class="tbl-biru">Hubungi Saya</a></li>
          </ul>
        </div>
        <!-- Navbar end -->
      </div>
    </nav>
    <!-- Content start -->
    <div class="content">
      <section id="home">
        <img id="ganti" src="images/logo.avif"/>
        <div class="kolom">
          <p class="deskripsi">
            Kamu lapar? Males masak? duit tinggal sedikit?
          </p>
          <br>
          <h2 class="font-semibold text-3xl">Makan Di Wareg<span class="text-sky-800">CUY</span> aja</h2>
          <br>
          <p class="font">
            Di jamin harga murah meriah dan merakyat cocok untuk yang lagi
            lapar. buruan ke WaregCUY aja.
          </p>
          <br/>
          <p><a href="menu.html" class="tbl-pesan">Silahkan pesan disini</a></p>
          <br>
          <button onclick="document.getElementById('ganti').src = 'images/logo2.avif'" class="p-3 px-5 bg-sky-700 shadow-md shadow-black hover:shadow-lg delay-300 right-0 rounded-xl text-white hover:text-red-400">Ganti Gambar</button>
        </div>
      </section>
    </div>
    <!-- content end -->
    <footer>&copy; 2023 miqdam sn. Hak Cipta Dilindungi</footer>
  </body>
</html>
```
#### java scriptnya:
```js
<button onclick="document.getElementById('ganti').src = 'images/logo2.avif'" class="p-3 px-5 bg-sky-700  shadow-md shadow-black hover:shadow-lg delay-300 right-0 rounded-xl text-white hover:text-red-400">Ganti Gambar</button>
```
#### css standar:
```css standar
* {
  text-decoration: none;
  margin: 0;
  padding: 0;
}
:root {
  --logo: #112d4e;
  --bg: #f9f7f7;
  --tbl-biru: #3f72af;
  --hover: #dbe2ef;
  --merah: #ff2e63;
}

body {
  margin: 0;
  padding: 0;
  font-family: "open sans", sans-serif;
}

.navigasibar {
  width: 100%;
  position: relative;
  padding: 10px;
  box-shadow: 1px 1px 5px #000;
}

.logo a {
  font-size: 65px;
  font-weight: 800px;
  float: left;
  font-family: "roboto", open sans, sans-serif;
  color: var(--logo);
  margin-left: 30px;
}
span {
  color: var(--tbl-biru);
}

.menu {
  float: right;
  margin-right: 20px;
}

nav {
  width: 100%;
  margin: auto;
  display: flex;
  line-height: 70px;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  background: var(--bg);
}

nav ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
}

nav ul li {
  float: left;
}

nav ul li a {
  color: black;
  font-weight: bold;
  text-align: center;
  padding: 0px 16px 0px 16px;
  text-decoration: none;
}

nav ul li a:hover {
  text-decoration: underline;
  transition: 0.3s ease;
  transition-delay: 0.2s;
}

section {
  margin: auto;
  display: flex;
  margin-bottom: 50px;
}

.kolom {
  margin-top: 130px;
  margin-bottom: 50px;
  position: sticky;
}

.kolom .deskripsi {
  font-size: 30px;
  font-weight: bold;
  font-family: "roboto", sans-serif;
  color: var(--logo);
}

h2 {
  font-family: "roboto", sans-serif;
  font-weight: 800;
  font-size: 50px;
  margin-bottom: 20px;
  color: var(--logo);
  width: 100%;
  line-height: 80px;
}

.font {
  font-size: 25px;
  font-family: "roboto", sans-serif;
}

a.tbl-biru {
  background: var(--tbl-biru);
  border-radius: 20px;
  margin-top: 20px;
  padding: 15px 20px 15px 20px;
  color: black;
  cursor: pointer;
  margin-left: 20px;
}

a.tbl-biru:hover {
  background: #ff2e63;
  text-decoration: dotted;
  transition: 0.5s ease;
  transition-delay: 0.3s;
}

a.tbl-pesan {
  background: var(--tbl-biru);
  border-radius: 15px;
  margin-bottom: 25px;
  padding: 10px 15px 10px 15px;
  font-size: 20px;
  font-family: "roboto", sans-serif;
  color: black;
  cursor: pointer;
  box-shadow: 1px 1px 5px #000;
}
a.tbl-pesan:hover {
  background: var(--merah);
  text-decoration: dotted;
  transition: 0.50s ease;
  transition-delay: 0.3s;
}
footer {
  background-color: black;
  color: white;
  text-align: center;
  padding: 5px;
}
```
## hasilnya:
![image](https://github.com/miqdamsyiamn/Ass-MiqdamSyiamN/assets/144521842/a938702a-0191-4176-b7ea-5193bc91a29c)
### hasil setelah mengklik tombol ganti gambar:
![image](https://github.com/miqdamsyiamn/Ass-MiqdamSyiamN/assets/144521842/a06b43bf-4adf-4644-bf46-271ee433a55e)

## 2. pada bagian menu saya menggunakan full tailwind css dan menambahkan sedikit java script 
```html dan tailwind css
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekomendasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="bg-sky-950 min-h-screen ">
      <!-- Navbar start -->
      <div class="p-3 bg-sky-900 bg-opacity-50 shadow-lg shadow-black flex justify-between text-4xl items-center text-slate-100 font-medium sticky">
        <h1 class="text-center flex-1 ">Menu Makanan</h1>
        <a href="index.html" class=" p-2 rounded-md shadow-lg shadow-black hover:text-red-400 transition ease-in-out delay-300 hover:scale-110">Kembali</a>
      </div>
      <!-- Navbar end -->
      <!-- content start -->
      <br>
      <!-- CONTENT START -->
      <section class="container mt-8 p-4 w-full h-96 ">
        <div class="grid grid-cols-5 gap-4 w-full ">
          <!-- komik 1 -->
          <div class="bg-sky-800 rounded-lg p-4 shadow-lg bg-opacity-60 shadow-black ring-2 ring-sky-700 transition-transform duration-300 delay-150 hover:scale-105">
            <img src="images/miebaso.avif" alt="Mie baso" class="w-full h-48">
            <h2 class="text-2xl text-slate-100 font-semibold mt-4">Mie baso</h2>
            <table class="text-1xl text-slate-100 font-medium">
              <tbody>
                <tr>
                  <td>harga</td>
                  <td>:</td>
                  <td>Rp. 12.000</td>
                </tr>
              </tbody>
            </table>
            <p class="text-1xl text-slate-100">Nikmati sensasi lezatnya mie gurih dengan taburan bakso lembut yang meleleh di mulut. Rasakan kuah kaldu yang mendalam dan bumbu khas yang memanjakan lidah. Mie Baso, pilihan sempurna untuk penggemar cita rasa otentik.</p>
            <div class="items-center justify-center flex mt-4">
              <button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
                <script>
                  function notif() {
                    alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
                  }
                </script>
            </div>
          </div>
          <!-- komik 2 -->
          <div class="bg-sky-800 rounded-lg p-4 bg-opacity-60 shadow-lg shadow-black ring-2 ring-sky-700 transition-transform duration-300 delay-150 hover:scale-105">
            <img src="images/nasigoreng.avif" alt="Nasi Goreng" class="w-full h-48">
            <h3 class="text-2xl text-slate-100 font-semibold mt-4">Nasi Goreng</h3>
            <table class="text-1xl text-slate-100 font-medium">
              <tbody>
                <tr>
                  <td>harga</td>
                  <td>:</td>
                  <td>Rp. 10.000</td>
                </tr>
              </tbody>
            </table>
            <p class="text-1xl text-slate-100">Nasi goreng adalah hidangan klasik yang penuh dengan rasa gurih dan aroma harum. Terdiri dari nasi yang dimasak dengan rempah-rempah pilihan, potongan daging, sayuran segar, dan telur. Setiap suapannya akan memuaskan selera Anda.</p>
            <div class="items-center justify-center flex mt-4">
              <button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
                <script>
                  function notif() {
                    alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
                  }
                </script>
            </div>
          </div>
          <!-- komik 3 -->
          <div class="bg-sky-800 rounded-lg p-4 bg-opacity-60 shadow-lg shadow-black ring-2 ring-sky-700 transition-transform duration-300 delay-150 hover:scale-105">
            <img src="images/ayamgoreng.avif" alt="" class="w-full h-48">
            <h3 class="text-2xl text-slate-100 font-semibold mt-4">Fried Chicken</h3>
            <table class="text-1xl text-slate-100 font-medium">
              <tbody>
                <tr>
                  <td>harga</td>
                  <td>:</td>
                  <td>Rp. 8.000</td>
                </tr>
              </tbody>
            </table>
            <p class="text-1xl text-slate-100">Kenikmatan kuliner tak terkalahkan dengan ayam goreng kami. Kulitnya renyah dan gurih, dagingnya empuk dan beraroma. Diberikan dengan bumbu rahasia yang akan membuat Anda ingin kembali lagi dan lagi.</p>
            <div class="items-center justify-center flex mt-4">
              <button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
                <script>
                  function notif() {
                    alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
                  }
                </script>
            </div>
          </div>
          <!-- komik 4 -->
          <div class="bg-sky-800 rounded-lg p-4  bg-opacity-60 shadow-lg shadow-black ring-2 ring-sky-700 transition-transform duration-300 delay-150 hover:scale-105">
            <img src="images/lemontea.avif" alt="" class="w-full h-48">
            <h3 class="text-2xl text-slate-100 font-semibold mt-4">Lemon Tea</h3>
            <table class="text-1xl text-slate-100 font-medium">
              <tbody>
                <tr>
                  <td>Harga</td>
                  <td>:</td>
                  <td>Rp. 6.000</td>
                </tr>
              </tbody>
            </table>
            <p class="text-1xl text-slate-100">Minuman segar dengan kombinasi seimbang antara teh hitam berkualitas dan perasan lemon segar. Rasa asam lemon yang menyegarkan dipadu dengan manisnya teh, menciptakan minuman yang sempurna untuk melepas dahaga.</p>
            <div class="items-center justify-center flex mt-4">
              <button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
                <script>
                  function notif() {
                    alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
                  }
                </script>
            </div>
          </div>
          <!-- menu 5 -->
          <div class="bg-sky-800 rounded-lg p-4  bg-opacity-60 shadow-lg shadow-black ring-2 ring-sky-700 transition-transform duration-300 delay-150 hover:scale-105">
            <img src="images/greentea.avif" alt="Green Tea" class="w-full h-48">
            <h3 class="text-2xl text-slate-100 font-semibold mt-5">Green Tea</h3>
            <table class="text-1xl text-slate-100 font-medium">
              <tbody>
                <tr>
                  <td>Harga</td>
                  <td>:</td>
                  <td>Rp. 6.000</td>
                </tr>
              </tbody>
            </table>
            <p class="text-1xl text-slate-100">Nikmati kesehatan dalam setiap tegukan dengan teh hijau alami kami. Teh hijau kaya akan antioksidan dan rasa yang lembut. Rasakan ketenangan dan kenikmatan dalam setiap gelas.</p>
            <br>
            <div class="items-center justify-center flex mt-1">
              <button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
                <script>
                  function notif() {
                    alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
                  }
                </script>
            </div>
          </div>
          
        </div>
      </section>
      <!-- CONTENT END -->
    </div>
    <footer class="p-1 bg-sky-800  text-white font-semibold text-center">&copy; 2023 Miqdam sn. Hak Cipta Dilindungi</footer>
  </body>
</html>
```
#### java script alert
```js
<button onclick="notif()" class="py-2.5 px-5 bg-sky-800 rounded-md shadow-md shadow-black hover:bg-sky-700 hover:text-red-400 text-white text-2xl">Beli<button>
<script>
function notif() {
alert("Terima Kasih Sudah Order Di sini silahkan di tunggu")
}
</script>
```
## hasilnya:
![image](https://github.com/miqdamsyiamn/Ass-MiqdamSyiamN/assets/144521842/3bd9c34b-2e08-42d5-abe5-ead216e78dd7)
## hasil setelah menekan tombol beli:
![image](https://github.com/miqdamsyiamn/Ass-MiqdamSyiamN/assets/144521842/35ae2d0f-e8c1-4454-be24-e28ad8dd43ef)

## link CI/CD github pages:
https://miqdamsyiamn.github.io/Ass-MiqdamSyiamN/
### Terima Kasih




