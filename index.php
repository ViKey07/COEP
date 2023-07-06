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
    <link rel="icon" href="./assets/Artboard 13.png">
    <title> YBC x COEP </title>
    <link rel="stylesheet" href="/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
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
        .nav-link{
            font-size: small;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .icon-color{
            color: blue;
        }
        .card{
            border: none;
            background-color: #70809014;
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
            transition: transform 0.5s ease;
        }
        .card:hover {
            transform: scale(1.1);
            cursor: pointer;
        }
        .card2{
            border: none;
            box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11);
        }
        .card-img-top{
            background-color: #e7e7e7;
        }
        /* .nav-link{
            color: white;
        } */
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
            margin-bottom: 50%;
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
            max-width: 45%;
            height: auto;
            margin-bottom: 20px;
            object-fit: contain;
        }
        .c-img-lok {
            width: 55%;
            height: auto;
            object-fit: contain;
            margin-bottom: 20px;
            transition: transform 0.5s ease;
        }
        .new-latest-img .c-img {
            width: 50%;
            /* border: 1px solid rgb(225, 225, 225); */
            transition: transform 0.5s ease;
            /* box-shadow: 5px 5px 15px silver; */
        }
        .cat-trans{
            transition: transform 0.5s ease;
        }
        .cat-trans:hover{
            transform: scale(1.2);
        }
        .c-img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }
        .c-img-lok:hover {
            transform: scale(1.1);
            cursor: pointer;
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
            font-size: larger;
            font-weight: 700;
        }
        .prev_price{
            -webkit-text-decoration-line: line-through; /* Safari */
            text-decoration-line: line-through;
        }
        .container{
            justify-content: space-between;
        }
        .comp-logo{
            width: 20%;
        }
        .comp-text{
            padding-top: 3%;
            font-size: small;
            width: 80%;
        }
        .comp-details{
            width: 30%;
        }
        .imp-links{
            width: 15%;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .card-desc{
            font-size: medium;
            font-weight: 500;
            color: gray;
        }
        .button {
            display: inline-block;
            background-color: transparent;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: blue;
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
            background-color: #e7e7e7;
            color: blue;
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
            background-color: #e7e7e7;
            color: blue;
        }
        .search {
            position: absolute;
            left: 49px;
            background-color: #e7e7e7;
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
        .social-img{
            width: 30px;
        }
        .social-div{
            display: flex;
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
                width: 100%;
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
                width: 100%;
                /* border: 1px solid rgb(225, 225, 225); */
                transition: transform 0.5s ease;
                /* box-shadow: 5px 5px 15px silver; */
                margin-bottom: 15%;
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
            .sd{
                flex-direction: column;
            }
            .cat-trans{
                margin-bottom: 2%;
            }
            .last-card{
                height: 375px;
            }
            .justify-content-around {
                justify-content: space-around!important;
                margin-bottom: -100px;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }
            .new-latest-img {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
            }
            .blue-hr-line{
                display: flex;
                justify-content: center;
            }
            #blue-hr {
                width: 50%;
            }
            .new-latest-img .c-img {
                width: 100%;
            }
            .nav-link{
                font-size: small;
                margin-bottom: 5%;
            }
        }

        /* Styles for medium screens (576px - 768px) */
        @media (min-width: 577px) and (max-width: 768px) {
            .home-nav-logo-img {
                width: 25%;
                margin-left: 3%;
            }
        }

        /* Styles for large screens (768px and above) */
        @media (min-width: 769px) {
            .home-nav-logo {
                width: 10%;
            }
            .home-nav-logo-img {
                margin-left: 3%;
                width: 70%;
            }
        }
    </style>

</head>

<body>
    <div class="container-fluid"><h1></h1>
        <nav class="navbar navbar-expand-lg bg-light fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img"></a>
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
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="search-container">
                                <form action="search_product.php" method="get">
                                    <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                                    <label class="button searchbutton cat-trans" for="searchright"><span class="mglass">&#9906;</span></label>
                                </form>
                            </div>
                        </li>
                        <?php
                        if(!isset($_SESSION['user_email'])){
                            echo "<li class='nav-item'>
                                    <a href='./users_area/user_login.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }else{
                            echo "<li class='nav-item'>
                                    <a href='./users_area/profile.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link mx-1 px-2" href="cart.php">
                                <i class="fa fa-shopping-cart m-0 p-0" style="color: blue;"></i>
                                <sup style="background-color: red; color: white; border-radius: 50%; padding: 2px 6px; margin: 0;"><?php echo cart_item(); ?></sup>
                            </a>
                        </li>
                    </ul>
                    <?php
                    cart();
                    ?>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>

        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/1 (3).png" class="d-block w-100" alt="Carousel Image 1">
                </div>
                <div class="carousel-item">
                    <img src="./assets/2 (2).png" class="d-block w-100" alt="Carousel Image 2">
                </div>
                <div class="carousel-item">
                    <img src="./assets/3 (3).png" class="d-block w-100" alt="Carousel Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="my-5">
            <h3 class="text-center">Our Products</h3>
        </div>

        <div class="row d-flex justify-content-evenly my-5 all-cards">
            <div class="col-md-8">
                <div class="row justify-content-around">
                    <?php
                        getproducts();
                        get_unique_categories();
                        
                    ?>
                </div>
            </div>
        </div>

        <?php include('servicebar2.php'); ?>

        <div class="section">
            <div class="">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-3 offer-div">
                        <img src="./assets/3.png" alt="Image 1" class="img-fluid support-img">
                    </div>
                    <div class="text-center col-md-6 offer-text">
                        <p class="display-6">Relieve the memories</p>
                        <p class="display-5 fw-bold">Support your Alma mater.</p>
                        <div class="blue-hr-line">
                            <hr class="blue-hr" id="blue-hr">
                        </div>
                    </div>
                    <div class="col-md-3 offer-div">
                        <img src="./assets/1.png" alt="Image 2" class="img-fluid support-img">
                    </div>
                </div>
            </div>
        </div>


        <?php include('service_bar.php'); ?>


        <section class="section new-latest">
            <div class="product-heading">
                <h2 class="product-list">News</h2>
            </div>
        
            <div class="new-latest-img row">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://theprint.in/ani-press-releases/yearbook-canvas-partners-with-srcc-delhi-to-implement-one-of-its-kind-tech-solution-for-branding-and-marketing-for-the-educational-institute/1444487/" target="_blank"><img class="c-img" src="./assets/logo_the_print.png" alt=""></a>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://www.lokmattimes.com/business/yearbook-canvas-backed-by-marwari-catalysts-secures-usd-150k-in-bridge-funding-to-empower/" target="_blank"><img class="c-img-lok" src="./assets/newlokmat-times1.png" alt=""></a>
                </div>
                
                
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://yourstory.com/herstory/2021/07/woman-entrepreneur-disability-memories-yearbook" target="_blank"><img class="c-img" src="./assets/yourstory-logos-id1A_ZHX5y.png" alt=""></a>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://www.business-standard.com/content/press-releases-ani/former-ceo-of-general-electric-energy-south-asia-nandkumar-dhekne-invests-in-yearbook-canvas-backed-by-marwari-catalysts-ventures-121110100732_1.html" target="_blank"><img class="c-img" src="./assets/Business_Standard_Logo.png" alt=""></a>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://timesofindia.indiatimes.com/beyond-limitations-meet-the-disabled-woman-who-is-positively-impacting-mental-health-with-her-startup-yearbook-canvas/articleshow/82323606.cms" target="_blank"><img class="c-img" src="./assets/1113831.jpg" alt=""></a>
                </div>
                
                
                
                <!-- <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="text-center" href=""><img class="c-img" src="./assets/The_Economic_Times_logo.svg" alt=""></a>
                </div> -->
                <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="d-flex justify-content-center align-items-center m-auto" href="https://www.aninews.in/news/business/business/yearbook-canvas-partners-with-srcc-delhi-to-implement-one-of-its-kind-tech-solution-for-branding-and-marketing-for-the-educational-institute20230315103154/" target="_blank"><img class="c-img" src="./assets/Ani-logo-black.png" alt=""></a>
                </div>
                <!-- <div class="col-lg-4 col-md-6 d-flex justify-content-center news-img">
                    <a class="text-center" href=""><img class="c-img" src="./assets/pngegg.png" alt=""></a>
                </div> -->
            </div>
        </section>
        



            <footer class="custom-bg text-light py-3">
                <div class="container d-flex">
                    <div class="comp-details">
                        <img class="comp-logo" src="./assets/logo_ybc.png" alt="">
                        <p class="comp-text">Your special moments are sacredly treasured in a yearbook. We strive to deliver your special moments bringing you and your people closer.</p>
                    </div>
                    <div class="imp-links">
                        <thead><h5 class="text-center">Important links:</h5></thead>
                        <tbody>
                            <div class="foot-links">
                            <td><a class="nav-link text-light py-0" aria-current="page" href="index.php">Home</a></td>
                            <td><a class="nav-link text-light py-0" href="#">About Us</a></td>
                            <td><a class="nav-link text-light py-0" href="contact_form.php">Contact Us</a></td>
                            </div>
                        </tbody>
                    </div>

                    <div class="imp-links">
                        <thead><h5 class="text-center">Important links:</h5></thead>
                        <tbody>
                            <div class="foot-links">
                            <td><a class="nav-link text-light py-0" href="terms_conditions.php">Terms and Conditions</a></td>
                            <td><a class="nav-link text-light py-0" href="privacy_policy.php">Privacy & Return Policy</a></td>
                            </div>
                        </tbody>
                    </div>

                    <div class="imp-links text-center">
                        <thead><h5>Social links:</h5></thead>
                        <tbody class="social-div">
                            <div class="d-flex justify-content-center mt-4 m-auto sd">
                            <td><a class="nav-link text-light py-0 cat-trans" aria-current="page" href="https://www.facebook.com/Yearbookcanvas" target="_blank"><img class="social-img" src="./assets/facebook (4).png" alt=""></a></td>
                            <td><a class="nav-link text-light py-0 cat-trans" href="https://www.instagram.com/yearbookcanvas/?hl=en" target="_blank"><img class="social-img" src="./assets/instagram (3).png" alt=""></a></td>
                            <td><a class="nav-link text-light py-0 cat-trans" href="https://www.linkedin.com/company/yearbookcanvas/mycompany/" target="_blank"><img class="social-img" src="./assets/linkedin (1).png" alt=""></a></td>
                            </div>
                        </tbody>
                    </div>
                </div>
            </footer>
    </div>




    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <p id="messageText"></p>
            </div>
          </div>
        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>