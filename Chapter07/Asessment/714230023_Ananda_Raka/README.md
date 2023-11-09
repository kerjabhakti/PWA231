# web Rental Mobil
![image](https://github.com/Rakawilangga30/ass_AnandaRaka/assets/147012416/bd8873d4-3e82-4b8f-9a34-318a3aff540f)

# untuk java script terdapat pada change image dan paragraf image
``` js
<div><body class="bg-gray-100 ">
    <div class="container mx-auto p-4 mt-4">
      
        <div class="text-white bg-opacity-70 bg-white p-4 rounded shadow-md text-center">
            <h2 class="text-2xl text-black font-semibold mb-4">Cabang</h2>


            <div class="relative overflow-hidden mb-4">
                <img id="image" src="/rental/images/rental.png" alt="Current Image" class="w-full h-64 object-cover rounded ">
            </div>

         
            <div>
                <h3 class="text-xl font-semibold mb-2 text-black">Temukan cabang terdekat</h3>
                <p class="text-gray-700">Ayo cari cabang yang ada di sekitar daerah mu,dengan harga rental yang murah</p>
            </div>

            <button id="changeImage" class="bg-blue-500 px-4 py-2 rounded mt-4">lihat lainya</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageElement = document.getElementById('image');
            const changeImageButton = document.getElementById('changeImage');

            const imageOptions = [
                "/rental/images/cabang1.jpg",
                "/rental/images/cabang 2.jpg",
                "/rental/images/cabang3.jpg",
            ];


            const imageDetails = [
                { title: "Pahala rental mobil bandung", description: "Jl. Setrasari I No.16, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152" },
                { title: "Rental mobil bandung ajushino", description: "Dekat, Isola, Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40152" },
                { title: "Abigail Rental Mobil Bandung", description: "Jl. Terusan Gegerkalong Hilir No.8, Sariwangi, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559" },
            ];

            let currentIndex = 0;

            function changeImage() {
                currentIndex = (currentIndex + 1) % imageOptions.length;
                imageElement.src = imageOptions[currentIndex];

                document.querySelector('h3').textContent = imageDetails[currentIndex].title;
                document.querySelector('p').textContent = imageDetails[currentIndex].description;
            }


            changeImageButton.addEventListener('click', changeImage);
        });
    </script>
    </div>
```
# begini hasilnya
![image](https://github.com/Rakawilangga30/ass_AnandaRaka/assets/147012416/caf1f554-e070-4373-b224-518d79b2e189)

# lalu di bagian kiri ada 3 card yang berisi nama,gambar,button untuk menuju halama pengisian formulir

```
    <div class="container mx-auto p-4 mt-4">
 
        <h2 class="text-3xl text-green-900 font-bold mb-4">Ayo Rental mobil untuk memudahkan anda bepergian</h2>
        <div class="container mx-auto p-4 mt-4 flex justify-around">
            <body class="bg-gray-100">
   <div class="">             
    <div class="container mx-auto p-4 mt-4">
        <div class="w-64 h-64 bg-opacity-70 bg-white p-4 rounded shadow-md flex flex-col items-center">
            <h2 class="text-xl font-semibold mb-2">Daihatsu XENIA R DELUXE A/T 2019</h2>
            <img src="/rental/images/xenia.jpg" alt="Gambar Card 1" class="object-cover rounded mb-2 bg-fixed">
            <a href="isi.html" class="bg-blue-500 text-white px-4 py-2 rounded">Rental</a>
        </div>

        <div class="w-64 h-64 bg-opacity-70 bg-white p-4 rounded shadow-md flex flex-col items-center">
            <h2 class="text-xl font-semibold mb-2"> Toyota AVANZA G M/T 2018.</h2>
            <img src="/rental/images/avanza.png" alt="Gambar Card 2" class="object-cover rounded mb-2">
            <a href="isi.html" class="bg-blue-500 text-white px-4 py-2 rounded">Rental</a>
        </div>

        <div class="w-64 h-64 bg-opacity-70 bg-white p-4 rounded shadow-md flex flex-col items-center">
            <h2 class="text-xl font-semibold mb-2">Daihatsu XENIA R DELUXE M/T 2019 </h2>
            <img src="/rental/images/honda.jpg" alt="Gambar Card 3" class="object-cover rounded mb-2">
            <a href="isi.html" class="bg-blue-500 text-white px-4 py-2 rounded">Rental</a>
        </div>
    </div>
</div>
```
# ini tampilanya
![image](https://github.com/Rakawilangga30/ass_AnandaRaka/assets/147012416/1c02cc12-ea9a-4109-b001-b5f679b909ab)

# lalu jika menekan tolbol rental maka akan berpindah pada html pengisian formulir
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head Bar dengan Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-cover bg-center bg-fixed h-screen" style="background-image: url(/rental/images/bgmobil.jpg);">
    <header class="bg-gradient-to-r from-green-900 to-indigo p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">Rental Mobil</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.html" class="text-black font-semibold hover:text-green-900">Beranda</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4 mt-4">

            <div class="bg-white bg-opacity-70 p-4 rounded shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Isi Formulir untuk melakukan Rental</h2>
    
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Alamat Email Anda">
                </div>
    

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Nomor Telepon Anda">
                </div>
    
   
                <div>
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat Rumah:</label>
                    <textarea id="address" name="address" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Alamat Rumah Anda"></textarea>
                </div>
    
                <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Kirim Pesan</button>
            </div>
        </div>        
</body>
</html>
```
# ini tampilanya

![image](https://github.com/Rakawilangga30/ass_AnandaRaka/assets/147012416/118f4d9d-0aac-4dc3-bfa0-f6b07e135fe7)

sekian terimakasih 

