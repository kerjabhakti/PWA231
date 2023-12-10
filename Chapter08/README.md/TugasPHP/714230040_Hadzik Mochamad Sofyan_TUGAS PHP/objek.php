<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Memunculkan property pada objek</h2>
    <?php
        class Mahasiswa {
            public $nama,
                   $prodi = "D4 Teknik Informatika",
                   $npm;
                   
            function setNama($nama){
                $this->nama = $nama;
            }

            function getNama(){
                return $this->nama;
            }
        }

        $mahasiswa1 = new Mahasiswa();
        $mahasiswa1->setNama("Hadzik Mochamad Sofyan");
        echo $mahasiswa1->getNama(). "<br>";
        echo $mahasiswa1->prodi. "<br>";
        $mahasiswa1->setNama("Fiko Abdigusti"). "<br>";
        echo "<br>";
        echo $mahasiswa1->getNama(). "<br>";
        echo $mahasiswa1->prodi;
    ?>
</body>
</html>