<?php include("config.php");

if (isset($_GET['id'])) {
    $npm_to_delete = $_GET['id'];

    // query DELETE
    $sql_delete = "DELETE FROM pendaftaran WHERE npm = '$npm_to_delete'";
    $result_delete = mysqli_query($db, $sql_delete);

    if ($result_delete) {
        echo "Data dengan NPM $npm_to_delete berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($db);
    }
} else {
    echo "ID tidak diberikan. Penghapusan data tidak dapat dilakukan.";
}

header("Location: list-maba.php");
exit();
?>