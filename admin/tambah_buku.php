<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah </title>
    <style>
        body {
           
            padding-bottom: 20px;
            
        }
    </style>
</head>
<body>
<?php
        include "index.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Tambah Buku</h1>
            <div class="card-body">
                <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
                    Nama Buku :
                    <br><input type="text" name="nama_buku" value="" class="form-control"></br>
                    Pengarang : 
                    <br><input type="text" name="pengarang" value="" class="form-control"></br>
                    Deskripsi : 
                    <br><textarea name="deskripsi" class="form-control" rows="4"></textarea></br>

                    Foto :
                    <br><br><input type="file" class="form-control-file" name = "foto" id="exampleFormControlFile1"></br></br>


                    <br>
                    <input type="submit" name="simpan" value="Tambah buku" class="btn btn-dark"></br>

        
  

    </form>
    </div>
    </div>  
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
