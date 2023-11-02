# Praktikum JavaScript
## Langkah mudah mempelajari Javascript
1. Membuat File Javascript
2. Masukan Codingan
3. Jalankan Script JavaScript

## Membuat hello World! JavaScipt
``` js
<h2>Membuat JavaScript bisa membaca halaman dari</h2>
    <p id="coba">Isi akan berubah setelah kita klik button KLIK DISINI</p>
    <p>Menampilkan Waktu</p>
    <button
      type="button"
      onclick='document.getElementById("coba").innerHTML = "Hello World Selamat Datang di JavaScript"'
    >
      Klik Disini
    </button>
```

## Menampilkan waktu menggunakan JavaScript
```Js
 <!-- Ini codingan button yang kedua -->
    <button
      type="button"
      onclick="document.getElementById('waktu').innerHTML = Date()"
    >
      "Klik Disini untuk menampilkan Waktu.
    </button>
    <p id="waktu"></p>
```
## Hasilnya
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/aa4f68db-c1ac-4c47-a7c9-0e6d4d9db502)

## Menggunakan Source Value untuk menyalakan dan mematikan Lampu dari W3Scholl
``` js
<!-- Menyalakan Lampu Source Asli dari W3Scholl -->
    <h2>Menyalakan Lampu Source Asli dari W3Scholl</h2>
    <button
      onclick="document.getElementById('gambar').src='https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulbon.gif'"
    >
      Nyalakan Lampunya
    </button>
    <img
      id="gambar"
      src="https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulbon.gif"
      alt=""
    />
    <button
      onclick="document.getElementById('gambar').src='https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulboff.gif'"
    >
      Matikan Lampunya
    </button>
```

# Hasilnya
## Lampu Menyala
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/bddb96b1-1651-41b8-a3ce-3b6bb6628e4d)
## Lampu Mati
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/2a7d5a6b-766e-4f98-9561-5745b4d1af10)

## Memasukan data Aritmatik pada COnsole JavaScript
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/98be1940-3c55-4aa2-acb9-4d816f411144)
Deskripsinya : Inputan terakhir itu akan error karena salah menggunakan syntax

## Membuat Variable JavaScript
``` js
<!-- Membuat Variable -->
    <h2>Membuat Variable</h2>
    <p>ini adalah sebuah variable didalam JavaScript</p>
    <p>JavaScript dapat melakukan apa saja yang anda perintahkan</p>
    <p id="variable"></p>
    <script>
      x = 10;
      y = 12;
      z = x * y;
      document.getElementById("variable").innerHTML = "isinya adalah = " + z;
    </script>
```
## hasilnya
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/9efdcd15-5dd0-4ac4-b284-9ac930cec0b4)

## Membuat Let Pada JavaScript
``` Js
    <!-- Membuat Let Pada JavaScript -->
    <h2>Ini Contoh Let</h2>
    <p id="let"></p>
    <script>
      let x = 20;
      {
        let x = 2;
      }
      document.getElementById("let").innerHTML = x;
    </script>
```
# hasilnya
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/1dce4e34-44f1-4c9d-bf71-f1d581efcb18)

# Tugas Praktikum
1. Buat Folder NPM_NAMA_JS
2. Buatkan 1 tampilan website sederhana yang yang sudah dikerjakan sebelumnya
3. menggunakan HTML dan CSS Tailwind
4. Aritmatik, Syntax, Statement, Image Change, Button, Penggantian Paragraf dari Button
5. Buatkan Readme.md sesuai Studi kasus masing-masing



