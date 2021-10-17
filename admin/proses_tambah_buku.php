<?php
include "koneksi.php";
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    

    if($foto != "") {
        $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
              if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                      move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                        $query = "INSERT INTO buku (nama_buku,pengarang,deskripsi,foto) VALUES ('$nama_buku', '$pengarang', '$deskripsi', '$nama_gambar_baru')";
                        $result = mysqli_query($koneksi, $query);
                        // periska query apakah ada error
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                        } else {
                          //tampil alert dan akan redirect ke halaman index.php
                          //silahkan ganti index.php sesuai halaman yang akan dituju
                          echo "<script>alert('Data berhasil ditambah.');window.location='tampil_buku.php';</script>";
                        }
      
                  } else {     
                   //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_buku.php';</script>";
                  }
      } else {
         $query = "INSERT INTO buku (nama_buku,pengarang,deskripsi,foto) VALUES ('$nama_buku', '$pengarang', '$deskripsi', null)";
                        $result = mysqli_query($koneksi, $query);
                        // periska query apakah ada error
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                        } else {
                          //tampil alert dan akan redirect ke halaman index.php
                          //silahkan ganti index.php sesuai halaman yang akan dituju
                          echo "<script>alert('Data berhasil ditambah.');window.location='tampil_buku.php';</script>";
                        }
      }
      ?>

