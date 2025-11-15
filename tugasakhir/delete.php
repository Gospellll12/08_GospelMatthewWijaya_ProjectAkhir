<?php
include 'Koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data WHERE id='$id'");

header("Location: tampildata.php");
exit();
?>