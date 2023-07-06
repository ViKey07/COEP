<?php 
    include('includes/connect.php');
    include('functions/common_function.php');
// Yearbook Canvas Private Limited - Terms and Conditions

// Disclaimer
$disclaimer = "The following terms and conditions govern your use of Yearbook Canvas Private Limited's services and website. By accessing or using our services, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you may not access or use our services.";

// Intellectual Property
$intellectualProperty = "All intellectual property rights, including copyrights, trademarks, and patents related to Yearbook Canvas Private Limited's services and website, are the property of Yearbook Canvas Private Limited. You are not permitted to use, reproduce, or distribute any of our intellectual property without our prior written consent.";

// User Obligations
$userObligations = "As a user of Yearbook Canvas Private Limited's services, you agree to comply with the following obligations:
- Provide accurate and up-to-date information during registration and use of our services.
- Maintain the confidentiality of your account credentials and be solely responsible for any activities that occur under your account.
- Use our services in a lawful manner and not engage in any activities that may harm Yearbook Canvas Private Limited or its users.
- Refrain from uploading or sharing any content that is illegal, defamatory, or infringes upon the rights of others.
- Comply with all applicable laws and regulations while using our services.";

// Limitation of Liability
$limitationOfLiability = "Yearbook Canvas Private Limited shall not be liable for any direct, indirect, incidental, consequential, or exemplary damages arising from your use of our services. We shall not be responsible for any loss, damage, or liability resulting from:
- Interruption or suspension of our services.
- Unauthorized access to or alteration of your data.
- Errors, omissions, or inaccuracies in our services or content.
- Any third-party content or websites linked to our services.
- Any loss or damage to your computer system or data as a result of using our services.";

// Termination
$termination = "Yearbook Canvas Private Limited reserves the right to terminate or suspend your access to our services at any time, without prior notice, if you violate these terms and conditions.";

// Governing Law
$governingLaw = "These terms and conditions shall be governed by and construed in accordance with the laws of India. Any disputes arising from these terms and conditions shall be subject to the exclusive jurisdiction of the courts of India.";

// Modifications
$modifications = "Yearbook Canvas Private Limited reserves the right to modify or update these terms and conditions at any time, without prior notice. By continuing to use our services after any changes, you agree to be bound by the updated terms and conditions.";

// Contact Information
$contactInformation = "If you have any questions or concerns regarding these terms and conditions, please contact us at info@yearbookcanvas.com";

// End of Terms and Conditions
?>


<!DOCTYPE html>
<html>
<head>
    <title>Yearbook Canvas Private Limited - Terms and Conditions</title>
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
        .container-fluid2{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        div.home-nav-logo{
            width: 10%;
        }
        .home-nav-logo-img {
            width: 70%;
            margin-left: 3%;
        }
        .navbar-expand-lg{
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
        .content{
            width: 80%;
        }

        .container{
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .details-container{
            width: 80%;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h5 {
            margin-top: 40px;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

        @media screen and (max-width: 480px) {
            body {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            h5 {
                font-size: 20px;
            }

            p {
                font-size: 16px;
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
        <div class="container-fluid2" style="margin-top: 60px;">
<div class="container">
    <h1>Terms and Conditions</h1>
    <div class="details-container">
    <p><?php echo $disclaimer; ?></p>
    
    <h5>Intellectual Property</h5>
    <p><?php echo $intellectualProperty; ?></p>
    
    <h5>User Obligations</h5>
    <p><?php echo $userObligations; ?></p>
    
    <h5>Limitation of Liability</h5>
    <p><?php echo $limitationOfLiability; ?></p>
    
    <h5>Termination</h5>
    <p><?php echo $termination; ?></p>
    
    <h5>Governing Law</h5>
    <p><?php echo $governingLaw; ?></p>
    
    <h5>Modifications</h5>
    <p><?php echo $modifications; ?></p>
    
    <h5>Contact Information</h5>
    <p>If you have any questions or concerns regarding these terms and conditions, please contact us at <a href="mailto:info@yearbookcanvas.com">info@yearbookcanvas.com</a>.</p>
    </div>
    </div>
                    </div>
                    <footer>
    <p>Copyright &copy; Yearbook Canvas. All rights reserved.</p>
  </footer>
</body>
</html>
