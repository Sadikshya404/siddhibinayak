<?php
require("dashboard/connection/config.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="admin/assets/css/getstyle.css">
  <script src="https://kit.fontawesome.com/2a669ac15d.js" crossorigin="anonymous"></script>
  <title>SiddhiBinayak</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light  mt-3" style="background-color: #009dd1;">
    <div class="container-fluid">
      <div class="title text-black fs-3 fw-bold">
        <h2>SiddhiBinayak</h2>
      </div>
      <div class="collapse navbar-collapse px-5 " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto  ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/summerproject/get_member.php">Get Membership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/summerproject/get_member.php">Place Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- title section    -->

  <section class="py-5" style="background-color: white;">
    <div class="container">
      <div class="row g-3">
        <?php
        $about = "SELECT * FROM logos";
        $about_result = mysqli_query($con, $about);
        $about_data = mysqli_fetch_assoc($about_result);
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="logo "> <img src=" dashboard/image/<?php echo $about_data['img']; ?>" alt="not found" height="200px">
            <h3><?php echo $about_data['title']; ?></h3>
            <p><?php echo $about_data['description']; ?></p>
            <!-- <button type="button" class="btn btn-primary">About Us</button> -->
          </div>
        </div>
        <!-- end title section    -->

        <!-- about section    -->
        <?php
        $about = "SELECT *FROM abouts";
        $about_result = mysqli_query($con, $about);
        $about_data = mysqli_fetch_assoc($about_result);
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="title">
            <h1><?php echo $about_data['title']; ?></h1>
            <p class="about us fs-5"><?php echo $about_data['description']; ?> </p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- end about section -->

  <!-- card section start -->
  <section class="py-5" style="background-color: #009dd1;">
    <div class="container ">
      <div class="row g-3">
        <?php
        $about = "SELECT * FROM cards ";
        $about_result = mysqli_query($con, $about);
        while ($about_data = mysqli_fetch_assoc($about_result)) {
        ?> 
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="card">
            <img src=" dashboard/image/<?php echo $about_data['img']; ?>" class="card-img-top" alt="img not found" style="width: 100%; height: 250px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $about_data['title']; ?></h5>
              <p class="card-text"><?php echo $about_data['description']; ?></p>
            </div>
          </div>
        </div>
      <?php  
      }
      ?>
      </div>
    </div>
  </section>
  <!-- card section ends -->


  <!-- service section starts -->
  <section class="py-5" style="background-color: white" ;>
    <div class="container">
      <div class="service text-center">
        <h2>Our Services</h2>
      </div>
      <div class="row g-3">

        <?php
        $about = "SELECT *FROM services";
        $about_result = mysqli_query($con, $about);
      
        while ($about_data = mysqli_fetch_assoc($about_result)) {
        ?> <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card" style="object-fit: cover; width: 100%; ">
              <div class="card-body">
                <h5 class="card-title"><?php echo $about_data['title'] ?></h5>
                <p class="card-text"><?php echo $about_data['description'] ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- service section ends -->


  <!-- footer section starts -->
  <footer class="bg-secondary text-white pt-5 pb-4">

    <div class="container text-center">
      <div class="row text-center">

        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
          <h1 class="text-uppercase" style="color: black;">SiddhiBinayak</h1>
          <p>SiddhiBinayak is highly active in manufacturing schools and college dresses with high quality and good
            finishing. Since 2076 it has been providing goods and services to customers. </p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 ">
          <h3 class="text-uppercase" style="color: black;">Products</h3>

          <p>
            <a href="#" class="text-white" style="text-decoration: none;">About Us</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">Contact Us</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">Get MemberShip</a>
          </p>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12" id="contact">
          <h3 class="text-uppercase" style="color: black;"> Contacts</h3>
          <p>
            <i class="fas fa-home"></i> New Road-9 Pokhara
          </p>
          <p>
            <i class="fas fa-envelope"></i> nishangautam@gmail.com
          </p>
          <p>
            <i class="fas fa-phone"></i> 9806512341
          </p>
        </div>

      </div>

      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 ">
          <p>Copyright &copy;2024 All rights reserved</p>
        </div>
      </div>
    </div>


  </footer>
  <!-- footer section ends -->

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="get_member.php">2</a></li>
    <li class="page-item"><a class="page-link" href="memblogin.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>