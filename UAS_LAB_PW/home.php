<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <title>Home</title>
</head>
<style>
    html,body{
        overflow:hidden;
        max-width:120%;
        margin-left:-4%;
    }
    a{
        color:white;
    }
    .halaman{
        display:flex;
    }
    .list{
        display:flex;
        min-width:100%;
        overflow-x:auto;
        background-color: black;
    }
    .gambar{
        min-width: 150px;
        height: 780px;
        transform: skewX(-15deg);
        float:left;
        justify-content: center;
        align-items: center;
        overflow:hidden;
        transition:0.5s;
    }
    .gambar:hover{
        transform: skew(-15deg) scale(1.2);
        min-width:400px;
        transition:0.5s;
    }
    .navigasi{
        position:absolute;
        margin-left:8.15%;
        width:100%;
        margin-top:7px;
    }
    .navbar{
        font-size: 25px;
    }
    .footer_kiri{
        position:absolute;
        font-size: large;
        margin-left:9%;
        margin-top:48.5%;
        text-align:center;
    }
    .footer_kanan{
        position:absolute;
        margin-top:47%;
        margin-left:88%;
        text-align:right;
    }
    .centered {
        position: absolute;
        padding:100%;
        padding-top:450px;
        padding-bottom:450px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.8);
        color:rgba(0,0,0,0);
        width: 150px;
        transition:0.5s;
    }
    .centered:hover{
        padding:320px 0 320px;
        width:400px;
        color:white;
        transform: translate(-50%, -50%) skew(0deg);
        background-color: rgba(0, 0, 0, 0);
        text-align: center;
        justify-content: center;
        transition:0.5s;
    }
    .centered h3{
        background-color:rgba(0,0,0,0);
        transition:0.5s;
    }
    .centered:hover h3{
        padding:20px;
        background-color:rgba(0,0,0,0.8);
        transform:skewx(0deg);
    }
    .centered:hover p{
        background-color:rgba(0,0,0,0.8);
    }
    .centered a{
        color:rgba(0,0,0,0);
        transition:0.5s;
    }
    .centered:hover a{
        color:white;
    }
    td{
        text-align: left;
        border:1px solid;
        transform: skew(-15deg);
    }
    .daftar-menu{
        padding-left:10px;
    }
    .daftar-menu label{
        padding-left:10px;
    }
    #button{
        padding:0 80px 0 80px;
    }
</style>

<body>
    <div class="halaman">
        <div class="list">
        <?php
        include_once 'koneksi.php';
        $data=mysqli_query($koneksi, "select * from datafilm;");
        while ($d=mysqli_fetch_array($data)){
        ?>
            <div class="gambar" style="background:url('cover_film/<?php echo $d["foto"]?>') no-repeat; background-size:cover;">
                <div class="centered">
                    <a href="deskripsi.php ?id=<?php echo $d['id'];?>">
                    <h3><?php echo $d['judul']; ?></h3>
                    </a>
                    <p><?php echo $d['genre']; ?></p>
                    <a href="edit.php ?id=<?php echo $d['id'];?>">Edit</a>
                    |
                    <a href="hapus.php ?id=<?php echo $d['id'];?>">Hapus</a>
                </div>
            </div>
        <?php } ?>
        </div>
        <!-- navigasi -->
        <div class="navigasi">
            <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah.php">Tambah</a>
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
            <!-- <font color="gray">Tugas UTS Lab 3 Pemograman Web <br> Eunike Leoni Sinaga | 211401048 <br>  Habel Febrian Sitanggang | 211401073 </font> -->
        
    </div>

  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>
