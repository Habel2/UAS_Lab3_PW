<?php
    include ('koneksi.php');
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "select * from datafilm where id = '$id'");
    if (mysqli_num_rows($show)==0){
        echo '<script>window.history.back()</script>';
    }
    else{
        $d = mysqli_fetch_array($show);
        $o = explode(' / ', $d['genre']);
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

    <title>Edit > <?php echo $d['judul'] ?></title>
  </head>
  <style>
    .halaman{
      display:flex;
    }
    .navigasi{
      position:absolute;
      width:100%;
      background-color: rgba(0, 0, 0, 0.8); 
      font-size: 20px;
    }
    a{
      color:white;
    }
    .form{
      margin:4% 13% 4%;
      display:flex;
      width:80%;
    }
    .sisi{
      display:flex;
    }
    .kiri{
      padding:20px;
    }
    .kiri .form-group{
      margin-top:20px;
    }
    .foto{
      background:url("cover_film/<?php echo $d['foto'] ?>") no-repeat;
      background-size:cover;
      padding:150px 70px;
    }
    .kanan{
      padding:20px;
      width:100%;
      float:right;
    }
    footer{
      background:black;
      text-align: center;
      position:absolute;
      width:100%;
      margin-top:47%;
    }
    td{
      padding-right:20px;
    }
  </style>
  <body>
    <div class="halaman">
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
                <a class="nav-link disabled active"> <?php echo $d['judul'] ?>> Edit <span class="sr-only">(current)</span></a>
              </li>
             </ul>
              <a href="logout.php" class="nav-link navbar-dark">Logout</a>
          </div>
        </nav>
      </div>
      <div class="form">
        <form method="POST" action="edit_proses.php" class="form" value="<?php echo $d['genre']; ?>" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="sisi">
            <div class="kiri">
              <div class="foto"></div>
              <div class="form-group">
                <label for="exampleInputFoto1">Foto</label>
                <input name="foto" type="file" class="form-control" id="form-foto">
              </div>
            </div>
            <div class="kanan">
              <div class="form-group">
                <label for="exampleInputjudul1">Judul</label>
                <input name="judul" type="text" class="form-control" value="<?php echo $d['judul']; ?>">
              </div>
              <div class="form-group">
                    <label for="exampleInputGenre1">Genre</label>
                    <table>
                      <tr>
                        <td><input type="checkbox" name="genre[]" id='action' value='Action'  <?php in_array('Action', $o) ? print'checked' : ' '?>><label for='action'>Action</label></td>
                        <td><input type="checkbox" name="genre[]" id='adventure' value='Adventure'  <?php in_array('Adventure', $o) ? print'checked' : ' '?>><label for='adventure'>Adventure</label></td>
                        <td><input type="checkbox" name="genre[]"id='comedy' value='Comedy' <?php in_array('Comedy', $o) ? print'checked' : ' '?>><label for='comedy'>Comedy</label></td>
                        <td><input type="checkbox" name="genre[]"id='drama' value='Drama' <?php in_array('Drama', $o) ? print'checked' : ' '?>><label for='drama'>Drama</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="genre[]" id='historical' value='Historical' <?php in_array('Historical', $o) ? print'checked' : ' '?>><label for='historical'>Historical</label></td>
                        <td><input type="checkbox" name="genre[]" id='horror' value='Horror' <?php in_array('Horror', $o) ? print'checked' : ' '?>><label for='horror'>Horror</label></td>
                        <td><input type="checkbox" name="genre[]" id='psychological' value='Psychological' <?php in_array('Psychologycal', $o) ? print'checked' : ' '?>><label for='psychological'>Psychological</label></td>
                        <td><input type="checkbox" name="genre[]" id='mystery' value='Mystery' <?php in_array('Mystery', $o) ? print'checked' : ' '?>><label for='mystery'>Mystery</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="genre[]" id='romance' value='Romance' <?php in_array('Romance', $o) ? print'checked' : ' '?>><label for='romance'>Romance</label></td>
                        <td><input type="checkbox" name="genre[]" id='sci-fi' value='Sci-fi' <?php in_array('Sci-fi', $o) ? print'checked' : ' '?>><label for='sci-fi'>Sci-Fi</label></td>
                        <td><input type="checkbox" name="genre[]" id='supernatural' value='Supernatural' <?php in_array('Supernatural', $o) ? print'checked' : ' '?>><label for='supernatural'>Supernatural</label></td>
                        <td><input type="checkbox" name="genre[]" id='thriller' value='Thriller' <?php in_array('Thriller', $o) ? print'checked' : ' '?>><label for='thriller'>Thriller</label></td>
                      </tr>
                    </table>
                </div>
                <div class="form-group">
                    <label for="exampleInputDirector1">Director</label>
                    <input name="director" type="text" class="form-control" value="<?php echo $d['director']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputSinopsis1">Sinopsis</label>
                    <input name="sinopsis" type="sinopsis" class="form-control" value="<?php echo $d['sinopsis']; ?>">
                </div>
                <button name="simpan" class="btn btn-dark">Simpan</button>
              </div>
            </div>
          </form>
        </div>
        <footer>
            <font color="gray">Tugas UTS Lab 3 Pemograman Web <br> Eunike Leoni Sinaga | 211401048 <br>  Habel Febrian Sitanggang | 211401073 </font>
        </footer>
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