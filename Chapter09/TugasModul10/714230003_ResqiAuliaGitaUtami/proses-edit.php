<?php 
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$asal = $_POST['sekolah_asal'];

// update data ke database
$query = mysqli_query($db,"update pendaftaran set nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$asal' where id='$id'");

if($query){
    header("location:index.php");
} else {
    die('Error');
}

?>
