<?php require("dashboard/connection/config.php") ?>

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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" http://localhost/summerproject/get_member.php">Get Membership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/summerproject/memblogin.php">Place Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    function validate_phone($phone)
    {
      return preg_match('/^[0-9]{10}$/', $phone);
    }

    function validate_name($name)
    {
      return preg_match('/^[a-zA-Z\s]+$/', $name);
    }

    if ($name != "" && $phone != "" && $email != "" && $password != "" && $gender != "") {
      // print_r($_POST);
      if (validate_name($name)) {
        if (validate_phone($phone)) {
          $query = "INSERT INTO users(username, phone, email, password, gender) 
          VALUES ('$name', '$phone', '$email', '$password','$gender')";
          $result = mysqli_query($con, $query);
          if ($result) {
            session_start();
            $_SESSION['status'] = "user add successfully";
            echo " your membership is register successfully!!!";
            // header("Location: memb_order.php");
          } else {
            $_SESSION['status'] = "Invalid Phone Number";
            include("dashboard/message.php");
          }
        } else {
          $_SESSION['status'] = "Invalid Name. Only letters and spaces are allowed.";
          include("dashboard/message.php");
        }
      } else {
        $_SESSION['status'] = "invalid information";
        include("dashboard/message.php");
      }
    }
  }

  ?>
  <div class="main py-5">
    <div class="member">
      <h2>Get MemberShip</h2>
      <form action="" enctype="multipart/form-data" id="member" method="post">
        <label>User_Name :</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required> <br><br>

        <label>Phone No :</label><br>
        <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone No."> <br><br>

        <label>Mail :</label><br>
        <input type="email" name="email" id="mail" placeholder="Enter Your valid email" required> <br><br>
        <label>Password:</label><br>
        <input type="password" name="password" id="password" placeholder="Enter Your password"> <br><br>

        <label>Gender :</label><br>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="gender" id="male" value="1">
        &nbsp;
        <span id="male">Male</span>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="gender" id="female" value="0">
        &nbsp;
        <span id="female">Female</span> <br><br>

        <input type="submit" value="Submit" name="submit" id="submit">


      </form>
    </div>
  </div>



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

        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>