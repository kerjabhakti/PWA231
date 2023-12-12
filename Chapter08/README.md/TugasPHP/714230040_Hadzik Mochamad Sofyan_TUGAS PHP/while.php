<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>While</h2>
    <p>data mahasiswa kelas 1A TI data ditampilkan menggunakan perulangan while</p>
    <?php
        $data_kelas_1A = [
            "Resqi Gita Aulia",
            "Reva Andini Busra",
            "Muhammad Nizar Akmal",
            "Marselinus Naisau",
            "Muflih Afif Mukhtalif",
            "Dilla Yusira Putri",
            "Efendi Sugiantoro",
            "Hadi Muhammad Yusuf",
            "Muhammad Haitsam Izzuddin Azman",
            "Nurfanis Rosman",
            "Ananda Raka Aditya Wilangga",
            "Rifky Najra Adipura",
            "Afifah Naufal Rahmani",
            "Nesya Salma Ramadhani",
            "Rendy Kamaluddin",
            "Hafizh Fakhri Muharram",
            "Ode Andi Alamsyah",
            "Ahmad Karta Nugraha",
            "Indah Diva Gracia",
            "Hadzik Mochamad Sofyan",
            "Muhamad Adi Apriansyah",
            "Savana Zahra Humaira",
            "Miqdam Syiam Nurrohman"
        ];

        $i = 0;
        while($i < count($data_kelas_1A)){
            echo $data_kelas_1A[$i]. "<br>";
            $i++;
        }
    ?>
</body>
</html>