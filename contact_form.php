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
            color: white;
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
        .navbar-collapse {
            flex-grow: unset;
        }
        .nav-item{
            color: white;
        }
        .whole-form-box{
            padding: 3em;
        }
        .btn-primary {
            color: #fff;
            background-color: blue;
            border-color: blue;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            /* box-shadow: 10px 10px 25px -5px rgba(0,0,0,0.13), 0px 1px 4px 0px rgba(0,0,0,0.11); */
        }
        .form-control{
            border-color: #9a9a9a;
            background-color: #f3f3f300;
        }
        .form-control:focus{
            border-color: #9a9a9a;
            background-color: #f3f3f300;
        }
        .btn{
            background-color: blue;
            border-radius: 0;
        }
        .form-image{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
        }
        .contact-img{
            width: 90%;
        }

        .form-container{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
        }
        .form-content{
            width: 40%;
        }
        .display-content{
            display: flex;
            width: 100%;
            justify-content: space-between;
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
            .form-container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                width: 100%;
            }
            .form-content {
                width: 60%;
                margin-top: 2em;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }
            
        }

        /* Styles for medium screens (576px - 768px) */
        @media (min-width: 577px) and (max-width: 768px) {
            .home-nav-logo-img {
                width: 30%;
            }
        }

        /* Styles for large screens (768px and above) */
        @media (min-width: 769px) {
            @media (min-width: 769px) {
                .home-nav-logo {
                    width: 10%;
                }
                .home-nav-logo-img {
                    margin-left: 3%;
                    width: 70%;
                }
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

        <div class="container-fluid" style="margin-top: 80px;">

        </div>

    <div class="container-fluid my-6 whole-form-box">
        <h2 class="text-center my-6" style="color: blue;">Talk with our sales team</h2>
            <div class="col-lg-12 col-xl-6 form-container">
                <div class="form-image">
                    <img src="./assets/Contact US.png" alt="contact-image" class="contact-img">
                </div>
                <div class="form-content">
                    <form action="" method="post">
                        <div class="form-outline mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" autocomplete="off" required name="name"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter email" autocomplete="off" required name="email"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="number" id="mobile_number" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required name="mobile_number"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="message" class="form-label">What would you like to discuss:</label>
                            <textarea id="message" class="form-control" placeholder="Please write your message here." autocomplete="off" required name="message"></textarea>
                        </div>

                        <div class="mt-4 pt-2">
                            <input type="submit" value="Contact Us" class="btn btn-primary py-2 px-3 border-0" name="user_register">
                        </div>
                    </form>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>

    <?php
    if (isset($_POST['user_register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $message = $_POST['message'];

        $insert_query = "INSERT INTO `contact_form` (name, email, mobile_number, message) VALUES ('$name', '$email', '$mobile_number', '$message')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Your message sent successfully! We will contact you soon.')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        } else {
            echo "Error: " . mysqli_error($con); // Display the specific error message
        }
    }
    ?>

</body>
</html>


