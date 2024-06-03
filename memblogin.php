
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


    <body>
        <section class="login  d-flex flex-column align-items-center justify-content-center py-4">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <form class="row g-3" action="memblogin_code.php" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                                <label for="inputTitle5" class="form-label">Username</label>
                                <input type="text" class="form-control" id="inputTitle5" name="username" placeholder="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-4 col-12">
                                <label for="inputTitle5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                            </div>

                            <div>

                                <!-- <a href="./dashboard/orders/create.php" name="login">Login -->


                                    <button  name="login" type="submit"> login</button>
                                    <!-- <button class="btn btn-primary" name="login">Login</button> -->

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

</html>