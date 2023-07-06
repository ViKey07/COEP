<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');

    // require_once 'path/to/google-api-php-client/vendor/autoload.php';

    if(isset($_POST['user_register'])){
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
        $conf_user_password = $_POST['conf_user_password'];
        $user_ip = $_SERVER['REMOTE_ADDR']; // Get the user's IP address using the built-in $_SERVER['REMOTE_ADDR'] variable

        $select_query = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);
        if($rows_count > 0){
            echo "<script>alert('email already exists!')</script>";
        }else if($user_password != $conf_user_password){
            echo "<script>alert('Passwords do not match!')</script>";
        }else{
            $insert_query = "INSERT INTO `user_table` (user_email, user_password, user_ip) VALUES ('$user_email', '$hash_password', '$user_ip')";
            $sql_execute = mysqli_query($con, $insert_query);
        }

        $select_cart_items = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
        $result_cart = mysqli_query($con, $select_cart_items);
        $rows_count = mysqli_num_rows($result_cart);
        if($rows_count > 0){
            $_SESSION['user_email'] = $user_email;
            echo "<script>alert('You have items in your cart')</script>";
            echo "<script>window.open('checkout.php', '_self')</script>";
        }else{
            echo "<script>window.open('user_login.php', '_self')</script>";
        }
    }


    $client = new Google_Client(['client_id' => '215792497641-k8483mpf67k4qhsv5e4bj0q98mal6lq8.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($_POST['idtoken']);
    if ($payload) {
    // Verification successful
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Store the user's information in your user_table
    // ...
    // Return a success response to the client
    http_response_code(200);
    } else {
    // Verification failed
    // Return an error response to the client
    http_response_code(401);
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html{
            font-family: 'Poppins';
        }
        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .container-fluid{
            margin: 0;
            padding: 0;
        }
        div.home-nav-logo{
            width: 10%;
        }
        .home-nav-logo-img {
            width: 70%;
            margin-left: 3%;
        }

        .navbar-nav{
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: blue;
            font-weight: 600;
        }

        .nav-link{
            margin: 0 0.5em;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .home-nav-logo-img {
            width: 70%;
            margin-left: 10%;
        }
        @media (max-width: 576px) {
        html{
            padding: 0;
            margin: 0;
        }
        body{
            padding: 0;
            margin: 0;
        }
        .container-fluid {
            margin: 0;
            padding: 0;
        }
        .home-nav-logo {
            width: 100%;
        }
        .home-nav-logo-img {
            margin-left: 3%;
            width: 100%;
        }
        .navbar-expand-lg {
            padding: 0.5em 1em;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        }
    </style>
</head>
<body>
<div class="container-fluid my-3">
<nav class="navbar navbar-expand-lg bg-light fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="../index.php"><img src="../assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img"></a>
                </div>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link m-0" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="contact_form.php">Contact Us</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>
    
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter email" autocomplete="off" required name="user_email"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="user_password"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" autocomplete="off" required name="conf_user_password"/>
                    </div>

                    

                    <div class="mt-4 pt-2 w-50 m-auto">
                        <input type="submit" value="Register" class="btn btn-primary py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1">Already have an account ? <a href="user_login.php" class="text-danger">Login</a></p>

                        <hr>
    
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


