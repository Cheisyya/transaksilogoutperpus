<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];

        include "koneksi.php";
        $qry_login=mysqli_query($koneksi,"select * from siswa where username = '".$username."' and password = '".md5($password)."'");
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_siswa']=$dt_login['id_siswa'];
            $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
            $_SESSION['status_login']=true;
            header("location: home.php");
            echo "<script>alert('Login Berhasil');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
        }
    }

?>
