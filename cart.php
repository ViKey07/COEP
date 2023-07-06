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
    <title>Cart Details</title>
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
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .icon-color{
            color: blue;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-item{
            color: white;
        }
        .icon-color{
            color: blue;
        }
        .card-desc{
            font-size: medium;
            font-weight: 500;
            color: gray;
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
        .navbar-collapse {
            flex-grow: unset;
        }
        .cart_img{
            width: 50px;
            height: 50px;
            object-fit: contain;
        }


        



        /* @media (max-width: 576px) {
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
            
            
        } */

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
            .home-nav-logo {
                width: 100%;
            }
            .home-nav-logo-img {
                margin-left: 0;
                width: 100%;
            }
            .navbar-toggler-icon {
                filter: invert(1);
            }
            .navbar-expand-lg {
                padding: 0.5em;
            }

            .table thead {
                display: none;
            }

            .table tbody .tb-hd-tl {
                font-size: 1rem;
            }

            .table tbody .tb-hd-img,
            .table tbody .tb-hd-qty {
                display: none;
            }

            .table tbody .tb-bd td {
                display: block;
                text-align: center;
            }

            .table tbody .tb-bd td:before {
                content: attr(data-label);
                display: block;
                font-weight: bold;
            }

            .subtotal {
                font-size: 1rem;
            }

            .check-btns {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Styles for medium screens (576px - 768px) */
        /* @media (min-width: 577px) and (max-width: 768px) {
            .home-nav-logo-img {
                width: 30%;
                margin-left: 3%;
            }
        } */

        @media (min-width: 577px) and (max-width: 768px) {

            .home-nav-logo-img {
                width: 50%;
            }

            .navbar-expand-lg {
                padding: 0.5em 1em;
            }

            .table thead {
                display: none;
            }

            .table tbody .tb-hd-tl {
                font-size: 1.2rem;
            }

            .table tbody .tb-hd-img,
            .table tbody .tb-hd-qty {
                display: none;
            }

            .table tbody .tb-bd td {
                display: block;
                text-align: center;
            }

            .table tbody .tb-bd td:before {
                content: attr(data-label);
                display: block;
                font-weight: bold;
            }

            .subtotal {
                font-size: 1.2rem;
            }

            .check-btns {
                flex-direction: column;
                align-items: center;
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

        <div class="container">
            <div class="row">
                <form action="" method="post" class="cart-form">
                <table class="table text-center table-responsive wh-tb">
                    
                        <?php 

                            global $con;

                            $get_ip_address = getIPAddress();
                            $total_price = 0;
                            $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
                            $result = mysqli_query($con, $cart_query);
                            $result_count = mysqli_num_rows($result);
                            if($result_count > 0){
                                echo "<thead>
                                <tr class='tb-hd'>
                                    <th class='tb-hd-tl'>Product Title</th>
                                    <th class='tb-hd-img'>Product Image1</th>
                                    <th class='tb-hd-qty'>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Remove</th>
                                    <th colspan='2'>Operations</th>
                                </tr>
                            </thead>
                            <tbody>";
                            
                            while($row = mysqli_fetch_array($result)){
                                $product_id = $row['product_id'];
                                $select_products = "SELECT * FROM `products` WHERE product_id = '$product_id'";
                                $result_products = mysqli_query($con, $select_products);
                                while($row_product_price = mysqli_fetch_array($result_products)){
                                    $product_price = array($row_product_price['product_price']);
                                    $price_table = $row_product_price['product_price'];
                                    $product_title = $row_product_price['product_title'];
                                    $product_image1 = $row_product_price['product_image1'];
                                    $product_values = array_sum($product_price);
                                    $total_price += $product_values;
                                

                        ?>

                        <tr class='tb-bd'>
                            <td class='tb-hd-tl'><?php echo $product_title ?></td>
                            <td class='tb-hd-img'><img src="./admin_area/product_images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
                            <td class='tb-hd-qty'>
                                <select name="qty" class="form-select w-50 m-auto">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                        $selected = ($i == $row['quantity']) ? "selected" : "";
                                        echo "<option value='$i' $selected>$i</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        
                            <?php
                            $get_ip_address = getIPAddress();
                            if (isset($_POST['update_cart'])) {
                                $quantities = $_POST['qty'];
                                $update_cart = "UPDATE `cart_details` SET quantity = $quantities WHERE ip_address = '$get_ip_address'";
                                $result_products_quantity = mysqli_query($con, $update_cart);
                        
                                $total_price = $total_price * $quantities;
                            }
                            
                            ?>


                            <td><?php echo "₹ $price_table " ?></td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                            <td>
                                <input type="submit" value="Update cart" class="btn btn-primary px-3 py-2 mx-3 border-0" name="update_cart">
                        
                                <input type="submit" value="Remove cart" class="btn btn-primary px-3 py-2 mx-3 border-0" name="remove_cart">
                            </td>
                        </tr>
                        
                        
                        <?php
                        }
                    }
                }
                else{
                    echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                }
                    ?>
                    </tbody>
                </table>

                <div class="d-flex mb-3">
                    <?php 
                        $get_ip_address = getIPAddress();
                        
                        $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
                        $result = mysqli_query($con, $cart_query);
                        $result_count = mysqli_num_rows($result);
                        if($result_count > 0){
                            echo "<h4 class='px-3'>Subtotal:<strong class='subtotal'> ₹ $total_price</strong></h4>
                            <div class='d-flex align-items-center mb-3 check-btns'>
                            <input type='submit' value='Continue Shopping' class='btn btn-primary px-3 py-2 mx-3 my2 border-0' name='continue_shopping'>
                            <button class='bg-secondary px-3 py-2 mx-3 my2 border-0 text-light'><a href='./users_area/checkout.php' class='text-light text-decoration-none'>Checkout</a></button>
                            </div>";
                        }else{
                            echo "<input type='submit' value='Continue Shopping' class='btn btn-primary px-3 py-2 mx-3 border-0' name='continue_shopping'>";
                        }
                        if(isset($_POST['continue_shopping'])){
                            echo "<script>window.open('index.php', '_self')</script>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </form>

    <?php 
    
    function remove_cart_item() {
        global $con;
        if(isset($_POST['remove_cart'])) {
            foreach($_POST['removeitem'] as $remove_id){
                echo $remove_id;
                $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id";
                $run_delete = mysqli_query($con, $delete_query);
                if($run_delete){
                    echo "<script>window.open('cart.php', '_self')</script>";
                }
            }
        }
    }
        echo $remove_item = remove_cart_item();
    ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

