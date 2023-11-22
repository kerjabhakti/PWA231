# Tugas Chapter 6 JavaScript

## Aritmatika JavaScript
``` js
<script>
 let x = 15;
 let y = 2;
 let z = x * y;
 document.getElementById("arit").innerHTML = z;
</script>
```

## Syntax JavaScript
``` js
<script>
  let angka1 = 6;
  let angka2 = 2;
  let hasilPerkalian = angka1 * angka2;
  console.log("Hasilnya adalah " + hasilPerkalian);
</script>
```

## Statement JavaScript
```js
<script>
  function hitungLuasPersegiPanjang(panjang, lebar) {
  return panjang * lebar;
}

  let panjang = 5;
  let lebar = 3;
  let luas = hitungLuasPersegiPanjang(panjang, lebar);

  console.log("Luas persegi panjang: " + luas);
</script>
```

## Image Change JavaScript
```js
  <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Image Change</h1>
    <p class="mt-2 text-gay-500 capitalize dark:text-gray-300 group-hover:text-gray-300">
      Onclick Gambar
    </p>
    <br />
    <button class="center" onclick='document.getElementById("gambar").src="https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulbon.gif"'>
        Nyalakan Lampu
    </button>
                
    <img class="center"
    id="gambar"
    src="https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulbon.gif"
    alt=""
    />
                
    <button class="center" onclick='document.getElementById("gambar").src="https://raw.githubusercontent.com/kerjabhakti/PWA231/main/Chapter06/pic_bulboff.gif"'>
      Matikan Lampu
    </button>
```

## Button JavaScript
``` js
  <script>
  function tombolDitekan() {
  alert('Tombol ditekan!');
  }
  </script>
```

## Paragraf JavaScript
``` js
  let paragraf = document.getElementById("paragraf");
  let teksAwal = "Coba Click sekali lagi...";
  let teksBaru = "Tapii Boong YHAAAAAA....";

  function ubahParagraf() {
    if (paragraf.innerHTML === teksAwal) {
        paragraf.innerHTML = teksBaru;
    } else {
        paragraf.innerHTML = teksAwal;
    }
  }
```
