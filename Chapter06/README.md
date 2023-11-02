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
