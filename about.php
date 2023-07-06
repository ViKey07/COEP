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
        .card-img-top{
            background-color: #e7e7e7;
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
        .icon-color{
            color: blue;
        }
        .nav-item{
            color: white;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .btn-primary {
            color: #fff;
            background-color: blue;
            border-color: blue;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            /* box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11); */
        }
        .form-control{
            border-radius: 0;
            border-color: #3A3086;
        }
        .btn{
            background-color: blue;
            border-radius: 0;
            font-weight: 600;
            font-size: x-large;
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
        .comp-details1{
            width: 80%;
        }
        .imp-links{
            width: 30%;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .row{
            align-items: center;
            justify-content: center;
            padding: 0;
        }
        .l-logo-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #70809014;
        }

        .l-logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            object-fit: contain;
            padding: 1em;
            
        }

        .l-box{
            transition: transform 0.5s ease, background-color 0.3s ease;
        }

        .l-box:hover {
            background-color: blue;
            cursor: context-menu;
            object-fit: contain;

            transition: transform 0.5s ease;
            .l-title{
                color: aqua;
                transition: color 0.5s ease;
            }
            .l-info{
                color: white;
                transition: color 0.5s ease;
            }
        }

        .l-img-1 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-2 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-3 {
            width: 20%;
            height: 6vh;
            object-fit: contain;
        }

        .l-img-4 {
            width: 35%;
            height: 6vh;
            object-fit: contain;
        }

        .l-title {
            font-size: large;
            font-weight: 600;
            color: #707070;
        }

        .l-detailss {
            width: 100%;
        }

        .l-info {
            font-size: medium;
            font-weight: 600;
            padding: 0;
            margin: 0;
            color: gray;
        }

        .italic {
            font-style: italic;
        }

    @media only screen and (max-width: 768px) {
        
        .l-logo-container {
            flex-direction: column;
            padding: 2em 0;
        }

        .l-logo {
            margin-bottom: 2em;
        }

        .l-img-1,
        .l-img-2 {
            width: 20%;
            height: auto;
            object-fit: contain;
        }

        .l-img-3,
        .l-img-4 {
            width: 15%;
            height: auto;
            object-fit: contain;
        }

        .l-detailss {
            font-size: larger;
        }
    }

    .l-arrows {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.l-arrow {
    width: 40px;
    height: 40px;
    border: 3px solid blue;
    border-radius: 50%;
    color: blue;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: xxx-large;
    cursor: pointer;
    box-sizing: border-box; /* Add this property to include the border size in width and height calculations */
}

.l-previous-arrow {
    margin-right: 10px;
    padding-right: 3px; /* Add padding to separate the arrow from the border */
    padding-bottom: 12px;
}

.l-next-arrow {
    margin-left: 10px;
    padding-left: 3px; /* Add padding to separate the arrow from the border */
    padding-bottom: 12px;
}



    .row2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .box {
        width: 25%;
        text-align: center;
        background-color: #e7e7e7;
        padding: 20px;
        margin: 20px;
        border-radius: 5px;
        height: 60vh;
        transition: transform 0.5s ease;
    }
    .box:hover{
        transform: scale(1.1);
        cursor: pointer;
    }

    .box img {
        width: 100%;
        max-width: 200px;
        height: auto;
        object-fit: contain;
        margin-bottom: 10px;
    }

    .box h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        color: blue;
    }

    
    .box2-img{
        width: 35%;
    }

    .right-img{
        width: 75%;
    }
    .bottom-img{
        width: 95%;
    }



    .container-fluid2 .text-center {
        background-image: url("./assets/About Us Page Assets-09.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: #ffffff; /* Set the text color to white or any desired color */
        padding: 50px 20px; /* Adjust the padding as needed */
    }

    .text-area{
        position: absolute;
        text-align: center;
        color: black;
        left: 25%;
    }

    .text-lg{
        font-size: x-large;
        font-weight: 600;
        color: blue;
    }

    .text-head {
        font-size: xxx-large;
        font-weight: 800;
        color: blue;
    }
    .text-head1 {
        font-size: xxx-large;
        font-weight: 800;
        color: blue;
        margin-bottom: 15%;
    }

    .text-head2 {
        font-size: xx-large;
        font-weight: 600;
        color: blue;
    }

    .text-sub-head {
        font-size: medium;
        font-weight: 600;
        color: #787878;
    }
    .text-sub-head2 {
        font-size: x-large;
        font-weight: 600;
        color: #787878;
    }
    .last-div{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .text-grey{
        color: gray;
        font-size: large;
    }
    .text-grey2{
        color: #707070;
        font-size: small;
        font-weight: 500;
        padding: 1em;
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
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .comp-details{
            display: none;
        }
        .text-head{
            margin-bottom: 10%;
        }
        .text-sub-head{
            font-size: small;
        }
        .text-sub-head2{
            font-size: medium;
        }
        .l-logo-container{
            display: flex;
            justify-content: center;
        }
        .l-detailss{
            width: 80%;
        }
        .l-previous-arrow {
            padding-bottom: 5px;
        }
        .l-next-arrow {
            padding-bottom: 5px;
        }
        .box {
            width: 80%;
            height: 45vh;
        }
        .right-img {
            width: 50%;
        }
        .last-div{
            display: none;
        }
        .text-area{
            width: 75%;
        }
        .box2{
            margin-bottom: 10%;
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
    <div class="container-fluid">
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

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="margin-top: 60px;">

        </div>

        <div class="container-fluid3" >

            <div class="row">
                

                <!-- Title and details column -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="comp-details1">
                        <h1 class="text-head1">Who We Are?</h1>
                        <h6 class="text-sub-head">WE ARE INDIA'S NO.1 YEARBOOK & MERCHANDISE COMPANY.</h6>
                        <p class="comp-text text-sub-head">We are Merchandise EVANGELIST and we have been responsible for imprinting innumerable memorable moments
                            for thousands of people across India & the world by providing best in class and top quality merchandise solutions.</p>
                        <h5 class="text-sub-head2 italic">WE UNDERSTAND HOW IMPORTANT YOUR MEMORIES ARE!</h5>
                    </div>
                </div>

                <!-- Image column -->
                <div class="col-md-6">
                    <img class="img-fluid" src="./assets/About Us Page Assets-01.png" alt="Image">
                </div>
            </div>


            <div class="l-logo-container">
                <div class="l-box">
                    <div class="l-logo">
                    <div class="l-detailss">
                        <p class="l-title">IVY LEAGUE STANDARD <br> YEARBOOKS</p>
                        <p class="l-info">Cohort-based yearbooks for 10x better connect. Going beyond yearbooks to capture memories in engaging ways.</p>
                    </div>
                    </div>
                </div>
                <div class="l-box">
                    <div class="l-logo">
                    <div class="l-detailss">
                        <p class="l-title">BRAND CENTRIC <br> MERCHANDISE</p>
                        <p class="l-info">Merchandise that capture interest. Concept driven merch that either adds value to your life or emotionally connects with you. Or, it does both. </p>
                    </div>
                    </div>
                </div>
                <div class="l-box">
                    <div class="l-logo">
                    <div class="l-detailss">
                        <p class="l-title">CENTRALIZED COMMUNITY <br> PLATFORM</p>
                        <p class="l-info">One platform to do it all. Connect with peers, build private as well as public communities, become a creator, or follow creators who are exclusively students.</p>
                    </div>
                    </div>
                </div>
                <div class="">
                    <div class="l-logo">
                    <div class="l-detailss">
                        <div class="l-arrows">
                            <span class="l-arrow l-previous-arrow">&#8249;</span>
                            <span class="l-arrow l-next-arrow">&#8250;</span>
                        </div>
                    </div>
                    </div>
                </div>

              </div>


              <div class="my-5">
                <h3 class="text-center text-head">Benefits</h3>
                <h5 class="text-center text-head2">of working with us</h5>
            </div>


            <div class="row">
                <div class="box">
                    <img src="./assets/About Us Page Assets-07.png" alt="Image 1">
                    <h3>A WALK DOWN MEMORY LANE</h3>
                    <p class="text-grey2">Yearbook Canvas is dedicated to capturing, preserving, and celebrating your life's special moments, believing in the power of reminiscence and nostalgia.</p>
                </div>
                <div class="box">
                    <img src="./assets/About Us Page Assets-03.png" alt="Image 2">
                    <h3>STREAMLINING THE PROCESS</h3>
                    <p class="text-grey2">Our mission is to make yearbook creation easier by automating the process through our website and mobile application, avoiding errors and saving time.</p>
                </div>
                <div class="box">
                    <img src="./assets/About Us Page Assets-05.png" alt="Image 3">
                    <h3>EXPERIENCE YOU CAN TRUST</h3>
                    <p class="text-grey2">Having successfully executed over 100+ yearbook projects, We have the expertise to plan and deliver quality yearbooks, ensuring your special moments are preserved.</p>
                </div>
            </div>
        
            <div class="row">
                <div class="box">
                    <img src="./assets/Merging.png" alt="Image 4">
                    <h3>MERGING TECHNOLOGY AND TRADITION</h3>
                    <p class="text-grey2">We have combined modern technology with the tradition of creating yearbooks to create a unique way to preserve special moments.</p>
                </div>
                <div class="box">
                    <img src="./assets/About Us Page Assets-02.png" alt="Image 5">
                    <h3>UNLEASHING YOUR CREATIVITY</h3>
                    <p class="text-grey2">Yearbook Canvas gives you the freedom to create a yearbook that reflects your journey.</p>
                </div>
                <div class="box">
                    <img src="./assets/Memories.png" alt="Image 6">
                    <h3>JOIN US ON THIS MEMORY-CAPTURING ADVENTURES</h3>
                    <p class="text-grey2">Yearbook Canvas will create a tapestry of memories to commemorate and celebrate your successes, achievements, and memorable moments.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="w-25" style="height: 3px; color: blue;">
            </div>


            <div class="box2 text-center">
                <img src="./assets/Website Assets-16.png" alt="Image 2" class="box2-img">
                <div class="upgrade w-75 m-auto">
                    <p class="text-head">It's TIME to get PERSONAL?</p>
                    <div class="detailed-text">
                        <p class="text-grey">So you think you've mastered the art of self-expression, huh? Think again! With YBC, you can drink from a mug that knows your morning face, scribble in a notebook that appreciates your doodles, wear a varsity jacket that has your back, literally! Don’t forget the t-shirt, which could be your ultimate hype-crew! Welcome to YBC, where we put the 'I' in merchandise, and the 'You' in Yearbook!  Join the fun at YBC, where it's not just personal, it's hilariously, irresistibly you!</p>
                        <!-- <p class="text-grey">Another advantage of a digital yearbook is its flexibility. With a physical yearbook, the content is static and unchangeable once it has been printed. A digital yearbook, however, can be updated and revised as needed. This allows schools to add new photos or information to the yearbook, correcting any errors or omissions that may have occurred during the initial creation of the book.</p> -->
                    </div>
                    <a href="contact_form.php"><input type='submit' value='CONTACT US' class='btn btn-primary px-5 py-2 mx-2 mt-3 border-0' name='contact_us'></a>
                </div>
            </div>


            
            <div class="container-fluid2 d-flex">
                
                <div class="row text-center last-div">
                    <div class="col-md-3">
                        <img src="./assets/About Us Page Assets-10.png" alt="Left Image" class="right-img">
                    </div>
                    
                    <div class="col-md-6 text-area" style="z-index: 2;">
                        <p class="text-lg">“Courage doesn’t always roar. Sometimes
                            courage is the quiet voice at the end of the
                            day saying ‘I will try again tomorrow’.”</p>
                        <p class="text-lg italic">– Mary Anne Radmacher</p>
                    </div>
                    <div class="col-md-3">
                        <img src="./assets/About Us Page Assets-11.png" alt="Right Image" class="right-img">
                    </div>

                </div>
                
            </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>