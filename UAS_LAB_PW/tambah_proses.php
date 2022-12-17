<?php
    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $judul    = $_POST['judul'];
        $genre    = implode(' / ', $_POST['genre']);
        $director = $_POST['director'];
        $sinopsis = $_POST['sinopsis'];
        $foto     = $_FILES['foto']['name'];
        $source   = $_FILES['foto']['tmp_name'];
        $folder   = './cover_film/';
        move_uploaded_file($source, $folder.$foto); 

        $input = mysqli_query($koneksi, "insert into datafilm values ('', '$judul','$genre', '$director', '$sinopsis', '$foto')");

        if($input){
            echo "<h3> Data berhasil ditambahkan </h3>";
            echo "<script> window.location='home.php'</script>";
        }
        else{
            echo "gagal menambahkan data";
            echo "<a href = 'tambah.php'>kembali</a>";
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>