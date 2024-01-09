<?php 
include("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];  
    $sql = "DELETE FROM pendaftaran WHERE id ='$id'";
    $query = mysqli_query($db,$sql);

    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        echo "Gagal melakukan penghapusan data.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>