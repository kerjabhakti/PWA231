# Tugas 6 Muhammad Haitsam Izzuddin Azman
## Membuat Image Change
``` js
<div>
                <img id="gambar" src="/Chapter06/Tugas/714230021_MuhammadHaitsamIzzuddinAzman_JS/images/phone1.jpg" alt="" />
                <button class="bg-blue-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-white duration-300 hover:border border border-transparent"
                onclick="document.getElementById('gambar').src='/Chapter06/Tugas/714230021_MuhammadHaitsamIzzuddinAzman_JS/images/phone1.jpg'">Back</button>  
                <button class="bg-blue-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-white duration-300 hover:border border border-transparent"
                onclick="document.getElementById('gambar').src='/Chapter06/Tugas/714230021_MuhammadHaitsamIzzuddinAzman_JS/images/phone2.jpg'">Next</button>
            </div>
```

## Membuat Syntax & Statement
``` js 
<p id="demo"></p>
        <script>
          let x,y,z;
          x = 10;
          y = 30;
          z = x + y;
          document.getElementById("demo").innerHTML ="Dapatkan promo hanya untuk hari ini " + x +" + " + y + " = " + z + "<b>%</b>" + "."; 
        </script>
```

## Membuat Button & Penggantian Paragraf Dari Button
``` js
<a href="#" class="bg-blue-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-white duration-300 hover:border border border-transparent"
          type="button" onclick="document.getElementById('harga').innerHTML ='S23 SE <b>Rp.9.999.999</b> <br> S23 <b>Rp.11.999.999</b> <br> S23 ULTRA <b>Rp.17.999.999</b> '"
            >Buy it Now!</a>
          <a href="#" class="bg-blue-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-white duration-300 hover:border border border-transparent"
          type="button" onclick="document.getElementById('harga').innerHTML ='Dapatkan harga promo sekarang juga untuk tipe S23 hanya dengan <b>Rp.9.999.999</b>'"
          >Cek Harga Promo Sekarang!</a>
```
