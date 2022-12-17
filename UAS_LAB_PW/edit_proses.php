<?php
    if(isset($_POST['simpan'])){
        include('koneksi.php');
        $id       = $_POST['id'];
        $judul    = $_POST['judul'];
        $genre    = implode(' / ', $_POST['genre']);
        $director = $_POST['director'];
        $sinopsis = $_POST['sinopsis'];
        $foto     = $_FILES['foto']['name'];
        $source   = $_FILES['foto']['tmp_name'];
        $folder   = './cover_film/';
        
        if($foto !=''){
            $cek = mysqli_query($koneksi, "select * from datafilm where id='$id'");
            $d=mysqli_fetch_array($cek);
            $gambar=$d['foto'];
            if(file_exists("cover_film/$gambar")){
                unlink("cover_film/$gambar");
            }
            move_uploaded_file($source, $folder.$foto);         
            $update = mysqli_query($koneksi, "update datafilm set
            judul    = '$judul',
            genre    = '$genre',
            director = '$director',
            sinopsis = '$sinopsis',
            foto     = '$foto'
            where id = '$id'")
            or die(mysqli_error());
        }
        else{
            $update = mysqli_query($koneksi, "update datafilm set
            judul    = '$judul',
            genre    = '$genre',
            director = '$director',
            sinopsis = '$sinopsis'
            where id = '$id'")
            or die(mysqli_error());
        }
        if($update){
            echo "<h2>data berhasi diupdate </h2>";
            echo "<script>window.location = 'home.php'</script>";
        }
        else{
            echo "<h2>gagal menyimpan data</h2>";
            echo "<a href = 'edit.php ?judul= ".$judul."'>kembali</a>";
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>