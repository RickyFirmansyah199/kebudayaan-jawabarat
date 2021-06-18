<?php
    include 'config.php';
 
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $komentar=$_POST['komentar'];
    $id_artikel=$_GET['id_artikel'];
    $query="INSERT INTO comment VALUES(null,$id_artikel,'$nama','$email','$komentar')";
    if(mysqli_query($conn,$query)){
      header
      ("Location: artikel.php?id_artikel=$id_artikel");
      exit;
        echo"<script>alert('komentar masuk');window.location.href='artikel.php?id_artikel=$id_artikel'</script>";
    }
    else{
        header
        ("Location: artikel.php?id_artikel=$id_artikel");
        exit;
        echo"<script>alert('komentar gagal')window.location.href='artikel.php?id_artikel=$id_artikel'</script>";
    }
?>