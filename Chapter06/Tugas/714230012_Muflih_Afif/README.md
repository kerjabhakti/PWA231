#### TUGAS MUFLIH AFIF MUKHTALIF
konteks yang saya tambahakan dalam, untuk materi syntax,button,aritmatika,statment,perubahan gambar, dan teks dengan menekan tombol

## 1.Mengubah Gambar dan teks (menjelaskan mengapa nama chanel itu penting untuk di buat)
``` js
    <div class="mx-auto flex mt-20 py-48">
        <img id="gambar" src="image/zakaruna_icon2.png" alt="" class="ml-16 h-72 w-70">
        <div id="teks-container" class=" border-2 mr-52 bg-gray-600 px-1">
            <p id="teks" class=" mt-14 text-white text-center font-bold text-3xl">
                ZAKARUNA nama yang diambil, dari ide saya.Ide ini muncul pada saat memikirkan, bagaimana orang tertarik dengan nama channel kita.
            </p>
            <div class="flex justify-center">
                <button onclick="gantiElemen()" class="flex text-white">>>>>></button>
            </div>
        </div>
    </div>
    
    <script>
    let gambarIndex = 1; // Indeks gambar saat ini
    const gambarArray = ["image/zakaruna_icon2.png", "image/zakaruna_icon1.png"]; // Daftar gambar yang akan diubah
    let teksIndex = 1; // Indeks teks saat ini
    const teksArray = [('ZAKARUNA nama yang diambil, dari ide saya.Ide ini muncul pada saat memikirkan, bagaimana orang tertarik dengan nama channel kita.'), 
                        "Kesimpulannya Nama channel itu penting bagi kita sebagai pemula untuk dikenal pada khalayak. dan plagiat"]; // Daftar teks yang akan diubah
    
    function gantiElemen() {
        // Ganti gambar
        gambarIndex = (gambarIndex + 1) % gambarArray.length;
        const gambar = document.getElementById("gambar");
        gambar.src = gambarArray[gambarIndex];
    
        // Ganti teks
        teksIndex = (teksIndex + 1) % teksArray.length;
        const teks = document.getElementById("teks");
        teks.textContent = teksArray[teksIndex];
        console.log (gambarIndex)
    }
    </script>
```
# Penjelasan
"Let" merupakan bagian dari statment <br>
dan codingan keseluruhan di atas merupakan bagian dari syntax
## Hasil
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/2546339c-bccf-48e7-8ea7-f9d26fa9732f)
## Hasi Perubahan
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/b85c0e85-629d-4d81-9287-00e0f985e65f)
## Console
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/f4326dc4-d628-48fd-b02a-1c69c395f279)

## 2.Ini Merupakan Aritmatika 
``` js
            <p id="variable" class="text-center font-semibold text-blue-300"></p>
                    <script>
                    x=100;
                    y=71;
                    z=x+y;
                    document.getElementById("variable").innerHTML = "Subscriber =" + z;
                    console.log (variable)
```
## Penjelasan
dinamaakan aritmatika karena ada "+"
## Hasil
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/a6a36ddb-70e2-49a9-b402-63dafb54f5c0)
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/24d42bce-e891-476c-8364-7e738c934424)


## 3. Menambahkan Tombol Alert
``` js
          <div class="flex justify-center">
            <button onclick="showAlert()" class="text-white">Update</button>

            <script>
            function showAlert() 
            {
            alert("Topik Baru akan Segera Datang!");
            }
            </script>
```
## Hasil
![image](https://github.com/MUFLIHAFIF004/PWA231/assets/147011338/34523509-008f-4b8c-a3c3-3dbed59e8975)

Sekian Terimakasih, Mohon Maaf bila masih ada kekurangan
