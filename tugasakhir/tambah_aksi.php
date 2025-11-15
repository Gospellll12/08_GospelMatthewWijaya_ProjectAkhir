<?php

    include 'koneksi.php'; 

    $id   = $_POST['id'];
    $title  = $_POST['title'];
    $description   = $_POST["description"];
    $release_date= $_POST["release_date"];
    $creator = $_POST['creator'];
    $colaborator   = $_POST["colaborator"];
    $duration= $_POST["duration"];

    mysqli_query($koneksi, "INSERT INTO data(id, title, description, release_date, creator, colaborator, duration) VALUES ('$id', '$title', '$description', '$release_date', '$creator', '$colaborator','$duration')");

    header("Location:tampil_data.php");
    exit();
?>