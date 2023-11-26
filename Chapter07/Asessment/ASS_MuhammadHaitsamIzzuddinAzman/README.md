# Assesment Muhammad Haitsam Izzuddin Azman

## CI/CD Pages
https://sam9100.github.io/ass_MuhammadHaitsamIzzuddinAzman/

### Codingan Index
``` js
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Siswa D4 Teknik Informatika</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body style="background-image: url(images/background\ presensi.jpg);" class="bg-cover bg-center bg-fixed min-h-screen">
    <div class="navbar">
        <h1 class="text-2xl text-left p-1 font-semibold ">PRESENSI SISWA D4 TEKNIK INFORMATIKA</h1>
    </div>
    <div class="login-container">
        <label for="username">Username/NPM:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="button" onclick="validateLogin()">Login</button>
    </div>
    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if (username === 'user' && password === 'user') {
                window.location.href = "presensi.html";
            } else {
                alert('Username/NPM atau Password Salah. Silahkan Coba lagi.');
            }
        }
    </script>
        <footer class="bg-black text-white text-center h-6 font-bold opacity-60">
            <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman</p>
        </footer>
</body>
</html>
```

### CSS nya
``` js
* {
    font-family: 'Courier New', Courier, monospace;
}
body {
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.navbar {
    background-color: #333;
    padding: 15px;
    text-align: center;
    color: white;
}

.login-container {
    max-width: 400px;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-container label {
    display: block;
    margin-bottom: 8px;
}

.login-container input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

.login-container button {
    background-color: #333;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Biar Footer Nempel Di Bawah */
body{ min-height:100vh; margin:0; position:relative; }
header{ min-height:50px; background:lightcyan; }
footer{ background:PapayaWhip; }

/* Trick nya */
body {
    position: relative;
}

body::after {
    content: '';
    display: block;
    height: 50px;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
}
```

### Hasilnya
<img width="960" alt="image" src="https://github.com/Sam9100/ass_MuhammadHaitsamIzzuddinAzman/assets/147012328/13259a31-1962-4e26-a0d3-637083c095f1">

