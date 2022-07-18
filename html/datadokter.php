<?php 
session_start();
error_reporting(0);
require 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com" />

    <title>RS.UNIKA</title>

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link rel="stylesheet" href="../assets/css/maicons.css" />

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../assets/css/theme.css" />
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light navbar-float">
        <div class="container">
          <a href="index.html" class="navbar-brand">Unika&nbsp;<span class="text-primary">Hospital.</span></a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="datapasien.php" class="nav-link active">Data Pasien</a>
              </li>
              <li class="nav-item">
                <a href="datadokter.php" class="nav-link">Data Dokter</a>
              </li>
            
            

          
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top:200px;">
      <h2 class="text-center text-primary pb-5" style="margin-top:-50px;">Data Dokter</h2>


      <form class="pb-5 " action="" method="POST" class="row" >
  <input type="submit" name="cari" value="Cari" class="btn btn-primary " style="border-radius:10px;" >
      <input type="text" name="query" placeholder="Semua Data......" style="border: 2px solid black; padding-bottom:5px; border-radius:10px;" >
   
    </form>
          <table class="table table-bordered">
  <thead>
    <tr class="text">
      <th scope="col">No</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Email</th>
      <th scope="col">No Hp</th>
      <th scope="col">Dokter Spesialis</th>
      <th scope="col">Pasien</th>
      <th scope="col">Jam Masuk</th>
  
    </tr>
  </thead>
  <tbody>
  <?php 
    $no = 1;
    $query = $_POST['query'];
    if ($query!= '') {
      $select=mysqli_query($conn,"SELECT*FROM datadokter WHERE namadokter LIKE '%$query%' OR dokterspesialis LIKE '%$query%' OR pasien LIKE '%$query%' OR jammasuk LIKE '%$query%'");
    }else{
      $select = mysqli_query($conn, "SELECT * FROM datadokter");
    }

    
    while ($baris=mysqli_fetch_array($select)){
  
  ?>
      <tr>
        <th scope="row"><?php echo $no ?></th>
        <td><?php echo $baris['namadokter'] ?></td>
        <td><?php echo $baris['email'] ?></td>
        <td><?php echo $baris['nohp'] ?></td>
        <td><?php echo $baris['dokterspesialis'] ?></td>
        <td><?php echo $baris['pasien'] ?></td>
        <td><?php echo $baris['jammasuk'] ?></td>
      
          
  
      </tr>
    
   
    </tbody>
    <?php $no++; ?>
    <?php } ?>
 
  </tbody>
</table>
          </div>
        </div>
      </div>
    </header>

  



    <!-- FOOTER -->

    <footer class="page-footer" style="margin-top:500px;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-3 py-3">
            <h3>Unika<span class="text-primary">Hospital.</span></h3>
            <p>melayani anda</p>

           
          </div>
          <div class="col-lg-3 py-3">
            <h5>Link</h5>
            <ul class="footer-menu">
              <li><a href="#">Pasien</a></li>
              <li><a href="#">Security</a></li>
             
            </ul>
          </div>
          <div class="col-lg-3 py-3">
            <h5>Tentang
            </h5>
            <ul class="footer-menu">
              <li><a href="#">Rumah sakit</a></li>
             
            </ul>
          </div>
         

          

        <div class="row">
          <div class="col-sm-12 py-2">
            <p id="copyright">&copy; 2022 <a href="https://macodeid.com/">Kelompok Kami Penuh Kejutan</a>
          </div>
          <div class="col-sm-6 py-2 text-right">
            
           
          </div>
        </div>
      </div>
      <!-- .container -->
    </footer>
    <!-- .page-footer -->

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

    <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/js/theme.js"></script>
  </body>
</html>
Z