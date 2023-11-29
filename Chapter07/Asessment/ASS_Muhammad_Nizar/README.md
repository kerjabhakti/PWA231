# Asesmen 1 Muhammad Nizar Akmal

## Studi Kasus
Rental Mobil

# Bahasa yang digunakan
1. HTML sebagai index
2. CSS (bentuk external untuk mengubah font h2)

body {
    font-family: Arial, Helvetica, sans-serif;
}
    .container img {
        transition: transform 0.2s;
    }

    .container img:hover {
        transform: scale(0.8);
    }
h2 {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/b0f5bff5-0c15-431b-a23d-48310d54053f)

3. CSS Tailwind (sebagai style internal html bagian nav, img, hover img)

4. nav bar(gradient, font sebelah kiri dan kanan)

<nav class="flex items-center bg-gradient-to-r from-purple-700 to-blue-700">
        <h2 class="text-blue-400 cursor-pointer pl-5 text-2xl">Dream <span class="text-purple-400">Garage</span></h2>
        <a href="gambar/logonav.png"><img src="gambar/logonav.png" alt="" class="transition ease-in-out delay-80 ml-5 hover:opacity-20"></a>
            <ul class="flex-1 text-right mt-5 mr-20 mb-5">
                <li class="list-none inline-block px-5"><a href="#" class="transition ease-in-out delay-80 no-underline text-purple-400 hover:text-purple-600">Home</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="transition ease-in-out delay-80 no-underline text-purple-400 hover:text-purple-600">Kategori</a></li>
            </ul>
    </nav>

![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/94e09707-1d93-480b-87c4-bef78f522876)

5. img dan hovernya
 <section class="container mx-auto mt-8 p-4">
        <h2 class="text-2xl font-semibold mb-4">Yang sedang ramai</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg p-4 shadow-md">
                <a href="https://www.olx.co.id/item/vw-volkswagen-scirocco-14-tsi-r-line-coupe-facelift-at-20182019-iid-901364955" target="_blank" link="rel"><img src="https://img.okezone.com/content/2016/10/11/15/1511828/150-unit-edisi-terakhir-vw-scirocco-meluncur-bulan-depan-TF66su1FVA.jpg" alt="VW scirocco" class="w-full h-48 object-cover mb-4 rounded-lg hover:opacity-70 transition ease-in-out delay-80"></a>
                <h3 class="text-lg text-gray-700 font-semibold">Volkswagen Scirocco</h3>
                <p id="parag" class="text-green-700"></p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md mt-10">
                <a href="https://www.oto.com/mobil-baru/honda/civic-type-r" target="_blank" link="rel"><img src="https://imgcdn.oto.com/large/gallery/exterior/14/524/honda-civic-type-r-front-angle-low-view-881050.jpg" alt="civic-type-r" class="w-full h-48 object-cover mb-4 rounded-lg hover:opacity-70 transition ease-in-out delay-80"></a>
                <h3 class="text-lg text-gray-700 font-semibold">Civic Type-R</h3>
                <p id="parag1" class="text-red-700"></p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md">
                <a href="https://www.oto.com/mobil-baru/mercedes-benz/g-class" target="_blank" link="rel"><img src="https://imgcdn.oto.com/large/gallery/exterior/25/211/mercedes-benz-g-class-front-angle-low-view-672434.jpg" alt="Mercedez G-Class" class="w-full h-48 object-cover mb-4 rounded-lg hover:opacity-70 transition ease-in-out delay-80"></a>
                <h3 class="text-lg text-gray-700 font-semibold">Mercedez G-Class</h3>
                <p id="parag2" class="text-red-700"></p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md mt-10">
                <a href="https://www.oto.com/mobil-baru/subaru/wrx" target="_blank" link="rel"><img src="https://imgcdn.oto.com/large/gallery/exterior/36/318/subaru-wrx-front-angle-low-view-802046.jpg" alt="subaru wrx" class="w-full h-48 object-cover mb-4 rounded-lg hover:opacity-70 transition ease-in-out delay-80"></a>
                <h3 class="text-lg text-gray-700 font-semibold">Subaru WRX</h3>
                <p id="parag3" class="text-green-700"></p>
            </div>
        </div>       

 ![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/db4c3181-44b7-4d77-86dc-136e9f4ab0d9)

 ![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/ccb09a0a-42e3-4510-b28b-bc7d4265ba7f)

6. background body(BMW M3), background div(warna hitam)
<div class="min-h-screen bg-[url('https://imgcdn.oto.com/large/gallery/exterior/3/42/bmw-m3-sedan-front-angle-low-view-563796.jpg')] bg-center bg-cover px-28 py-5 relative">
        <div class="text-white mt-20 bg-black bg-opacity-50 rounded-xl pl-5">
            <h1 class="text-6xl font-semibold leading-normal">
                Mau rental mobil biar keliatan <span class="italic">hedon</span> ? <br>
                <span class="font-light">Dream garage tempatnya</span>
            </h1>

![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/c5b20628-411a-4863-b0ea-09b78665fa3e)



7. Javascript (untuk menambah button berisi alert, menambah paragraf, statement, if else)
button
<script>
            function refresh() {
                alert("checking status....")
                            var p = document.getElementById('parag');
                            var p1 = document.getElementById('parag1');
                            var p2 = document.getElementById('parag2');
                            var p3 = document.getElementById('parag3');

                            var currentText = p.innerHTML;
                            var newText = "Bisa di rental"
                            var oldText = "Sedang dipakai"

                            if (currentText === newText) {
                                p.innerHTML = 
                                "";
                            } else {
                                p.innerHTML = newText
                            }

                            if (currentText === oldText) {
                                p1.innerHTML = 
                                "";
                            } else {
                                p1.innerHTML = oldText
                            }
                            
                            if (currentText === newText) {
                                p3.innerHTML = 
                                "";
                            } else {
                                p3.innerHTML = newText
                            }

                            if (currentText === oldText) {
                                p2.innerHTML = 
                                "";
                            } else {
                                p2.innerHTML = oldText
                            }
            }
        </script>

![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/b19cfdf4-02ea-42d5-b00f-a9f8a29f6f61)

8. alert
![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/9fe02a85-b56f-4091-ac5b-23a9307d2a94)

![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/0239d692-1c22-420f-b16d-3b65879f9d6f)

9. menambah paragraf (yang awalnya tidak ada text menjadi berisi text)

sebelum
![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/5c7aef4a-7c3b-40d1-89f0-d1fba8f80dfa)

sesudah
![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/ea3f6e7d-fddc-4e31-b349-a17467ee99b4)

10. statement
![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/c3b6b81a-a553-4bfc-ab53-49b69850b434)


11. if else
![image](https://github.com/Zarruu/AssMNizarA/assets/142983519/a43e181a-2862-4324-8494-f9079fedf7a8)

# LINK CI/CD
https://zarruu.github.io/AssMNizarA/