### Codingan Presensi
```js
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Siswa D4 Teknik Informatika Kelas 1A</title>
    <link rel="stylesheet" href="presensi.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url(images/background\ presensi.jpg);" class="bg-cover bg-center bg-fixed">
    <header class="bg-black p-5 opacity-60 text-white">
        <nav class="flex">
            <div class="container flex justify-between">
                <h1 class="text-2xl font-semibold ">PRESENSI SISWA D4 TEKNIK INFORMATIKA KELAS 1A</h1>
                <ul>
                <button><a href="index.html" class="font-semibold text-white">Log Out</a></button>
                </ul> 
            </div>
        </nav>
    </header>
    <table id="tabelPresensi" class="font-semibold text-lg">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Hadir</th>
                <th>Alpa</th>
                <th>Izin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Resqi Aulia Gita Utami</td>
                <td>714230003</td>
                <td><button onclick="setHadir(1)">Hadir</button></td>
                <td><button onclick="setAlpa(1)">Alpa</button></td>
                <td><button onclick="setIzin(1)">Izin</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Reva Andini Busra</td>
                <td>714230005</td>
                <td><button onclick="setHadir(2)">Hadir</button></td>
                <td><button onclick="setAlpa(2)">Alpa</button></td>
                <td><button onclick="setIzin(2)">Izin</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Muhammad Nizar Akmal</td>
                <td>714230007</td>
                <td><button onclick="setHadir(3)">Hadir</button></td>
                <td><button onclick="setAlpa(3)">Alpa</button></td>
                <td><button onclick="setIzin(3)">Izin</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Marselinus Naisau</td>
                <td>714230011</td>
                <td><button onclick="setHadir(4)">Hadir</button></td>
                <td><button onclick="setAlpa(4)">Alpa</button></td>
                <td><button onclick="setIzin(4)">Izin</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Muflih Afif Mukhtalif</td>
                <td>714230012</td>
                <td><button onclick="setHadir(5)">Hadir</button></td>
                <td><button onclick="setAlpa(5)">Alpa</button></td>
                <td><button onclick="setIzin(5)">Izin</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Dilla Yusira Putri</td>
                <td>714230015</td>
                <td><button onclick="setHadir(6)">Hadir</button></td>
                <td><button onclick="setAlpa(6)">Alpa</button></td>
                <td><button onclick="setIzin(6)">Izin</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Efendi Sugiantoro</td>
                <td>714230018</td>
                <td><button onclick="setHadir(7)">Hadir</button></td>
                <td><button onclick="setAlpa(7)">Alpa</button></td>
                <td><button onclick="setIzin(7)">Izin</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Hadi Muhammad Yusuf</td>
                <td>714230019</td>
                <td><button onclick="setHadir(8)">Hadir</button></td>
                <td><button onclick="setAlpa(8)">Alpa</button></td>
                <td><button onclick="setIzin(8)">Izin</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Muhammad Haitsam Izzuddin Azman</td>
                <td>714230021</td>
                <td><button onclick="setHadir(9)">Hadir</button></td>
                <td><button onclick="setAlpa(9)">Alpa</button></td>
                <td><button onclick="setIzin(9)">Izin</button></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Nurfanis Rosman</td>
                <td>714230022</td>
                <td><button onclick="setHadir(10)">Hadir</button></td>
                <td><button onclick="setAlpa(10)">Alpa</button></td>
                <td><button onclick="setIzin(10)">Izin</button></td>
            </tr>
            <tr>
                <td>11</td>
                <td>Ananda Raka Aditya Wilangga</td>
                <td>714230023</td>
                <td><button onclick="setHadir(11)">Hadir</button></td>
                <td><button onclick="setAlpa(11)">Alpa</button></td>
                <td><button onclick="setIzin(11)">Izin</button></td>
            </tr>
            <tr>
                <td>12</td>
                <td>Rifky Najra Adipura</td>
                <td>714230025</td>
                <td><button onclick="setHadir(12)">Hadir</button></td>
                <td><button onclick="setAlpa(12)">Alpa</button></td>
                <td><button onclick="setIzin(12)">Izin</button></td>
            </tr>
            <tr>
                <td>13</td>
                <td>Afifah Naufal Rahmani</td>
                <td>714230026</td>
                <td><button onclick="setHadir(13)">Hadir</button></td>
                <td><button onclick="setAlpa(13)">Alpa</button></td>
                <td><button onclick="setIzin(13)">Izin</button></td>
            </tr>
            <tr>
                <td>14</td>
                <td>Rendy Kamaluddin</td>
                <td>714230030</td>
                <td><button onclick="setHadir(14)">Hadir</button></td>
                <td><button onclick="setAlpa(14)">Alpa</button></td>
                <td><button onclick="setIzin(14)">Izin</button></td>
            </tr>
            <tr>
                <td>15</td>
                <td>Hafizh Fakhri Muharram</td>
                <td>714230031</td>
                <td><button onclick="setHadir(15)">Hadir</button></td>
                <td><button onclick="setAlpa(15)">Alpa</button></td>
                <td><button onclick="setIzin(15)">Izin</button></td>
            </tr>
            <tr>
                <td>16</td>
                <td>Ode Andi Alamsyah</td>
                <td>714230032</td>
                <td><button onclick="setHadir(16)">Hadir</button></td>
                <td><button onclick="setAlpa(16)">Alpa</button></td>
                <td><button onclick="setIzin(16)">Izin</button></td>
            </tr>
            <tr>
                <td>17</td>
                <td>Ahmad Karta Nugraha</td>
                <td>714230035</td>
                <td><button onclick="setHadir(17)">Hadir</button></td>
                <td><button onclick="setAlpa(17)">Alpa</button></td>
                <td><button onclick="setIzin(17)">Izin</button></td>
            </tr>
            <tr>
                <td>18</td>
                <td>Indah Diva Gracia</td>
                <td>714230039</td>
                <td><button onclick="setHadir(18)">Hadir</button></td>
                <td><button onclick="setAlpa(18)">Alpa</button></td>
                <td><button onclick="setIzin(18)">Izin</button></td>
            </tr>
            <tr>
                <td>19</td>
                <td>Hadzik Mochamad Sofyan</td>
                <td>714230040</td>
                <td><button onclick="setHadir(19)">Hadir</button></td>
                <td><button onclick="setAlpa(19)">Alpa</button></td>
                <td><button onclick="setIzin(19)">Izin</button></td>
            </tr>
            <tr>
                <td>20</td>
                <td>Muhamad Adi Apriansyah</td>
                <td>714230041</td>
                <td><button onclick="setHadir(20)">Hadir</button></td>
                <td><button onclick="setAlpa(20)">Alpa</button></td>
                <td><button onclick="setIzin(20)">Izin</button></td>
            </tr>
            <tr>
                <td>21</td>
                <td>Savana Zahra Humaira</td>
                <td>714230042</td>
                <td><button onclick="setHadir(21)">Hadir</button></td>
                <td><button onclick="setAlpa(21)">Alpa</button></td>
                <td><button onclick="setIzin(21)">Izin</button></td>
            </tr>
            <tr>
                <td>22</td>
                <td>Miqdam Syiam Nurrohman</td>
                <td>714230043</td>
                <td><button onclick="setHadir(22)">Hadir</button></td>
                <td><button onclick="setAlpa(22)">Alpa</button></td>
                <td><button onclick="setIzin(22)">Izin</button></td>
            </tr>
        </tbody>     
    </table>
    <script>
        function setHadir(row) {
            var table = document.getElementById('tabelPresensi');
            var rowElement = table.rows[row];
            rowElement.classList.remove('alpa');
            rowElement.classList.remove('izin');
            rowElement.classList.add('hadir');
        }
        function setAlpa(row) {
            var table = document.getElementById('tabelPresensi');
            var rowElement = table.rows[row];
            rowElement.classList.remove('hadir');
            rowElement.classList.remove('izin');
            rowElement.classList.add('alpa');
        }
        function setIzin(row) {
            var table = document.getElementById('tabelPresensi');
            var rowElement = table.rows[row];
            rowElement.classList.remove('hadir');
            rowElement.classList.remove('alpa');
            rowElement.classList.add('izin');
        }
    </script>
    <footer class="bg-black text-white text-center h-6 font-bold opacity-60">
        <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman</p>
    </footer>
</body>
</html>
```
### CSS nya
``` js
* {
    font-family: Arial, Helvetica, sans-serif;
}
body, h1, h2, p, table {
    margin: 0;
    padding: 0;
}
h1 {
    text-align: center;
    margin: 20px 0;
}
#tabelPresensi {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}
#tabelPresensi th, #tabelPresensi td {
    border: 1px solid white;
    padding: 8px;
    text-align: left;
}
#tabelPresensi th {
    background-color: white;
}
.hadir {
    background-color: #c3e6cb; 
}
.alpa {
    background-color: #f8d7da;
}
.izin {
    background-color: #fef9c3
}   
```

### Hasilnya
<img width="946" alt="image" src="https://github.com/Sam9100/ass_MuhammadHaitsamIzzuddinAzman/assets/147012328/6d66a531-9932-46af-b8ce-a71d374dcab0">
<img width="948" alt="image" src="https://github.com/Sam9100/ass_MuhammadHaitsamIzzuddinAzman/assets/147012328/ca9c5786-4fe9-4e9e-be10-4698beee3471">

