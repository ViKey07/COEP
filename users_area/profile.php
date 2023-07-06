<?php 
    include('../includes/connect.php');
    include('../functions/common_function.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .navbar-expand-lg{
            background-color: #3A3086;
            padding: 0.5em 0.5em;  
        }
        .navbar-nav{
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: blue;
            font-weight: 600;
        }
        .nav-item1 {
            background-color: #3A3086;
        }
        .row{
            height: 60vh;
        }
        .navbar-nav2{
            height: 53vh;
            padding-left: 0;
            background-color: #ececec;
        }
        .custom-bg {
            background-color: #3A3086;
        }
        .container{
            justify-content: space-around;
        }
        .nav-link{
            color: black;
            text-decoration: none;
            list-style-type: none;
        }
        .nav-item1{
            color: white;
            text-decoration: none;
            list-style-type: none;
        }
        .nav-item{
            color: white;
            text-decoration: none;
            list-style-type: none;
        }
        .comp-logo{
            width: 20%;
        }
        .comp-text{
            padding-top: 3%;
        }
        .comp-details{
            width: 30%;
        }
        .imp-links{
            width: 30%;
        }
        .container{
            justify-content: space-between;
        }
        .comp-logo{
            width: 20%;
        }
        .comp-text{
            padding-top: 3%;
        }
        .comp-details{
            width: 30%;
        }
        .imp-links{
            width: 30%;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .social-img{
            width: 30px;
        }
        .social-div{
            display: flex;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 576px) {
            .container-fluid {
                margin: 0;
                padding: 0;
            }
            .home-nav-logo {
                width: 100%;
            }
            .home-nav-logo-img {
                margin-left: 0;
                width: 100%;
            }
            .navbar-expand-lg {
                padding: 0.5em 1em;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }
            .comp-details{
                display: none;
            }
            .thead {
                display: none;
            }
            footer{
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
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
                            <a class="nav-link m-0" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="../about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="../contact_form.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">

                        <?php
                        if(!isset($_SESSION['user_email'])){
                            echo "<li class='nav-item'>
                                    <a href='../users_area/user_login.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }else{
                            echo "<li class='nav-item'>
                                    <a href='../users_area/profile.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>


        <div class="row">
            <div class="col-md-2">
                <ul class="navbar-nav2 text-center my-4">
                    <li class="nav-item1">
                        <h4 class="nav-link text-light">Your profile</h4>
                    </li>

                    <?php 
                        $user_email = $_SESSION['user_email'];
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Pending orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?edit_account">Edit account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?my_orders">My orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?delete_account">Delete account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 text-center">
                <?php 
                    get_user_order_details();
                    if(isset($_GET['edit_account'])){
                        include('edit_account.php');
                    }
                    if(isset($_GET['my_orders'])){
                        include('user_orders.php');
                    }
                    if(isset($_GET['delete_account'])){
                        include('delete_account.php');
                    }
                ?>
            </div>
        </div>

        


    </div>

    <footer class="custom-bg text-light py-3">
                <div class="container d-flex">
                    <div class="comp-details">
                        <img class="comp-logo" src="../assets/logo_ybc.png" alt="">
                        <p class="comp-text">Your special moments are sacredly treasured in a yearbook. We strive to deliver your special moments bringing you and your people closer.</p>
                    </div>
                    <div class="imp-links text-center">
                        <thead><h5>Important links:</h5></thead>
                        <tbody>
                            
                            <td><a class="nav-link text-light py-0" aria-current="page" href="index.php">Home</a></td>
                            <td><a class="nav-link text-light py-0" href="#">About Us</a></td>
                            <td><a class="nav-link text-light py-0" href="contact_form.php">Contact Us</a></td>
                            
                        </tbody>
                    </div>
                    <div class="imp-links text-center">
                        <thead><h5>Social links:</h5></thead>
                        <tbody class="social-div">
                            <div class="d-flex justify-content-center mt-4 m-auto sd">
                            <td><a class="nav-link text-light py-0 cat-trans" aria-current="page" href="https://www.facebook.com/Yearbookcanvas" target="_blank"><img class="social-img" src="../assets/facebook (4).png" alt=""></a></td>
                            <td><a class="nav-link text-light py-0 cat-trans" href="https://www.instagram.com/yearbookcanvas/?hl=en" target="_blank"><img class="social-img" src="../assets/instagram (3).png" alt=""></a></td>
                            <td><a class="nav-link text-light py-0 cat-trans" href="https://www.linkedin.com/company/yearbookcanvas/mycompany/" target="_blank"><img class="social-img" src="../assets/linkedin (1).png" alt=""></a></td>
                            </div>
                        </tbody>
                    </div>
                </div>
                <!-- <hr class="text-light w-100">
                <div class="foot-last"><p class="text-sm-center m-0">© 2023 YearBook Canvas. All Rights Reserved.</p></div> -->
            </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>