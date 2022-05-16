<?php
    require "includes/header.php";

    $id_kategori = $_GET['id_kategori'];

    $query = mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = '$id_kategori'");

    if($query)  
    {
        echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/kategori.php'>";
    }
?>