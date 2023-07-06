<?php
    if(isset($_GET['edit_account'])){
        $user_session_name = $_SESSION['user_email'];
        $select_query = "SELECT * FROM `user_table` WHERE user_email = '$user_session_name'";
        $result_query = mysqli_query($con, $select_query);
        $row_fetch = mysqli_fetch_assoc($result_query);
        $user_id = $row_fetch['user_id'];
        $user_email = $row_fetch['user_email'];
        
    }
        if(isset($_POST['user_update'])){
            $update_id = $user_id;
            $user_email = $_POST['user_email'];

            $update_data = "UPDATE `user_table` SET user_email = '$user_email' WHERE user_id = $update_id";
            $result_query_update = mysqli_query($con, $update_data);
            if($result_query_update){
                echo "<script>alert('Data updated successfully!')</script>";
                echo "<script>window.open('logout.php', '_self')</script>";
            }
        }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
    <style>
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }
    </style>
</head>
<body>
    <h3 class="text-center text-success mb-4">Edit Email</h3>
    <form action="" method="post">

        <div class="form-outline mb-4">
            <input type="email" name="user_email" class="form-control w-50 m-auto" value="<?php echo $user_email ?>">
        </div>

        <input type="submit" name="user_update" value="update" class="btn btn-primary py-2 px-3 border-0">
    </form>

</body>
</html>


