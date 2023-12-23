<?php
include("config.php");

// Check if the ID parameter is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve data for the selected record
    $sql = "SELECT * FROM pendaftaran WHERE id = $id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $maba = mysqli_fetch_assoc($query);
    } else {
        echo "Error: " . mysqli_error($db);
        exit();
    }
} else {
    echo "ID parameter is missing.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa | POLTEKPOS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h3>Edit Data Mahasiswa</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $maba['id']; ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $maba['nama']; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $maba['alamat']; ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $maba['jenis_kelamin']; ?>" required>

        <label for="agama">Agama:</label>
        <input type="text" id="agama" name="agama" value="<?php echo $maba['agama']; ?>" required>

        <label for="sekolah_asal">Sekolah Asal:</label>
        <input type="text" id="sekolah_asal" name="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>" required>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>
