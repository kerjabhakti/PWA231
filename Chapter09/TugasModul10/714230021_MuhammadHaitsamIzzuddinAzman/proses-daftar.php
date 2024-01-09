<?php include ("config.php"); 
if (isset($_POST['daftar'])){
    // Ambil Data Formulir
    $nama= $_POST['nama'];
    $alamat= $_POST['alamat'];
    $jk= $_POST['jenis_kelamin'];
    $agama= $_POST['agama'];
    $sekolah= $_POST['sekolah_asal'];
    //Query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
    if ($query){
        header('Location: index.php?status=sukses');
        exit();
    } else{
        header('Location: index.php?status=gagal');
        exit();
    }
} else {
    die("Akses Dilarang...!!!");
}
?>