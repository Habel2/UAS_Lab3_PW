<?php
    if(isset($_GET['id'])){
        include('koneksi.php');
        $id = $_GET['id'];
        $cek = mysqli_query($koneksi, "select * from datafilm where id ='$id'") or die(mysqli_error());

        if(mysqli_num_rows($cek)==0){
            echo "<script>window.history.back()</script>";
        }
        else{
            $d=mysqli_fetch_array($cek);
            $gambar=$d['foto'];
            if(file_exists("cover_film/$gambar")){
                unlink("cover_film/$gambar");
            }
            $del = mysqli_query($koneksi, "delete from datafilm where id = '$id'");
            if ($del){
                echo "<h3>Data film berhasil dihapus</h3>";
                echo "<script>window.location = 'home.php';</script>";
            }
            else{
                echo "<h2>gagal menghapus data</h2>";
                echo "<a href = 'home.php'>Kembali</a>";
            }
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>