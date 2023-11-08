# Tugas Chapter06 Rifky Najra Adipura
## Penjelasan Singkat Website Yang di Buat
Saya membuat sebuah Website sederhana dengan topik tampilan Website Club Sepak Bola Persib Bandung. Berikut isi Aritmatik, Syntax, Statement, Image Change, Button, Penggantian Paragraf dari Button yang ada dalam Website

## 1. Aritmatik
``` js
<!-- Aritmatik -->
                <p id="totalgoal"></p>
                <script>
                    let d = 11;
                    let f = 17;
                    let g = d + f
                    document.getElementById("totalgoal").innerHTML = "Total Semua Goal =" + g;
                </script>
```
## Hasilnya
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilAritmatik.JPG?raw=true)

## 2. Syntax
```Js
<!-- Syntax -->
                <p class="text-gray-700" id="ratingdavid"></p>
                <script>
                var x, y;
                    x = 80 + 80;
                    y = x / 2;
                    document.getElementById("ratingdavid").innerHTML = "Rating = "+ y;
                </script>
```
## Hasilnya
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilSyntax.JPG?raw=true)

## 3. Statement
``` js
<!-- Statement -->
                <p class="text-gray-700 mb-4" id="goldavid"></p>
                <script>
                    let a, b, c; // Statement 1
                    a = 5;       // Statement 2
                    b = 6;       // Statement 3
                    c = a + b;   // Statement 4
                    document.getElementById("goldavid").innerHTML = "Jumlah Gol Musim Ini = " + c;
                </script>
```

## Hasilnya
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilStatement.JPG?raw=true)

## 4. Image Change
``` js
<img src="img/david.jpg" alt="Foto David" class="mb-4 rounded-lg" 
<!-- Image Change -->
                <button class="my-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="document.getElementById('fotodavid').src='https://persib-app-production.s3.ap-southeast-1.amazonaws.com/david_borneo_21102023_barly_68a6d7d4a9.jpg'">
                    Ganti Foto
                </button>
```
## hasilnya
Sebelum
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilimageChange1.JPG?raw=true)

Sesudah
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilimageChange2.JPG?raw=true)

## 5. Button
``` Js
<!-- Button -->
                <button onclick="FunctionDavid()" class="my-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Baca Selengkapnya</button>
                <script>
                    function FunctionDavid() {
                        alert("Yakin Untuk Lihat Selengkapnya?");
                        window.open("https://persib.co.id/article-details/david-da-silva-pencetak-gol-terbanyak-persib-sejak-era-liga-indonesia");
                    }
                </script>
```
## hasilnya
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilButton.JPG?raw=true)

# 6. Penggantian Paragraf dari Button yang ada dalam Website
``` Js
<div class="container mx-auto text-center">
                <h1 class="text-5xl font-bold mb-4 my-20">Selamat Datang Di Website PERSIB</h1>
                <p class="text-lg" id="text">Temukan berita terbaru, informasi pemain, jadwal pertandingan, dan klasemen liga.</p>

                <!-- Penggantian Paragraf dari Button -->
                <button class="my-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                type="button" onclick='document.getElementById("text").innerHTML = "Bandung Belongs To Us"'>
                    Ganti Text
                </button>
            </div>
```
## hasilnya
Sebelum
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilPergantian1.JPG?raw=true)
Sesudah
![alt text](https://github.com/rifkyadipura/PWA231/blob/main/Chapter06/Tugas/714230025_RifkyNajraAdipura/ImgForReadme/hasilPergantian2.JPG?raw=true)


