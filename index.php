<?php
  include'config.php';
  // $query="SELECT*FROM artikel";
  // $hasil=mysqli_query($conn,$query);

  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Budaya Khas Jawa Barat</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>


        <script src="js/jquery-3.5.1.min.JS"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section  class="header">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark ml-auto">
            <div class="container-fluid">
              <a style="font-family:'Brush Script MT';" style="size:20px;" class="navbar-brand" href="#"><h2>Kebudayaan Jawa Barat</h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="Kategori/tarian.html">Seni tari</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Kategori/alat_musik.html">Seni Musik</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Kategori/tradisi.html">Tradisi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Kategori/kesenian.html">Kesenian</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  </li>
                </ul> 
              </div>
            </div>
        </nav>
        </section>




        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="Gambar/jaipong.jpeg" alt="First slide" width="600" height="600">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="Gambar/rumah_adat.jpeg" alt="Second slide" width="600" height="600">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="Gambar/wayang.jpeg" alt="Third slide" width="600" height="600">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> 

<br><br><br>
        <section id="content">
            <div class="container-fluid p-0">
                <center><h1>ARTIKEL</h1></center><BR></BR>

                <div class="btn-group me-2">
                        <form class="d-flex" method="post" enctype="multipart/form-data">
                            <input class="form-control me-2 border" type="text" name="keyword" placeholder="Cari Artikel" aria-label="Search" required>
                            <button class="btn btn-outline-secondary" name="cari" type="submit">Cari</button>
                        </form>
                    </div>
                    <div class="btn-group me-2">
                
    <button type="button" onclick= "refresh()" class="btn btn-sm btn-outline-secondary">
      Segarkan Data
    </button>
                    </div>
    <script>function refresh(){location.href = "index.php";} </script>
    </div><br><br>
              <div class="row no-gutters">

                <?php
    include("config.php");
    $no = 1;
    if(isset($_POST["cari"])){
        $search = mysqli_real_escape_string($conn,$_POST['keyword']);
        $query = mysqli_query($conn, "SELECT * FROM artikel WHERE judul LIKE '%$search%' ORDER BY judul ASC");
    } else {
        $query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY judul ASC");
    }
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
                <div class="col-md-4">
                  <a href="artikel.php?id_artikel=<?php echo$data['id']?>" target="_blank"><img class="img-fluid" src="<?php echo$data['foto']  ?>" alt="" width="402" height="400"></a>
                  <center><h4><?php echo$data['judul']?></h4></center>
                  <br><br>
                </div>
                <?php
                 }
                ?>
              
              </div> 
            </div>
          </section>

     <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    </body>
</html>