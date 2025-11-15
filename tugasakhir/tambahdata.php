<?php
include 'koneksi.php';

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $creator = $_POST['creator'];
    $colaborator = $_POST['colaborator'];
    $duration = $_POST['duration'];

    $query = "INSERT INTO data (title, description, release_date, creator, colaborator, duration) VALUES ('$title','$description','$release_date','$creator','$colaborator','$duration')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Creating music succesfully!'); window.location='tampildata.php';</script>";
        
    } else {
        echo "<script>alert('Creating music fail, Try again!');</script>";
    }}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cstambahdata.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
            body {
                background-image: url('backgroundspotify.avif');
                background-size: cover;
            }
        </style>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="aboutspotify.php">Gosplify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                <a class="nav-link" href="https://www.spotify.com/id-id/premium/">Premium</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <b>Add Song</b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="tampildata.php">Show Song</a></li>

                </ul>
                </li>

                </li>
                <li class="nav-item">
                <a class="nav-link" href="contactusafter.php">Contact Us</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="index.php">Log Out</a>
                </li>
            
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>


    <div class="container" style="background-color:rgba(0, 0,0, 0.5); width: 500px; height: 500px; padding: 20px; color: white;">
        <br><h2>Add Song</h2></br>
        <form method="post">


            <tr><td><label for="title" style="margin-right:55px;">Title</label></td></tr>
            <td>:</td>
            <input class="inbox" type="text" name="title" placeholder="Title" required><br><br>

            <label for="description" style="margin-right:11px";>Description</label>
            <td>:</td>
            <input class="inbox" type="text" name="description" placeholder="Desription" required><br><br>

            <label for="release_date" style="margin-right:6px";>Release Date</label>
            <td>:</td>
            <input class="inbox" type="date" name="release_date" placeholder="Release Date" required><br><br>

            <label for="creator" style="margin-right:40px;";>Creator</label>
            <td>:</td>
            <input class="inbox" type="text" name="creator" placeholder="Creator" required><br><br>

            <label for="colaborator" style="margin-right:10px;";>Colaborator</label>
            <td>:</td>
            <input class="inbox" type="text" name="colaborator" placeholder="Colaborator" required><br><br>

            <label for="duration" style="margin-right:30px;";>Duration</label>
            <td>:</td>
            <input class="inbox" type="time" step="1" name="duration" placeholder="Duration" required><br><br>


            <button type="submit" name="upload" style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Add</button>

        </form> <br>


    </div>

</body>
</html>