# Website Jadwal Kuliah
## Tampilan awal memasukan pin
``` js
<body style="background-image: url(gambarjadwal/ulbi5.jpg);" class="bg-cover bg-center bg-fixed">
<div class="mx-auto mt-8 p-4">
    <div class="max-w-md mx-auto bg-opacity-50 bg-blue-300 p-4 mt-24 rounded-lg shadow-md">
        <h1 class="text-2xl text-white font-semibold mb-4">Masukan Jurusan Anda</h1>
        <div class="mb-4">
            <label for="pin" class="block text-white mb-2">ex: informatika</label>
            <input type="password" id="pin" class="w-full border border-gray-300 p-2">
        </div>
        <div class="mb-4 pl-40">
            <button id="verify" class="bg-blue-500 text-white py-2 px-4 rounded">Verifikasi</button>
        </div>
    </div>

    <div><h2 class="text-center font-semibold text-2xl text-white"></h2></div>

    <script>document.getElementById("verify").addEventListener("click", function() {
        const enteredPin = document.getElementById("pin").value;
        const correctPin = "informatika";

        if (enteredPin === correctPin) {
            window.location.href = "jadwalkuliah.html";
        } else {
            alert("PIN yang Anda masukkan salah. Coba lagi.");
        }
    });</script>    

</body>
```
### Hasilnya
![image](https://github.com/rendykml/ass_rendykamaluddin/assets/147012406/9c38b72b-a486-47ce-ac3a-8441d430a486)
## Tampilan ke 2 halaman beranda
``` js
<body style="background-image: url(gambarjadwal/ulbi5.jpg);" class="bg-cover bg-center bg-fixed">
    <header class="bg-black opacity-75 p-6">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between">
                <h1 class="font-bold text-2xl text-orange-600 hover:transition-transt">Universitas Logistik dan Bisnis Internasional</h1>
                <ul class="flex space-x-4">
                    <button><a href="pin.html" class="bg-orange-600 text-white py-2 px-4 rounded hover:bg-blue-600" >Logout</a></button>
                   
                </ul>
            </nav>
        </div>
    </header>
        <div class=" mt-7 px-5 py-5 mx-5 bg-white opacity-80 rounded shadow-md">
            <h1 class="text-3xl font-bold mb-6">Selamat Datang di Portal Jadwal Kuliah</h1>
            <p class="text-lg mb-4">Di sini, Anda dapat melihat jadwal kuliah Anda dengan mudah dan cepat.</p>
            <a href="jadwal.html" class="bg-blue-600 text-white py-2 px-4 rounded inline-block">Lihat Jadwal Kuliah</a>
        </div>
        <main class="mb-5 mt-5 " >
            <div class="max-w-md mx-auto opacity-90 rounded b shadow-md py-10 bg-white">
                <h1 class="text-2xl font-semibold mb-4 flex justify-center text-black underline">Gedung Ulbi</h1>
                <img id="image" src="gambarjadwal/ulbi1.jpg" class="mb-4 rounded-lg items-center justify-center ml-20">
                <div class="container flex justify-center">
                    <div class="justify-center">
                        
                        <button id="changeImage" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">>>></button>
                        <div>
                        
                    </div>
                </div>
            </div>
        
            <script>
        
                const image = document.getElementById('image');
                const changeImageButton = document.getElementById('changeImage');
                const images = [
                    'gambarjadwal/ulbi1.jpg',
                    'gambarjadwal/ulbi2.jpg',
                    'gambarjadwal/ulbi3.jpg',
                   
                ];
                let currentImageIndex = 0;
        
                changeImageButton.addEventListener('click', () => {
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    image.src = images[currentImageIndex];
                });
            </script>
            </main>
            <main class="bg-black opacity-75 container mx-auto mt-8 p-4">
        
                <div class="">
                    <!-- Ulbi -->
                    <div class="">
                        <a href="https://discord.com/invite/gamingzone" target="_blank" rel="noopener noreferrer">
                            <img src="gambarjadwal/ulbi4.jpg" alt="Discord" class="w-32 h-12 mx-auto mb-4">
                        </a>
                    </div>
                    
                    
                </div>
               
            </main>
            </div>
        
        <footer class="bg-gray-800 text-white p-4">
            <div class="container mx-auto text-center">
                <p>&copy; Jadwal Perkuliahan ULBI.</p>
            </div>
        </footer>
    
</body>
```
### hasilnya
![image](https://github.com/rendykml/ass_rendykamaluddin/assets/147012406/493a6b1b-0779-4878-b417-4946a05b970d)

## Tampilan terakhir
``` js
<body style="background-image: url(gambarjadwal/ulbi5.jpg);" class="bg-cover bg-center bg-fixed">
  <header class="bg-black opacity-75 p-6">
    <div class="container mx-auto">
        <nav class="flex items-center justify-between">
            <h1 class="font-bold text-2xl text-orange-600 hover:transition-transt">Universitas Logistik dan Bisnis Internasional</h1>
            <ul class="flex space-x-4">
                <button><a href="Jadwalkuliah.html" class="bg-orange-600 text-white py-2 px-4 rounded hover:bg-blue-600" >Kembali</a></button>
               
            </ul>
        </nav>
    </div>
</header>
  
    <div class="max-w-2xl mx-auto bg-black text-white opacity-80 rounded p-8 shadow-md mt-10">
      <h1 class="text-3xl font-bold mb-6 text-center">Jadwal Kuliah</h1>
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="border px-4 py-2">Hari</th>
            <th class="border px-4 py-2">Mata Kuliah</th>
            <th class="border px-4 py-2">Jam</th>
        
          </tr>
        </thead>
        <tbody>
          <!-- Contoh data jadwal kuliah -->
          <tr>
            <td class="border px-4 py-2 underline">Senin</td>
            <td class="border px-4 py-2 underline">Bahasa Inggris</td>
            <td class="border px-4 py-2">08:40 - 11:20</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Senin</td>
            <td class="border px-4 py-2 underline">Literasi Komputer</td>
            <td class="border px-4 py-2"> 13:00 - 16:00</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Selasa</td>
            <td class="border px-4 py-2 underline">Bahasa Indonesia</td>
            <td class="border px-4 py-2">08:40 - 11:20</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Selasa</td>
            <td class="border px-4 py-2 underline">Matematika Diskrit</td>
            <td class="border px-4 py-2">13:00 - 16:00</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Rabu</td>
            <td class="border px-4 py-2 underline">Pendidikan Pancasila</td>
            <td class="border px-4 py-2">08:40 - 10:20</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Kamis</td>
            <td class="border px-4 py-2 underline">Pemograman 1</td>
            <td class="border px-4 py-2">08:40 - 11:00</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Kamis</td>
            <td class="border px-4 py-2 underline">Algoritma dan Struktur Data</td>
            <td class="border px-4 py-2">13:00 - 16:00</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 underline">Jumat/td>
            <td class="border px-4 py-2 underline">Pendidikan Agama Islam</td>
            <td class="border px-4 py-2">07:50 - 09:30</td>
          </tr>
        </tbody>
      </table>
    </div>
    <main class="bg-black opacity-75 container mx-auto mt-8 p-4">
        
        <div class="">
            <!-- Ulbi -->
            <div class="">
                <a href="https://discord.com/invite/gamingzone" target="_blank" rel="noopener noreferrer">
                    <img src="gambarjadwal/ulbi4.jpg" alt="Discord" class="w-32 h-12 mx-auto mb-4">
                </a>
            </div>
            
            
        </div>
    </main>
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            <p>&copy; Jadwal Perkuliahan ULBI.</p>
        </div>
    </footer>
  </body>
```
### Hasilnhya
![image](https://github.com/rendykml/ass_rendykamaluddin/assets/147012406/c39f0a00-4a60-4182-b857-5778a3120be0)


