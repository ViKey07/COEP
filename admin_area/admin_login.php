<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();

if(isset($_SESSION['admin_name'])){
    // Admin is already logged in, redirect to index.php
    header('Location: index.php');
    exit();
}

if(isset($_POST['admin_login'])){
    // Login form submission
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    $select_query = "SELECT * FROM `admin_table` WHERE admin_name = '$admin_name'";
    $result = mysqli_query($con, $select_query);

    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $admin_ip = getIPAddress();

    if($row_count > 0){
        if(password_verify($admin_password, $row_data['admin_password'])){
            $_SESSION['admin_name'] = $admin_name;
            echo "<script>alert('Login Successful!')</script>";
            header('Location: index.php');
            exit();
        }else{
            echo "<script>alert('Invalid credentials!')</script>";
        }
    }else{
        echo "<script>alert('Invalid credentials!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .home-nav-logo-img {
            width: 100%;
            margin-left: 5%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="home-nav-logo">
            <a href="../index.php"><img src="../assets/logo_ybc.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid my-3">
    <h2 class="text-center">Admin Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="lg-12 col-xl-6">
            <form action="" method="post">
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="admin_name" class="form-label">Username</label>
                    <input type="text" id="admin_name" class="form-control" placeholder="Enter username" autocomplete="off" required name="admin_name"/>
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="admin_password" class="form-label">Password</label>
                    <input type="password" id="admin_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="admin_password"/>
                </div>

                <div class="mt-4 pt-2 w-50 m-auto">
                    <input type="submit" value="Login" class="btn btn-primary py-2 px-3 border-0" name="admin_login">
                    <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="admin_registration.php" class="text-danger">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-Rd1ShXYvd2c8Kil/wT5YlgYbYsMCfLGFQFYOMc43FbzX+R8vjvyzX9jtrXJLN32L" crossorigin="anonymous"></script>
</body>
</html>

