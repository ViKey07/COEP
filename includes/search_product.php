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
        .row{
            justify-content: center;
        }
        .card{
            border: none;
            background-color: #70809014;
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; */
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
        }
        .card2{
            border: none;
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; */
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
        }
        .card-img-top{
            background-color: #e7e7e7;
        }
        .nav-link{
            color: white;
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
        
        .carousel-control-prev,
        .carousel-control-next {
            font-weight: bold;
            color: white;
        }

        .category-image{
            height: 60vh;
        }

        #blue-hr {
            border-top: 2px solid #3A3086;
        }
        .product-list{
            margin-bottom: 20%;
        }
        .new-latest {
            display: flex;
            margin: 4% 1%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .new-latest-img {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 100%;
        }
        .c-img {
            max-width: 30%;
            height: auto;
            margin-bottom: 20px;
            object-fit: contain;
        }
        .new-latest-img .c-img {
            width: 50%;
            border: 1px solid rgb(225, 225, 225);
            transition: transform 0.5s ease;
            box-shadow: 5px 5px 15px silver;
        }
        .text-color{
            color: #3A3086;
        }
        .cat-trans{
            transition: transform 0.5s ease;
        }

        .cat-trans:hover{
            transform: scale(1.1);
        }

        .c-img:hover {
            transform: scale(1.1);
        }
        .custom-bg {
            background-color: #3A3086;
        }
        .display-content{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }
        .card-product-title{
            text-decoration: none;
            color: #3A3086;
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
            .card {
                width: 80%;
                height: 500px;
                margin-bottom: 6em;
            }
            .card-img-top{
                background-color: #e7e7e7;
                object-fit: contain;
            }
            .col-pad{
                justify-content: center;
                display: flex;
                align-items: center;
                padding: 0;
                margin: 0;
            }
            .category-image{
                object-fit: cover;
            }
            .card-details {
                background-color: #e7e7e7;
            }
            .new-latest-img{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }
            img.c-img {
                width: 70%;
                border: 1px solid rgb(225, 225, 225);
                transition: transform 0.5s ease;
                box-shadow: 5px 5px 15px silver;
            }
            .cat-align{
                flex-direction: column;
            }
            .all-cards{
                display: flex;
            }
            .category-image{
                height: 55vh;
            }
            .offer-div{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .offer-text{
                padding: 2em;
            }
            .support-img{
                width: 60%;
            }
            .display-content{
                display: contents;
            }
            .comp-details{
                display: none;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/logo_ybc.png" alt="home-logo" class="home-nav-logo-img" style="width: 15%;"></a>
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
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact_form.php">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                <i class="fa fa-shopping-cart" style="color: #3A3086;"></i>
                                <sup style="background-color: red; color: white; border-radius: 50%; padding: 2px 6px;"><?php echo cart_item(); ?></sup>
                            </a>
                        </li>
                        

                        
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-primary" name="search_data_product">
                    </form>
                    
                    <?php
                        cart();
                    ?>
                    
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav me-auto display-content">
            
            
            <?php

                if(!isset($_SESSION['user_email'])){
                    echo "<li class='nav-item'>
                    <a href='#' class='nav-link'>Welcome Guest</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a href='#' class='nav-link'>".$_SESSION['user_email']."</a>
                </li>";
                }
                
                if(!isset($_SESSION['user_email'])){
                    echo "<li class='nav-item'>
                    <a href='./users_area/user_login.php' class='nav-link'>Login</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a href='./users_area/logout.php' class='nav-link'>Logout</a>
                </li>";
                }
            ?>
            
            </ul>
        </nav>


        <?php
            cart();
        ?>



        <div class="bg-light">
            <h3 class="text-center text-color py-2">Matching results for your serach</h3>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="row py-5">
                    <?php
                        search_product();
                        get_unique_categories();
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
                            <td><a class="nav-link active py-0" aria-current="page" href="index.php">Home</a></td>
                            <td><a class="nav-link py-0" href="#">About Us</a></td>
                            <td><a class="nav-link py-0" href="contact_form.php">Contact Us</a></td>
                        </tbody>
                    </div>
                    <div class="imp-links">
                        <thead><h5>Social:</h5></thead>
                        <tbody>
                            <td><a class="nav-link active py-0" aria-current="page" href="https://www.facebook.com/Yearbookcanvas" target="_blank">Facebook</a></td>
                            <td><a class="nav-link py-0" href="https://www.instagram.com/yearbookcanvas/?hl=en" target="_blank">Instagram</a></td>
                            <td><a class="nav-link py-0" href="https://www.linkedin.com/company/yearbookcanvas/mycompany/" target="_blank">LinkedIn</a></td>
                        </tbody>
                    </div>
                </div>
                <hr class="text-light w-100">
                <div class="foot-last"><p class="text-sm-center m-0">© 2023 YearBook Canvas. All Rights Reserved.</p></div>
            </footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>