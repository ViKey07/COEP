<?php
include('../includes/connect.php');
include('../functions/common_function.php');

// Check if the user is logged in
if (isset($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email'];

    // Retrieve the user details from the database
    $get_user_query = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
    $get_user_result = mysqli_query($con, $get_user_query);
    $user_row = mysqli_fetch_array($get_user_result);

    $user_id = $user_row['user_id'];
    $username = $user_row['username'];
    $user_address = $user_row['user_address'];
    $user_mobile = $user_row['user_mobile'];
} else {
    // User is not logged in, handle the case accordingly
    // You can redirect the user to the login page or display an error message
    // For now, let's set the values to empty strings
    $user_id = '';
    $username = '';
    $user_address = '';
    $user_mobile = '';
}

// Check if the form is submitted and update the user information
if (isset($_POST['update_user_info'])) {
    $username = $_POST['username'];
    $user_address = $_POST['user_address'];
    $user_mobile = $_POST['user_mobile'];

    // Update the user information in the database
    $update_user_query = "UPDATE `user_table` SET username = '$username', user_address = '$user_address', user_mobile = '$user_mobile' WHERE user_id = '$user_id'";
    $update_user_result = mysqli_query($con, $update_user_query);

    if ($update_user_result) {
        // User information updated successfully
        $success_message = "Contact information updated successfully.";
    } else {
        // Failed to update user information
        $error_message = "Failed to update contact information.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section content -->
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
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .row {
            margin-bottom: 1.5rem; /* Adjust the spacing between the form and payment mode button */
        }
        .col-lg-6 {
            padding-right: 1rem; /* Adjust the spacing between the form and payment mode button columns */
            padding-left: 1rem;
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
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
        .payment_img{
            width: 50%;
            margin: auto;
            display: block;
        }
        .text-color{
            color: #3A3086;
        }
        .pay-opt {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-decoration: none;
        }
        .pay-tl {
            font-size: xx-large;
            margin: 0;
        }
        .payment-mode-section {
            position: relative;
        }
        
        @media (max-width: 576px) {
            .row {
                flex-direction: column;
            }

            .col-lg-6 {
                margin-bottom: 1.5rem;
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
            .pay-opt {
                margin-top: 1.5rem;
            }
            .pay-tl{
                margin-top: 5em;
            }
            .payment_img {
                width: 60%;
            }
        }
        @media (max-width: 992px) {
            .col-lg-6 {
                padding-right: 0;
                padding-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar section content -->
    <!-- Container and form section content -->
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
                            <a class="nav-link m-0" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="../about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="../about.php">Contact Us</a>
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

        <h2 class="text-center">Shipping Address</h2>
        <?php
        if (isset($success_message)) {
            echo '<div class="alert alert-success">' . $success_message . '</div>';
        } elseif (isset($error_message)) {
            echo '<div class="alert alert-danger">' . $error_message . '</div>';
        }
        ?>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6 payment-mode-section">
                <?php
                // Check if the form is submitted to display the form fields
                if (!isset($_POST['update_user_info'])) {
                ?>
                <form action="" method="post">
                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="username" class="form-label">Full Name</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter your name" required name="username" value="<?php echo $username; ?>" />
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_address" class="form-label">Shipping Address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Enter address" required name="user_address" value="<?php echo $user_address; ?>" />
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="user_mobile" class="form-label">Contact Number</label>
                        <input type="tel" id="user_mobile" class="form-control" placeholder="Enter your contact number" required name="user_mobile" value="<?php echo $user_mobile; ?>" />
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <input type="submit" class="btn btn-primary" name="update_user_info" value="Update Contact Info" />
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    // Check if the form is submitted to display the "View Orders" button
    if (isset($_POST['update_user_info'])) {
        $user_email = $_SESSION['user_email'];
        $select_user_query = "SELECT user_id FROM `user_table` WHERE user_email = '$user_email'";
        $get_user_result = mysqli_query($con, $get_user_query);
        $run_query = mysqli_fetch_array($get_user_result);
        $user_id = $run_query['user_id'];
    ?>
    <div class="col-lg-12 col-xl-12 payment-mode-section">
        <div class="vertical-line"></div>
        <div class="container">
            <h2 class="text-center text-color">Proceed to Checkout</h2>
            <div class="row d-flex justify-content-center align-items-center mt-5">
                <div class="col-md-6">
                    <a class="pay-opt" href="order.php?user_id=<?php echo $user_id ?>">
                        <p class="btn btn-primary px-3 py-2 mx-3 border-0 text-center pay-tl">View Orders</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <!-- Other HTML content -->
</body>
</html>

