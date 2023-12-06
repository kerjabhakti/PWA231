Disini saya membuat website Profile mengenai "Sanggar Tari Langgeng Sari" ditambahkan dengan salah satu penari terbaik di Indonesia yaitu "Sandrina Azzahra" dengan menggunakan HTML, CSS, Tailwind, dan Java Script.
Mohon dimaklumi jika kesan codingannya berantakan.

# CI/CD 
https://dillayusira.github.io/assdillaysr/ 

# 1. HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kesenian Tari</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('image/tradisibg.jpg');">
  <header>
    <nav>
      <div class="logo">Langgeng Sari</div>
      <ul class="nav-links">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Jadwal</a></li>
        <li><a href="#">Tradisional</a></li>
        <li><a href="#">Modern</a></li>
      </ul>
    </nav>  
  </header>

  ## 2. CSS (Ada pada File yang berbeda)
  
  body {
    margin: 0;
    font-family: 'Arial', sans-serif;
  }
  
  header {
    background-color: transparent;
    padding: 10px 20px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
  }
  
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 960px;
    margin: 0 auto;
  }
  
  .logo {
    color: red;
    font-size: 1.5rem;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
  }
  
### 3. Tailwind

 <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">SANGGAR TARI LANGGENG SARI</h2>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Tradisional dan Modern Dance</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Sudah menjadi Sanggar Tari terbesar di Indonesia dan sudah mempunyai cabang di berbagai penjuru seluruh Indonesia. Sanggar kami menjadi kepercayaan banyak orang untuk melatih sang buah hati menjadi anggun. Berdiri sejak tahun 2004 sudah melahirkan banyak penari berbakat salah satunya adalah Sandrina Azzahra</p>
      </div>
      <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-12">
            <div class="p-12 md:w-1/2 flex flex-col items-start">
              <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Tari Tradisional</h2>
              <p class="leading-relaxed mb-8">Tari Tradisional merupakan tarian yang dilestarikan dan berkembang di daerah tertentu yang memiliki keunikan tersendiri sesuai dengan ciri kebudayaan pada daerah tersebut. Biasanya tari tradisional sangat rumit, mengandung filosofis, simbolis dan religius yang sangat kental sehingga tak banyak orang yang dapat memahaminnya. Ragam gerak tari tradisional, busana, formasi, hingga tata riasnya memiliki pakem atau aturan tertentu dan tidak banyak yang berubah.</p>
            </div>

#### 4. JavaScript

<script>
     function handleClick() {
        var button = document.getElementById('myButton');
        button.innerHTML = 'Tombol Diklik!';
        button.classList.remove('bg-blue-500');
        button.classList.add('bg-green-500');
    }
</script>