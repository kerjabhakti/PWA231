saya disini membuat website dengan kasus KURSUS BAHASA.
dengan mengaplikasi kan JavaSricpt,Tailwind,HTML DAN CSS.
maaf jika web saya berantakan atau terlalu sederhana karna saya masih belajar.

# 1. codingan javascript

<script>
        const belajarButton = document.getElementById("belajarButton");
        const hurufHijaiyahSection = document.getElementById("hurufHijaiyah");

        belajarButton.addEventListener("click", function () {
            hurufHijaiyahSection.style.display = "block";
        });

        const tutupButton = document.getElementById("tutupButton");

        tutupButton.addEventListener("click", function () {
            hurufHijaiyahSection.style.display = "none";
        });
    </script>

## 2. codingan tailwind

 <title>kursus bahasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('images/kursus.avif')">
    <nav class="w-full py-3 px-5 bg-black flex justify-between shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">HANGEUL</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white">login</a></li>
                <li><a href="#" class="text-white">daftar</a></li>
                <li><a href="#" class="text-white">contact</a></li>
            </ul>
        </div>
    </nav>

    <div class=" container mt-48">
       <h1 class="text-4xl font-bold">Selamat datang di kursus bahasa Korea</h1>
       <p class="text-xl">Pelajari bahasa dengan mudah dan cepat</p>
        </div>
    </div>

### 3. codingan HTML DAN CSS

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            scroll-behavior: smooth;
        }

        .contrainer{
            min-width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

## Terimakasih
