<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: aboutspotify.php");
        
    } else {
        echo "<script>alert('Login gagal! Periksa username dan password Anda.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
    <link rel="stylesheet" href="cslogin.css"> 
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" >Gosplify</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://www.spotify.com/id-id/premium/">Premium</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>

        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <b>Log In</b>
          </a>
        <ul class="dropdown-menu"style="margin-left:260px;">
        <li><a class="dropdown-item" href="index.php">Landing</a></li>
        <li><a class="dropdown-item" href="login.php">Log In</a></li>
        <li><a class="dropdown-item" href="register.php">Sign Up</a></li>
        </ul>
        </li>

        </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!--navbar end-->

     <div class="container" style="background-color:rgba(0, 0,0, 0.5); width: 500px; height: 400px; padding: 20px; color: white; border-radius:10px;">
        <br><h2>Log In Page</h2></br>
    <form method="post">
        <td>
        <label for="username" >Insert Username</label>
        </td>
        <td>:</td>
        <td>
        <input class="inbox" type="text" name="username" placeholder="Username" required ><br><br>
        </td>

        <td>
        <label for="password"style="margin-right:3px;">Insert Password</label>
        </td>
        <td> :</td>
        <td>
        <input class="inbox" type="password" name="password" placeholder="Password" required><br><br><br>
        </td>

        <td>
        <button type="submit" name="login" style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Log In</button>
        </td>

    </form>
    <p>
        <a href="register.php">Sign Up Page</a>
    </p>
    </div>
</body>
</html>