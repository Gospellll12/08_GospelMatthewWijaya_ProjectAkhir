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
        background-image: url('backgroundspotify.avif');
        background-size: cover;
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




  <div style="display: flex; justify-content: center; align-items: center; height: 80vh;">
  <div class="container" style="color:white; margin-top:100px; background-color: rgba(0, 0, 0, 0.5); padding:20px; border-radius:10px;">
    <ul><b><h1 style="font-size:45px">One app for all your sounds </h1></b></ul>
    <p style="margin-top:10px">Spotify is a digital music, podcast, and video service that gives you access to millions of songs and other content from creators all over the world.</br><br>
    <b>Want to discover new music?</b><br><br>
    Find music that you'll love today! Choose our curated playlists,
    or create your own playlist with your favorite songs. <br><br>
    <b>Listen anywhere</b><br><br>
    Spotify is available on your phone, tablet, desktop, and more. Listen to music wherever you are.</p>
    <button onclick="window.location.href='login.php'" type='login' style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Login</button>
    <button onclick="window.location.href='register.php'" type='login' style="background-color:rgba(229, 230, 250, 1); border-radius:10px">Sign Up</button>
  </div>
</div>

</body>
</html>