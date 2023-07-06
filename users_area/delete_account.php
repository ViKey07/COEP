
<h3 class="text-danger mb-4">Delete Account</h3>
<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="delete" class="form-control" value="Delete Account">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="dont_delete" class="form-control" value="Don't Delete Account">
    </div>
</form>


<?php 
    $username_session = $_SESSION['user_email'];
    if(isset($_POST['delete'])){
        $delet_query = "DELETE FROM `user_table` WHERE user_email = '$username_session'";
        $result = mysqli_query($con, $delet_query);
        if($result) {
            session_destroy();
            echo "<script>alert('Account deleted!')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
        }
    }

    if(isset($_POST['dont_delete'])){
        echo "<script>window.open('profile.php', '_self')</script>";
    }
?>
