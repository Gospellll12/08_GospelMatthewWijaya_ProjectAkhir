<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="cssabt.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
          <b>Show Songs</b>
          </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="tambahdata.php">Add Song</a></li>
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
            <h2 style="color:white; text-align:center; margin-top:80px;">Songs Data</h2>
            <table border="10" cellpadding="10" cellspacing="0" style="margin:auto; background-color:rgba(255, 255, 255, 0.8); margin-top:20px;">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Release Date</th>
                    <th>Creator</th>
                    <th>Colaborator</th>
                    <th>Duration</th>
                    <th>Editing Data</th>
                </tr>

                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from data");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $d['title']; ?></td>
                    <td><?php echo $d['description']; ?></td>
                    <td><?php echo $d['release_date']; ?></td>
                    <td><?php echo $d['creator']; ?></td>
                    <td><?php echo $d['colaborator']; ?></td>
                    <td><?php echo $d['duration']; ?></td>
                      <td>
                          <a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
                          <a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a>
                      </td>
                </tr>
                <?php
                }
                ?>
            </table>
        <button style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin: auto; margin-top:50px;background-color:rgba(229, 230, 250, 1); border-radius:10px"><a href="tambahdata.php">Add Song</a></button>

</body>
</html>