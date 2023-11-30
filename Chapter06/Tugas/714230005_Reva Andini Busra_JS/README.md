# Tugas 6 Reva Andini Busra
## Membaut Images Change
``` js
<div class="text-white mt-48">
        <img id="gambar" src="https://www.beautyhaul.com/assets/uploads/Manfaat_menggunakan_skincare.jpg">
        <button class="bg-pink-300 rounded-3xl py-3 px-8
        font-medium inline-block mr-4 
        hover:bg-transparent hover:border-pink-300
        hover:text-white duration-300 hover:border
        border border-transparent" onclick="document.getElementById('gambar').src='https://www.beautyhaul.com/assets/uploads/Manfaat_menggunakan_skincare.jpg'"> </button>
        <button class="bg-pink-300 rounded-3xl py-3 px-8
        font-medium inline-block mr-4
        hover:bg-transparent hover:border-pink-300
        hover:text-white duration-300 hover:border
        border border-transparent" onclick="document.getElementById('gambar').src='https'//encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwP2C2dduWnnbQTz7EcaWy5qt592u3axoDRg&usqp=CAU'"> > </button>
```

## Membuat Button
``` js
<button class="bg-pink-300 rounded-3xl py-3 px-8
        font-medium inline-block mr-4 
        hover:bg-transparent hover:border-pink-300
        hover:text-white duration-300 hover:border
        border border-transparent" onclick="document.getElementById('gambar').src='https://www.beautyhaul.com/assets/uploads/Manfaat_menggunakan_skincare.jpg'"> </button>
        <button class="bg-pink-300 rounded-3xl py-3 px-8
        font-medium inline-block mr-4
        hover:bg-transparent hover:border-pink-300
        hover:text-white duration-300 hover:border
        border border-transparent" onclick="document.getElementById('gambar').src='https'//encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwP2C2dduWnnbQTz7EcaWy5qt592u3axoDRg&usqp=CAU'"> > </button> 
```

## Membuat Syntax & Statement
``` js
<script>
        let x, y, z;
        x = 10;
        y = 30;
        z = x + y;
        document. getElementById("demo").innerHTML="Dapatkan diskon hanya hari ini " + x +" + " + y + " = " + z + "<b>%</b>" + ".";
      </script>
```

## Membuat Text Change
``` js
<p id="beli">
         skincare perawatan kulit yang bertujuan untuk menjaga, <br>memperbaiki, dan meningkatkan kesehatan serta penampilan kulit. <br>melibatkan penggunaan berbagai produk dan metode,seperti pembersih, pelembab, serum, dan perawatan lainnya<br> tujuaannya adalah untuk mencapai kulit yang sehat, bersinar, dan bebas dari masalah kulit.
</p>
<div class="mt-10">
          <a href="#" class="bg-pink-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent"
          type="button" onclick="document.getElementById('beli').innerHTML='<b>Total Paket Skincare Starter Kit Sekarang Hanya Rp.499.000!</b>'">
            Beli Sekarang!</a>

          <a href="#" class="bg-pink-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent"
          type="button" onclick="document.getElementById('beli').innerHTML='<b>Dapatkan Total Diskon Hingga 70%</b>'">
            Total Diskon!</a>
        </div>
```
