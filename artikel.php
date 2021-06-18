<?php
include'config.php';
$id_artikel=$_GET['id_artikel'];
$query="SELECT*FROM artikel WHERE id=$id_artikel";
$hasil=mysqli_query($conn,$query);

if(mysqli_num_rows($hasil)<1){
    echo"0";
}
else{
    $hasil=mysqli_fetch_assoc($hasil);
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Table_Fixed_Header/vendor/bootstrap/css/bootstrap.css">
    <title>Artikel</title>
</head>
<body>
   <br>
<img src="<?php echo$hasil['foto']?>" class="img-fluid rounded mx-auto d-block" alt="Kebudayaan Jawa Barat" width="700" height="500" loading="lazy">
<br>    
<p>
        <?php echo$hasil['deskripsi']; ?>
    </p>

    <!-- <form  action="tambahKomentar.php?id_artikel=<?php echo$_GET ['id_artikel'] ?>"method="POST" class="row g-3">
            <div class="col-md-6">
              <label for="inputNama" class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" id="inputNama">
            </div>
            <div class="col-md-6">
              <label for="inputEmail14" class="form-label">Email</label>
              <input  name="email" type="text" class="form-control" id="inputEmail14">
            </div>
            <div class="col-md-10">
              <br>
              <br>
              <br>
              <label for="inputKomentar" class="form-label">Ulasan</label>
              <input name="komentar=" type="text" class="form-control" id="inputKomentar">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Ingat saya
                </label>
              </div>
            </div>
            <div class="col-12">
              <button name="kirim"type="submit" class="btn btn-primary">kirim</button>
            </div>
          </form>  -->
</body>
</html>