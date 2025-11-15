<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="cssabt.css">
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
    <b><a class="navbar-brand" href="aboutspotify.php">Gosplify</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://www.spotify.com/id-id/premium/">Premium</a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="tampildata.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Show Songs
          </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="tampildata.php">Show</a></li>
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

<div class="box" style="padding-bottom:50px;padding-right:50px;margin-top:50px">
  <div class="container" style="color:white; margin-left:75px; width: 700px;padding-bottom:50px; background-color: rgba(0, 0, 0, 0.5); border-radius:10px; padding:20px;">
    <h2>About Us</h2> </br>
    <p>Gosplify is a digital music, podcast, and video service that gives you access to millions of songs and other content from creators all over the world. It was launched in October 2008 by Swedish company Gosplify AB. The platform offers both free and premium subscription plans, allowing users to stream music and other audio content on-demand.</p>
    <p>Gosplify's mission is to "unlock the potential of human creativity—by giving a million creative artists the opportunity to live off their art and billions of fans the opportunity to enjoy and be inspired by it." The platform has revolutionized the way people consume music, shifting from traditional ownership models (like buying CDs or digital downloads) to streaming-based access.</p>
    <p>In addition to music streaming, Gosplify has also become a major player in the podcasting industry, hosting a wide range of podcasts across various genres. The platform uses algorithms and personalized recommendations to help users discover new music and content based on their listening habits.</p>
    <p>Gosplify is available on various devices, including smartphones, tablets, computers, smart speakers, and more. It has become one of the most popular music streaming services globally, with millions of active users and a vast library of content.</p>
  </div>

  <div class="container" style="color:white; width:700px; margin-left:100px;background-color: rgba(0, 0, 0, 0.5); padding:20px; border-radius:10px;">
    <b><h2 style="color:white">Gosplify HQ</h2></b>
    <p style='width:150px; margin-top:25px'>Gosplify AB
    Regeringsgatan 19
    SE-111 53 Stockholm
    Sweden
    Reg no: 556703-7485
    office@gosplify.com</p>
  

  <div class="container" style="color:white; width:700px; padding-right:200px; margin-left:-20px;">
    <b><h2 style="margin-left:10px">Customer Service and Support</h2></b>
    <ol>
      <li style="margin-top:25px">Help site. Check out our help site for answers to your questions and to learn how to get the most out of Spotify and your music.</li>

      <li>Community. Get fast support from expert Gosplify users. If there isn't already an answer there to your question, post it and someone will quickly answer. You can also suggest and vote on new ideas for Gosplify or simply discuss music with other fans.</li>

      <li>Contact us. Contact our Customer Support if you don't find a solution on our support site or Community.</li>

      <li>@GosplifyCares. Feeling sociable? Simply tweet the team and they'll do all they can to help.</li>

      <li>Audiobook refunds. If you've listened to less than 50% of an audiobook purchased in the last 7 days, you may be eligible for a refund. Check out our policy for details.</li>
    </ol>
  </div>
  </div>
</div>

<footer class="bg-dark text-center text-white" style="margin-top:50px;";>
  <p>@ 2025 Gosplify. All rights reserved.</p>
</footer> 
</body>
</html>