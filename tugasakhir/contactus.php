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
    <a class="navbar-brand">Gosplify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="https://www.spotify.com/id-id/premium/">Premium</a>
        </li>

        <li class="nav-item">
          <b><a class="nav-link" href="">Contact Us</a>
        </li></b>

                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Landing Page
          </a>
        <ul class="dropdown-menu">
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
<div class="container mt-5" style="max-width: 700px; margin-top: 100px !important;">
    <h2 class="mb-3">Contact Us</h2>
    <p>Have questions, feedback, or business inquiries? Our team is here to help.</p>

    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" required name="nama">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" required name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" class="form-control" required name="subject" >
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="4" required name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-success" name="send">Send Message</button>
    </form>

    <!--ini buat garis ya-->
    <hr class="my-5">
</div>
<footer class="bg-dark text-center text-white;" style="color:white; margin-bottom:-20px !important; ">
    <h4>Other Ways to Reach Us</h4>
    <p><strong>Email Support:</strong> support@gosplify.com</p>
    <p><strong>Business Inquiries:</strong> partnership@gosplify.com</p>
    <p><strong>Office:</strong> Jl. Harmoni No. 22, Jakarta, Indonesia 10430</p>
</footer>


</div>
</body>
</html>

<?php
include 'koneksi.php';

if (isset($_POST['send'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $query = "INSERT INTO contact (nama, email, subject, message) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Sent Succesfully!'); window.location='contactus.php';</script>";
        
    } else {
        echo "<script>alert('Sent fail, Try again!');</script>";
    }}
    
?>