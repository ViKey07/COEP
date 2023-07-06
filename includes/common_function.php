<?php 

function getproducts() {
    global $con;

    if (!isset($_GET['category'])) {
        $select_query = 'SELECT * FROM `products` LIMIT 0,6'; // Fetch the first 6 products
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $prev_product_price = $row['prev_product_price'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];

            echo "<div class='col-md-4 col-pad mb-5'>
                <div class='card'>
                    <a href='product_details.php?product_id=$product_id'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                    </a>
                    <div class='card-body text-center p-0'>
                        <div class='card-details p-3'>
                            <h5 class='card-title card-product-title'>
                                <a class='card-product-title' href='product_details.php?product_id=$product_id'>$product_title</a>
                            </h5>
                            <p class='card-text card-desc'>$product_description</p>
                            <p class='card-text d-flex justify-content-center align-items-center'><span class='card-text prev_price'>₹ $prev_product_price</span> <span class='card-product-title px-3'> ₹ $product_price</span></p> 
                        </div>
                        <div class='card2'>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary w-100'>Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>";
        }

        $select_query_last = 'SELECT * FROM `products` ORDER BY `product_id` DESC LIMIT 1'; // Fetch the last product
        $result_query_last = mysqli_query($con, $select_query_last);

        if ($row = mysqli_fetch_assoc($result_query_last)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $prev_product_price = $row['prev_product_price'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];

            echo "<div class='col-md-6 col-pad mb-5'>
                <div class='card last-card'>
                    <a href='product_details.php?product_id=$product_id'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                    </a>
                    <div class='card-body text-center p-0'>
                        <div class='card-details p-3'>
                            <h5 class='card-title card-product-title'>
                                <a class='card-product-title' href='product_details.php?product_id=$product_id'>$product_title</a>
                            </h5>
                            <p class='card-text card-desc'>$product_description</p>
                            <p class='card-text d-flex justify-content-center align-items-center'><span class='card-text prev_price'>₹ $prev_product_price</span> <span class='card-product-title px-3'> ₹ $product_price</span></p> 
                        </div>
                        <div class='card2'>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary w-100'>Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
}

function get_unique_categories() {
    global $con;

    if(isset($_GET['category'])){

        $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` where category_id = $category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'> No stock for this category </h2>";
        }


        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $product_id = $row['product_id'];
            $category_id = $row['category_id'];
            echo "<div class='col-md-3 mb-2'>
            <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>$product_price</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                    
                </div>
                </div>
        </div>";
        }
    }
}

function getcategories() {
    global $con;
    $select_categories = "SELECT * FROM `categories`";
    $result_categories = mysqli_query($con, $select_categories);

    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        $category_image = $row_data['category_image'];
        
        echo "<li class='nav-item cat-trans'>
                <a href='index.php?category=$category_id' class='nav-link text-light m-3'>
                <img src='./admin_area/category_images/$category_image' class='card-img-top category-image' alt='$category_title' >
                    $category_title
                </a>
            </li>";
    }
}



function search_product() {
    global $con;
    if(isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "SELECT * FROM `products` WHERE product_keywords like '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'> No results match! </h2>";
        }

        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $product_id = $row['product_id'];
            $category_id = $row['category_id'];
            echo "<div class='col-md-3 col-pad'>
                <div class='card'>
                    <a href='product_details.php?product_id=$product_id'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                    </a>
                    <div class='card-body text-center p-0'>
                        <div class='card-details p-3'>
                            <h5 class='card-title card-product-title'>
                                <a class='card-product-title' href='product_details.php?product_id=$product_id'>$product_title</a>
                            </h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text fw-bold text-dark'>₹ $product_price</p> 
                        </div>
                        <div class='card2'>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary w-100'>Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
}

function getIPAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $ip = explode(',', $ip)[0];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function cart() {
    if (isset($_GET['add_to_cart'])) {
        global $con;

        $get_ip_address = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];

        if (!isset($_SESSION['user_email'])) {
            echo "<script>window.open('../COEP/users_area/user_login.php', '_self')</script>";
            exit();
        }

        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address' AND product_id = $get_product_id";
        $result_query = mysqli_query($con, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('Already present in cart')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        } else {
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id, '$get_ip_address', 0)";
            $result_query = mysqli_query($con, $insert_query);
            echo "<script>alert('Added to cart successfully!')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    }
}



function cart_item() {
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_address = getIPAddress();
        
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
        $result_query = mysqli_query($con, $select_query);

        $count_cart_items = mysqli_num_rows($result_query);
    }else{
        global $con;

        $get_ip_address = getIPAddress();
        
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
        $result_query = mysqli_query($con, $select_query);

        $count_cart_items = mysqli_num_rows($result_query);
        }
        echo $count_cart_items;
    }


function total_cart_price() {
    global $con;

    $get_ip_address = getIPAddress();
    $total = 0;
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
    $result = mysqli_query($con, $cart_query);

    while($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $select_products = "SELECT * FROM `products` WHERE product_id = '$product_id'";
        $result_products = mysqli_query($con, $select_products);
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_price']);
            $product_values = array_sum($product_price);
            $total += $product_values;
        }
    }
    echo $total;
}


function get_user_order_details(){
    global $con;
    $user_email = $_SESSION['user_email'];

    $get_details = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
    $result_query = mysqli_query($con, $get_details);

    while($row_query = mysqli_fetch_array($result_query)){
        $user_id = $row_query['user_id'];
        if(!isset($_GET['edit_account'])){
            if(!isset($_GET['my_orders'])){
                if(!isset($_GET['delete_account'])){
                    $get_orders = "SELECT * FROM `user_orders` WHERE user_id = $user_id AND order_status = 'pending'";
                    $result_orders_query = mysqli_query($con, $get_orders);
                    $row_count = mysqli_num_rows($result_orders_query);
                    if($row_count > 0){
                        echo "<h3 class='text-center text-success mt-3 mb-3'> You have <span class='text-danger'>$row_count</span> pending orders </h3>
                        <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order details</a></p>";
                    }else{
                        echo "<h3 class='text-center text-success mt-3 mb-3'> You have zero pending orders </h3>
                        <p class='text-center'><a href='../index.php' class='text-dark'>Explore products</a></p>";
                    }
                }
            }
        }
    }
}

function viewdetails() {
    global $con;

    if(isset($_GET['product_id'])){

        if(!isset($_GET['category'])){
            $product_id = $_GET['product_id'];

            $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
            $result_query = mysqli_query($con, $select_query);

            while($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_full_description'];
                $prev_product_price = $row['prev_product_price'];
                $product_price = $row['product_price'];
                $product_type = $row['product_type'];
                $product_style = $row['product_style'];
                $product_print = $row['product_print'];
                $product_care = $row['product_care'];
                $category_id = $row['category_id'];
                $product_image1 = $row['product_image1'];
                $product_image2 = $row['product_image2'];
                $product_image3 = $row['product_image3'];
                $product_size = $row['product_size'];

                echo "<div class='row d-flex justify-content-center align-items-center style-text'>
                        <div class='col-md-6' id='product-images'>
                            <img src='./admin_area/product_images/$product_image1' alt='$product_title' class='img-fluid'>
                            <img src='./admin_area/product_images/$product_image2' alt='$product_title' class='img-fluid'>
                            <img src='./admin_area/product_images/$product_image3' alt='$product_title' class='img-fluid'>
                        </div>
                        <div class='col-md-6'>
                            <div class='card-body'>
                                <h5 class='card-title card-product-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text d-flex align-items-center'><span class='card-text prev_price'>₹ $prev_product_price</span> <span class='card-product-title px-3'> ₹ $product_price</span></p>";
                                
                if(!empty($product_size)){
                    echo "<div class='mb-3'>
                            <label for='size' class='form-label'>Select Size:</label>
                            <select name='size' id='size' class='form-select w-50'>
                                <option value=''>Select Size</option>";
                    
                    $sizes = explode(",", $product_size);
                    foreach($sizes as $size){
                        echo "<option value='$size'>$size</option>";
                    }

                    echo "</select>
                        </div>";
                }

                $selected_size = isset($_POST['size']) ? $_POST['size'] : '';
                echo "<a href='index.php?add_to_cart=$product_id&selected_size=$selected_size' class='btn btn-primary'>Add to Cart</a>";

                // Display Type, Style, Print, and Care after the "Add to Cart" button
                if(!empty($product_type)){
                    echo "<p class='card-text mt-3 mb-0 p-0'>Type: <span style='color: rgb(155, 155, 155);'>$product_type</span></p>";
                }
                if(!empty($product_style)){
                    echo "<p class='card-text m-0 p-0'>Style: <span style='color: rgb(155, 155, 155);'>$product_style</span></p>";
                }
                if(!empty($product_print)){
                    echo "<p class='card-text m-0 p-0'>Print: <span style='color: rgb(155, 155, 155);'>$product_print</span></p>";
                }
                if(!empty($product_care)){
                    echo "<p class='card-text m-0 p-0'>Care: <span style='color: rgb(155, 155, 155);'>$product_care</span></p>";
                }


                echo "</div>
                    </div>
                </div>";

                // Add a hidden input field to pass the selected size to the cart.php page
                echo "<input type='hidden' name='selected_size' value='$selected_size'>";
            }
        }
    }
}



?>

