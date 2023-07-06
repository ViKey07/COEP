<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head content -->
</head>
<body>
    <!-- navigation and form content -->
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post">
                <div class="form-outline mb-4 w-50 m-auto">
                        <label for="admin_name" class="form-label">Username</label>
                        <input type="text" id="admin_name" class="form-control" placeholder="Enter username" autocomplete="off" required name="admin_name"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="admin_email" class="form-label">Email</label>
                        <input type="email" id="admin_email" class="form-control" placeholder="Enter email" autocomplete="off" required name="admin_email"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" id="admin_password" class="form-control" placeholder="Enter password" autocomplete="off" required name="admin_password"/>
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="conf_admin_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_admin_password" class="form-control" placeholder="Confirm password" autocomplete="off" required name="conf_admin_password"/>
                    </div>
                    <div class="mt-4 pt-2 w-50 m-auto">
                        <input type="submit" value="Register" class="btn btn-primary py-2 px-3 border-0" name="admin_register">
                        <p class="small fw-bold mt-2 pt-1">Already have an account? <a href="admin_login.php" class="text-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['admin_register'])){
        $admin_name = $_POST['admin_name'];
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
        $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);
        $conf_admin_password = $_POST['conf_admin_password'];

        $select_query = "SELECT * FROM `admin_table` WHERE admin_name = '$admin_name' OR admin_email = '$admin_email'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);

        if($rows_count > 0){
            echo "<script>alert('Username or email already exists!')</script>";
        } else if($admin_password != $conf_admin_password){
            echo "<script>alert('Passwords do not match!')</script>";
        } else {
            $insert_query = "INSERT INTO `admin_table` (admin_name, admin_email, admin_password) VALUES ('$admin_name', '$admin_email', '$hash_password')";
            $sql_execute = mysqli_query($con, $insert_query);
        }
        
        echo "<script>window.open('./index.php', '_self')</script>";
    }
?>

