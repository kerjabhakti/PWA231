<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id_to_delete = $_GET["id"];

    // Hapus record dari database
    $sql = "DELETE FROM pendaftaran WHERE id = $id_to_delete";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($db);
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>
