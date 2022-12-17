<?php
    include ('koneksi.php');
    $id = $_GET['id'];
    $show =mysqli_query($koneksi, "select * from datafilm where id = '$id'");
    if (mysqli_num_rows($show)==0){
        echo '<script>window.history.back()</script>';
    }
    else{
        $d = mysqli_fetch_assoc($show);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title><?php echo $d['judul']?></title>
  </head>
  <style>
    body{
      overflow:hidden;
      background:url("cover_film/<?php echo $d['foto'] ?>") no-repeat;
      background-size:cover;
    }
    .bg{
      padding:26% 50%;
      background-color: rgba(0, 0, 0, 0.7);
    }
    .navigasi{
        width:100%;
        position:absolute;
    }
    .halaman{
      border:1px solid;
      display:flex;
    }
    .navbar{
        width:100%;
        font-size: 20px;
    }
    a{
      color:white;
    }
    .konten{
      position:absolute;
      justify-items: center;
      text-align:center;
      color:white;
      width:100%;
      padding-left:20%;
      padding-right:20%;
    }
    .foto{
      padding:400px 300px;
      background:url('cover_film/<?php echo $d['foto'] ?>') no-repeat;
      background-size: cover;
    }
    .kiri{
      display:flex;
      border:1px solid;
      margin-top:20%;
      color:white;
    }
   .kanan{
      padding:20px;
      width:100%;
    }
    footer{
      width:100%;
      margin-top:47%;
      text-align: center;
      position:absolute;
    }
    .judul{
      margin-top:20%;
      margin-bottom:10%;
      color:white;
    }
    .isi{
      color:white;
      justify-items: center;
    }
    .footer_kiri{
        float:left;
        position:absolute;
        font-size: large;
        margin-left:2%;
        margin-top:49%;
        text-align:center;
    }
    .footer_kanan{
        position:absolute;
        margin-top:48%;
        margin-left:80%;
        text-align:right;
    }
  </style>
  <body>
    <div class="halaman">
      <div class="bg"></div>
      <div class="konten">
        <div class="judul">
          <h1 style='font-size: 80px'><?php echo $d['judul']?></h1>
        </div>
        <div class="isi">
          <h5>Genre</h5>
          <p><?php echo $d['genre'] ?></p>
          <h5>Director</h5>
          <p><?php echo $d['director'] ?></p>
          <h5>Sinopsis</h5>
          <p><?php echo $d['sinopsis'] ?></p>
        </div>
        
      </div>
      <div class="navigasi">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tambah.php">Tambah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled active"><?php echo $d['judul']; ?><span class="sr-only">(current)</span></a>
              </li>
            </ul>
                <a href="logout.php" class="nav-link navbar-dark">Logout</a>
              </div>
            </nav>
          </div>
          <div class="footer_kiri">
            <font color="gray">Tugas UTS Lab 3 Pemograman Web</font>
          </div>
          <div class="footer_kanan">
            <font color="gray">Eunike Leoni Sinaga | 211401048 <br>  Habel Febrian Sitanggang | 211401073 </font>
          </div>
          </div>
      <!-- Optional JavaScript; choose one of the two! -->
      
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      
      <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>