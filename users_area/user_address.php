<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
    @session_start();
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
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .home-nav-logo-img {
            width: 100%;
            margin-left: 5%;
        }
        @media (max-width: 576px) {
            .full-navi-cont{
                flex-wrap: nowrap;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light full-navi-cont">
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
        <h2 class="text-center"> User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">

                <form action="" method="post">
                    <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_address" class="form-label">Address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="Enter Address" autocomplete="off" required name="user_address"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Enter contact number" autocomplete="off" required name="user_contact"/>
                    </div>

                    <div class="mt-4 pt-2 w-50 m-auto">
                        <input type="submit" value="Login" class="btn btn-primary py-2 px-3 border-0" name="user_login">
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-Rd1ShXYvd2c8Kil/wT5YlgYbYsMCfLGFQFYOMc43FbzX+R8vjvyzX9jtrXJLN32L" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-Rd1ShXYvd2c8Kil/wT5YlgYbYsMCfLGFQFYOMc43FbzX+R8vjvyzX9jtrXJLN32L" crossorigin="anonymous"></script>
</body>
</html>


<?php
    global $con;
    if(isset($_POST['user_login'])){
        $user_address = $_POST['user_address'];
        $user_contact = $_POST['user_contact'];

        $select_query = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
        $result = mysqli_query($con, $select_query);

        $row_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);
        $user_ip = getIPAddress();

        $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
        $select_cart = mysqli_query($con, $select_query_cart);
        $row_count_cart = mysqli_num_rows($select_cart);

        if($row_count > 0){
            $_SESSION['user_email'] = $user_email;
            if(password_verify($user_password, $row_data['user_password'])){
                // echo "<script>alert('Login Successful!')</script>";
                if($row_count == 1 and $row_count_cart == 0){
                    $_SESSION['user_email'] = $user_email;
                    echo "<script>alert('Login Successful!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                }else{
                    $_SESSION['user_email'] = $user_email;
                    echo "<script>alert('Login Successful!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                }
            }else{
                echo "<script>alert('Invalid credentials!')</script>";
            }
        }else{
            echo "<script>alert('Invalid credentials!')</script>";
        } 
    }
?>