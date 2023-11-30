disini saya membuat website yang kemarin yaitu rekomendasi komik.
nah di sini saya mengaplikasikan secara sederhana arimatik, statement, syntax, image change, button, dan pergantingan paragraf menggunakan button. 
mohon maaf apabila terlalu sederhana dan saya di bantu dengan chatgpt.

## 1. ini merupakan aritmatik, statement dan syntax
```
<td id="score"></td>
<script>
let a, b, c ;
a = 4;
b = 4.70;
c = a + b ;
document.getElementById("score").innerHTML = c;
console.log(c)
</script>
```
"+" merupakan aritmatik. <br>
"let" merupakan statement. <br>
semua codingan diatas merupakan syntax.
### hasilnya:
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/9898c3bf-8306-46bc-811b-ee4a06215caf) 
<br>
8.7 merupakan hasil dari aritmatik.



## 2.  ini merupakan image change
```
<button onclick="gantiGambar()" class="p-3 bg-sky-800 rounded-md shadow-md shadow-black hover:shadow-lg delay-300 hover:bg-sky-700 hover:ring-2 hover:ring-black right-10">Ganti Gambar</button>
<script>
var gambarIndex = 0;
var daftargambar = ['images/komikbiru.png', 'images/changegm.png'];
function gantiGambar() {
var gambar = document.getElementById("gambar1");
gambarIndex = (gambarIndex + 1) % daftargambar.length;
gambar.src = daftargambar[gambarIndex];
console.log(gambarIndex)
}
</script>
```
### hasilnya:
sebelum:
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/0255dead-d32c-49cd-b666-b5f519965dcb)
<br>
sesudah:
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/0fc4f762-612f-4cab-a468-fec83fc2ae70)
<br>
setelah mengklik tombol ganti gambar gambar akan terganti.

## 3. ini merupakan pergantingan paragraf menggunakan button
```
<p id="gantiparagraf">Di sini kita merekomendasikan komik-komik<br/>terbaru dan terpopuler yang wajib kalian baca!</p>
<br/>
<button type="button" onclick="document.getElementById('gantiparagraf').innerHTML = 'Website ini merekomendasikan komik komik <br/> terbaru  yang populer dan wajib kalian baca <br/> karena seru dan sangat manjur untuk <br/>penghilang stress.'" class="p-3 bg-sky-800 rounded-md shadow-md shadow-black hover:shadow-lg delay-300 hover:bg-sky-700 hover:ring-2 hover:ring-black">Baca Lebih Lanjut</button>
```
### hasilnya:
sebelum:
<br>
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/576c216a-5d1f-48d3-a28d-05c1c5a4fc8d)
<br>
sesudah:
<br>
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/a76de43a-45e0-42f6-883b-a814f98ebc52)
<br>
setelah menekan tombol baca lebih lanjut paragraf akan terganti.

## 4. ini merupakan button
```
<button onclick="notifikasi()" class="list-none inline-block px-6 transition ease-in-out delay-150 hover:scale-110 hover:bg-sky-800 rounded-md hover:opacity-75">Get Notification</button>
<script>
function notifikasi() {
alert("Terima Kasih silahkan di tunggu updatenya")
console.log(notifikasi)
}
</script>
```
disini saya menggunakan button saat button di tekan akan memunculkan alert(pemberitahuan) yang berisi "terima kasih silahkan di tunggu updatenya".

### hasilnya:
sebelum:
<br>
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/3ebae991-9761-4893-b80b-d0fc7e564fb9)
<br>
sesudah:
<br>
![image](https://github.com/miqdamsyiamn/PWA231/assets/144521842/0f2044f7-6951-48f8-8148-519a2d1a0e76)
<br>
ketikan di tekan akan memunculkan pemberitahuan diatasnya

## Terima Kasih






