
<?php require("dashboard/connection/config.php") ?>

<?php
if (isset($_POST['submit'])) {
  $count= count($_POST["cate"]);
  $cate = $_POST['cate'];

  $count2=count($_POST["size"]);
  $size = $_POST['size'];

  $count3=count($_POST["piece"]);
  $piece = $_POST['piece'];

  if($count>1 && $count2>1 && $count3){
    for($i=0; $i<$count && $i<$count2 && $i<$count3; $i++){
      if(trim($_POST["cate"][$i]!='') && trim($_POST["size"][$i]!='') && trim($_POST["piece"][$i]!='')){
        $sql=mysqli_query($con,"INSERT INTO orders(cate, size, piece) values('$cate[$i]', '$size[$i]', '$piece[$i]')");
      }
    }
    echo "<script>alert('Order placed successfully');</script>";
}
else
{
echo "<script>alert('Please enter your order properly');</script>";
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <script src="https://kit.fontawesome.com/2a669ac15d.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
            <a class="nav-link" aria-current="page" href="http://localhost/summerproject/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/summerproject/get_member.php">Get Membership</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/summerproject/memblogin.php">Place Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="order py-5">
    <div class="container">
      <h2 class="align-center">Place Your Order</h2><br />
      <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field">
              <tr>
                <td><input type="text" name="cate[]" placeholder="Enter type of category" class="form-control name_list" /></td>
                <td><input type="number" name="size[]" placeholder="Enter your Size" class="form-control name_list" />
                </td>
                <td><input type="number" name="piece[]" placeholder="Enter required piece" class="form-control name_list" />
                </td>
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
              </tr>
            </table>
            <button class="btn btn-info" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      var i = 1;
      $('#add').click(function() {
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="cate[]" placeholder="Enter type of category" class="form-control name_list" /></td>  <td><input type="number" name="size[]" placeholder="Enter your Size" class="form-control name_list" /></td><td><input type="number" name="piece[]" placeholder="Enter required piece" class="form-control name_list" /></td> <td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
      });

      $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });
    });
  </script>



  <section class="align-center">
    <div class="note">
      <h3>Disclimar</h3>
      <p>The smallest size of the shirt start form 18 and highest size is 31 </p>
      <p>The smallest size for pant and shirt start form 19 and highest size is 36 </p>
    </div>
  </section>


  <!-- footer section starts -->
  <footer class="bg-secondary text-white pt-5 pb-4">

    <div class="container text-center">
      <div class="row text-center">

        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
          <h1 class="text-uppercase" style="color: black;">SiddhiBinayak</h1>
          <p>SiddhiBinayak is highly active in manufacturing schools and college dresses with high quality and good
            finishing. Since 2076 it has been providing goods and services to customers. </p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>