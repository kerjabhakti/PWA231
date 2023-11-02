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







