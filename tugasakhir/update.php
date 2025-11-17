

<head>  
    <title>Edit Data</title>
    <link rel="stylesheet" href="updatecss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <?php
    include 'koneksi.php';
    $id=$_GET['id'];

    $data=mysqli_query($koneksi,"select * from data where id='$id'");
    $d=mysqli_fetch_array($data);
    ?>
    <body>

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
                   <b>Update Song</b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="tampildata.php">Show Songs</a></li>
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


                <div class="container" style="background-color:rgba(255, 255, 255, 0.8);">
        <h2>Edit Data</h2>
        <br/>
        <a href="tampildata.php">Back</a>
            <form method="post" action="proses_update.php">

         <!--- title --->
            <tr><td><label for="title" style="margin-right:55px;">Title</label></td></tr>
            <td>:</td>
            <input class="inbox" type="text" name="title" placeholder="Title" required value="<?php echo $d['title']; ?>"><br><br>

        <!--- description --->
            <label for="description" style="margin-right:11px";>Description</label>
            <td>:</td>
            <input class="inbox" type="text" name="description" placeholder="Desription" required value="<?php echo $d['description']; ?>"><br><br>

        <!--- releasedate --->
            <label for="release_date" style="margin-right:6px";>Release Date</label>
            <td>:</td>
            <input class="inbox" type="date" name="release_date" placeholder="Release Date" required value="<?php echo $d['release_date']; ?>"><br><br>

        <!--- creator --->
            <label for="creator" style="margin-right:40px;";>Creator</label>
            <td>:</td>
            <input class="inbox" type="text" name="creator" placeholder="Creator" required value="<?php echo $d['creator']; ?>"><br><br>

        <!--- colaborator --->
            <label for="colaborator" style="margin-right:10px;";>Colaborator</label>
            <td>:</td>
            <input class="inbox" type="text" name="colaborator" placeholder="Colaborator" required value="<?php echo $d['colaborator']; ?>"><br><br>

        <!--- duration --->
            <label for="duration" style="margin-right:30px;";>Duration</label>
            <td>:</td>
            <input class="inbox" type="time" step="1" name="duration" placeholder="Duration" required value="<?php echo date('H:i:s', strtotime($d['duration'])); ?>"><br><br>

        <!--- upload button --->
            <button type="submit" name="upload" >Create</button>

        </form> <br>
            </form>
            <?php 
        
        ?>
        </div>

    </body>
