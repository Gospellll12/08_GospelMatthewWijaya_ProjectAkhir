<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $disname = $_POST['disname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, disname, email, age, password) VALUES ('$username','$disname','$email','$age','$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal! Silakan coba lagi.');</script>";
    }}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csregister.css">
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
         <b>Sign Up</b>
          </a>
        <ul class="dropdown-menu"style="margin-left:260px;">
        <li><a class="dropdown-item" href="index.php">Landing Page</a></li>
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


     <div class="container" style="background-color:rgba(0, 0,0, 0.5); width: 500px; height: 500px; padding: 20px; color: white; border-radius:10px ;margin-top:110px;">

        <br><h2>Sign Up Page</h2></br>
        <form method="post">


            <tr><td><label for="username" style="margin-right:30px;">Username</label></td></tr>
            <td>:</td>
            <input class="inbox" type="text" name="username" placeholder="Username" required><br><br>

            <label for="disname" style="margin-right:2px";>Display Name</label>
            <td>:</td>
            <input class="inbox" type="text" name="disname" placeholder="Display Name" required><br><br>

            <label for="email" style="margin-right:55px";>Email</label>
            <td>:</td>
            <input class="inbox" type="email" name="email" placeholder="Email" required><br><br>

            <label for="age" style="margin-right:68px";>Age</label>
            <td>:</td>
            <input class="inbox" type="age" name="age" placeholder="Age" required><br><br>

            <label for="password" style="margin-right:33px">Password</label>
            <td>:</td>
            <input class="inbox" type="password" name="password" placeholder="Password" required><br><br><br>


            <button type="submit" name="register" style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Sign Up</button>

        </form>
        <p>
            <a href="login.php">Login Page</a>
        </p>
    </div>
</body>
</html>