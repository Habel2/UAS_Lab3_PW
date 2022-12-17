<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tambah</title>
  </head>
  <style>
    .navigasi{
        width:100%;
    }
    .navbar{
        width:100%;
        font-size: 20px;
        background-color: rgba(0, 0, 0, 0.8); 
    }
    a{
      color:white;
    }
    .sisi{
      display:flex;
      margin-top:10%;
      margin-bottom:10%;
    }
    #form-foto{
      padding:180px 20px 180px;
    }
    .kiri{
      padding:20px;
      float:left;
      display:flex;
    }
    .kanan{
      padding:20px;
      width:100%;
      float:right;
    }
    footer{
        background:black;
        text-align: center;
    }
    td{
      padding-right:20px;
    }
  </style>
  <body>
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
            <li class="nav-item active">
              <a class="nav-link" href="tambah.php">Tambah <span class="sr-only">(current)</span></a>
            </li>
           </ul>
            <a href="logout.php" class="nav-link navbar-dark">Logout</a>
        </div>
      </nav>
    </div>
    <div class="container">
        <form method="POST" action="tambah_proses.php" class="form" enctype="multipart/form-data">
          <div class="sisi">
            <div class="kiri">
              <div class="form-group">
                  <label for="exampleInputFoto1">Foto</label>
                  <input name="foto" type="file" class="form-control" id="form-foto">
              </div>
            </div>
            <div class="kanan">
              <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input name="judul" type="text" class="form-control" placeholder="Masukkan judul disini">
              </div>
              <div class="form-group">
                  <label for="exampleInputGenre1">Genre</label><br>
                  <table>
                    <tr>
                      <td><input type="checkbox" name="genre[]" id='action' value='Action'><label for='action'>Action</label></td>
                      <td><input type="checkbox" name="genre[]" id='adventure' value='Adventure'><label for='adventure'>Adventure</label></td>
                      <td><input type="checkbox" name="genre[]"id='comedy' value='Comedy'><label for='comedy'>Comedy</label></td>
                      <td><input type="checkbox" name="genre[]"id='drama' value='Drama'><label for='drama'>Drama</label></td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="genre[]" id='historical' value='Historical'><label for='historical'>Historical</label></td>
                      <td><input type="checkbox" name="genre[]" id='horror' value='Horror'><label for='horror'>Horror</label></td>
                      <td><input type="checkbox" name="genre[]" id='psychological' value=Psychological'><label for='psychological'>Psychological</label></td>
                      <td><input type="checkbox" name="genre[]" id='mystery' value='Mystery'><label for='mystery'>Mystery</label></td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="genre[]" id='romance' value='Romance'><label for='romance'>Romance</label></td>
                      <td><input type="checkbox" name="genre[]" id='sci-fi' value='Sci-fi'><label for='sci-fi'>Sci-Fi</label></td>
                      <td><input type="checkbox" name="genre[]" id='supernatural' value='Supernatural'><label for='supernatural'>Supernatural</label></td>
                      <td><input type="checkbox" name="genre[]" id='thriller' value='Thriller'><label for='thriller'>Thriller</label></td>
                    </tr>
                  </table>
              </div>
              <div class="form-group">
                  <label for="exampleInputDirector1">Director</label>
                  <input name="director" type="text" class="form-control" placeholder="Masukkan director disini">
              </div>
              <div class="form-group">
                  <label for="exampleInputSinopsis1">Sinopsis</label>
                  <input name="sinopsis" type="sinopsis" class="form-control" placeholder="Masukkan sinopsis disini">
              </div>
              <button name="tambah" class="btn btn-dark">Tambah</button>
            </div>
          </div>
        </form>
    </div>
    <footer>
        <font color="gray">Tugas UTS Lab 3 Pemograman Web <br> Eunike Leoni Sinaga | 211401048 <br>  Habel Febrian Sitanggang | 211401073 </font>
    </footer>
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