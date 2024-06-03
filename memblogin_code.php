<?php require("./dashboard/connection/config.php"); ?>


<?php
            session_start();

            if (isset($_POST['login'])) {
                $name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $log_query = "SELECT *FROM users WHERE username='$name' && email='$email' && password='$password'";
                $log_query_run = mysqli_query($con, $log_query);
                if (mysqli_num_rows($log_query_run) > 0) {
                    foreach ($log_query_run as $row) {
                        $user_id = $row['id'];
                        $user_name = $row['username'];
                        $user_email = $row['email'];
                        $user_password = $row['password'];
                    }
                    $_SESSION['auth'] = true;
                    $_SESSION['auth_user'] = [
                        'user_id' => $user_id,
                        'user_name' => $user_name,
                        'user_email' => $user_email,
                        'user_password' => $user_password
                    ];
                    $_SESSION['place'] = true;
                    $_SESSION['status'] = "logged in successfully";
                    include("dashboard/message.php");
                     echo " your order is placed";

                     header("Location:place_order.php");
                    

                } 
                else {
                    $_SESSION['status'] = "lnvalid email or password";
                    include("dashboard/message.php");
                }
            } else {
                // $_SESSION['status'] = "Access Denied";
                // include("dashboard/message.php");
                echo "<script> alert('invalid code') </script>";
    
            }


            ?>