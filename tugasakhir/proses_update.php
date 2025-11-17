<?php
include 'Koneksi.php';

$id=$_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$release_date = $_POST['release_date'];
$creator = $_POST['creator'];
$colaborator= $_POST['colaborator'];
$duration= $_POST['duration'];

mysqli_query($koneksi, "UPDATE data SET title='$title', description='$description', release_date='$release_date', creator='$creator', colaborator='$colaborator', duration='$duration' WHERE id='$id'");

header("Location: tampildata.php");
exit();
?>