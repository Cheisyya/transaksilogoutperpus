<?php 
    include "koneksi.php";
    $id_buku = $_GET['id_buku'];
    $folder = "images/";
    $sql = "select * from buku where id_buku = '$id_buku'";
    $query = mysqli_query($koneksi, $sql);
    $buku = mysqli_fetch_array($query);
    $path = $folder.$buku["foto"];
    if(file_exists($path)){
      unlink($path);
    }

    $sql = "DELETE FROM buku WHERE id_buku= '$id_buku'";
    $result = mysqli_query($koneksi, $sql);

    if($result){
        echo "<script>alert('Sukses hapus buku');location.href='tampil_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus buku');location.href='tambah_buku.php';</script>";
    }
    
?>
