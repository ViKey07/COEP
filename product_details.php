<?php 
    include('includes/connect.php');
    include('functions/common_function.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecommerce</title>
        <link rel="stylesheet" href="/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#product-images').slick({
                    dots: true,

                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            });
        </script>
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
            width: 60%;
        }
        .home-nav-logo-img {
            width: 100%;
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
        .nav-link{
            margin: 0 0.5em;
        }
        .nav-item{
            color: white;
        }
        .btn-primary {
            color: #fff;
            background-color: #3A3086;
            border-color: #3A3086;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            /* box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11); */
        }
        .form-control{
            border-radius: 0;
            border-color: #3A3086;
        }
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .custom-bg {
            background-color: #3A3086;
        }
        .container{
            justify-content: space-around;
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
        .icon-color{
            color: blue;
        }
        .card-product-title{
            text-decoration: none;
            color: #3A3086;
            font-size: x-large;
            font-weight: 700;
        }
        .prev_price{
            -webkit-text-decoration-line: line-through; /* Safari */
            text-decoration-line: line-through;
        }

        .button {
            display: inline-block;
            background-color: blue;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: white;
            text-decoration: none;
            cursor: pointer;
            user-select: none;
            border-radius: 50%;
        }

        .button:hover {
            transition-duration: 0.4s;
            -moz-transition-duration: 0.4s;
            -webkit-transition-duration: 0.4s;
            -o-transition-duration: 0.4s;
            background-color: white;
            color: black;
        }

        .search-container {
            position: relative;
            display: inline-block;

            height: 40px;
            width: 40px;
            vertical-align: bottom;
        }

        .mglass {
            display: inline-block;
            pointer-events: none;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
        }

        .searchbutton {
            position: absolute;
            font-size: 35px;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .search:focus + .searchbutton {
            transition-duration: 0.4s;
            -moz-transition-duration: 0.4s;
            -webkit-transition-duration: 0.4s;
            -o-transition-duration: 0.4s;
            background-color: white;
            color: black;
        }

        .search {
            position: absolute;
            left: 49px;
            background-color: white;
            outline: none;
            border: none;
            padding: 0;
            width: 0;
            height: 100%;
            z-index: 10;
            transition-duration: 0.4s;
            -moz-transition-duration: 0.4s;
            -webkit-transition-duration: 0.4s;
            -o-transition-duration: 0.4s;
        }

        .search:focus {
            width: 120px; /* Bar width+1px */
            padding: 0 16px 0 0;
            border-radius: 50px;
        }

        .expandright {
            left: auto;
            right: 49px; /* Button width-1px */
        }

        .expandright:focus {
            padding: 0 0 0 16px;
        }


        



        @media (max-width: 576px) {
            html{
                padding: 0;
                margin: 0;
            }
            body{
                padding: 0;
                margin: 0;
                font-family: 'Poppins';
            }
            .container-fluid {
                margin: 0;
                padding: 0;
            }
            .home-nav-logo {
                width: 100%;
            }
            .home-nav-logo-img {
                margin-left: 0;
                width: 40%;
            }
            .navbar-expand-lg {
                padding: 0.5em 1em;
            }
        }

        /* Styles for medium screens (576px - 768px) */
        @media (min-width: 577px) and (max-width: 768px) {
            .home-nav-logo-img {
                width: 30%;
                margin-left: 3%;
            }
        }

        /* Styles for large screens (768px and above) */
        @media (min-width: 769px) {
            .home-nav-logo {
                width: 60%;
            }
            .home-nav-logo-img {
                margin-left: 3%;
                width: 100%;
            }
        }

        


    </style>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact_form.php">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                <i class="fa fa-shopping-cart m-0 p-0" style="color: blue;"></i>
                                <sup style="background-color: red; color: white; border-radius: 50%; padding: 2px 6px; margin: 0;"><?php echo cart_item(); ?></sup>
                            </a>
                        </li>
                        
                        <?php

                        if(!isset($_SESSION['user_email'])){
                            echo "<li class='nav-item'>
                            <a href='./users_area/user_login.php' class='icon-color px-2 mx-3'><i class='fas fa-user'></i></a>
                        </li>";
                        }else{
                            echo "<li class='nav-item'>
                            <a href='./users_area/profile.php' class='icon-color px-2 mx-3'><i class='fas fa-user'></i></a>
                        </li>";
                        }
                        ?>

                        <div class="search-container">
                            <form action="search_product.php" method="get">
                                <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                                <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
                            </form>
                        </div>

                        
                    </ul>

                    <?php
                        cart();
                    ?>
                    
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>

        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-md-10">
                <div class="row d-flex justify-content-around align-items-center">
                    <?php
                    if (isset($_GET['size'])) {
                        $selected_size = $_GET['size'];
                    } else {
                        $selected_size = ""; // Set a default value if 'size' is not set
                    }
                    
                    viewdetails($_GET['product_id'], $selected_size);
                    ?>
                </div>
            </div>
        </div>

    </div>





    <footer class="custom-bg text-light text-center py-3">
        <div class="container d-flex">
            <div class="comp-details">
                <img class="comp-logo" src="./assets/logo_ybc.png" alt="">
                <p class="comp-text">Your special moments are sacredly treasured in a yearbook. We strive to deliver your special moments bringing you and your people closer.</p>
            </div>
            <div class="imp-links">
                <thead><h5>Important links:</h5></thead>
                <tbody>
                    <td><a class="nav-link text-light py-0" aria-current="page" href="index.php">Home</a></td>
                    <td><a class="nav-link text-light py-0" href="#">About Us</a></td>
                    <td><a class="nav-link text-light py-0" href="contact_form.php">Contact Us</a></td>
                </tbody>
            </div>
            <div class="imp-links">
                <thead><h5>Social:</h5></thead>
                <tbody>
                    <td><a class="nav-link text-light py-0" aria-current="page" href="https://www.facebook.com/Yearbookcanvas" target="_blank">Facebook</a></td>
                    <td><a class="nav-link text-light py-0" href="https://www.instagram.com/yearbookcanvas/?hl=en" target="_blank">Instagram</a></td>
                    <td><a class="nav-link text-light py-0" href="https://www.linkedin.com/company/yearbookcanvas/mycompany/" target="_blank">LinkedIn</a></td>
                </tbody>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




