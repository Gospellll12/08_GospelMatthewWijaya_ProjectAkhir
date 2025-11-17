<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="csabt.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <style>
    body {

        background-size: 100% 900px;
        background-image: url('backgroundspotify.avif'), url('landing.jpg');
        background-position: top, bottom;
        background-repeat: no-repeat, no-repeat;

    }
  </style>


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
         <b>Landing Page</b>
          </a>
        <ul class="dropdown-menu" style="margin-left:260px;">
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



<div>
  <div style="display: flex; justify-content: center; align-items: center; height: 80vh; padding-bottom:420px; margin-top:380px;">
    <div class="container" style="color:white; margin-top:100px; background-color: rgba(0, 0, 0, 0.5); padding:20px; border-radius:10px;">
      <ul><b><h1 style="font-size:45px">One app for all your audio experiences </h1></b></ul>
      <p style="margin-top:10px">Gosplify is a digital music, podcast, and video service that gives you access to millions of songs and other content from creators all over the world.</br><br>
      <b>Looking to discover something new?</b><br><br>
      Find music that you'll love today! Choose our curated playlists,
      or create your own playlist with your favorite songs. <br><br>
      <b>Listen anywhere</b><br><br>
      Gosplify is available on your phone, tablet, desktop, and more. Listen to music wherever you are.
      Gosplify is a comprehensive digital platform for music, podcasts, and videos, giving you access to millions of songs and a wide variety of content created by artists and storytellers from all around the world. Whether you're into pop, rock, classical, indie, or anything in between, Gosplify brings an enormous catalog right to your fingertips.</p>
      Gosplify helps you explore fresh tracks and artists that match your taste. You can dive into our carefully curated playlists, updated regularly to suit different moods, moments, and genres. Or, if you prefer something more personal, you can create your own playlist filled with your favorite songs and share it with friends. <br><br>

      <b>Enjoy your music anywhere, anytime</b><br><br>
      <p>Gosplify is designed to follow you wherever you go. Use it on your phone, tablet, desktop computer, smart TV, or even in your car. With seamless syncing across devices, you can start listening on one device and continue on another without missing a beat. Whether you’re at home, commuting, studying, or exercising, Gosplify makes it easy to enjoy the audio you love—anytime, anywhere.</p>
      
      <button onclick="window.location.href='login.php'" type='login' style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Login</button>
      <button onclick="window.location.href='register.php'" type='login' style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Sign Up</button>
    </div>
  </div>
  

</div>

<div style="background-color: rgba(0, 0, 0, 0.5);display: flex; justify-content: center; align-items: center;padding-bottom:30px; margin-top:350px; flex-direction:row;">
  <div class="card" style="width: 15rem; margin-right:20px;margin-top:30px;">
        <img src="album1.jpeg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Album JHDam</h5>
        </div>
  </div>
  <div class="card" style="width: 15rem;margin-right:15px;margin-top:30px;">
        <img src="album2.webp" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Album Moonlight</h5>
        </div>
  </div>
  <div class="card" style="width: 15rem;margin-right:10px;margin-top:30px;">
        <img src="album3.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Album Paradise</h5>
        </div>
  </div>
  <div class="card" style="width: 15rem;margin-top:30px;">
        <img src="album4.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Album The Weekend</h5>
        </div>
  </div>
</div>


<footer class="bg-dark text-center text-white;" style="color:white; margin-bottom:-20px !important; ">
    <h4>Other Ways to Reach Us</h4>
    <p><strong>Email Support:</strong> support@gosplify.com</p>
    <p><strong>Business Inquiries:</strong> partnership@gosplify.com</p>
    <p><strong>Office:</strong> Jl. Harmoni No. 22, Jakarta, Indonesia 10430</p>
  </div>
</footer>

</body>
</html>