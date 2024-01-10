<?php 
    include 'config.php';
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM pendaftaran WHERE id = '$id'");

    header("Location: list-maba.php");
?>