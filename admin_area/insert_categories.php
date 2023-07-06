<!-- <?php 
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    $category_image = $_FILES['category_image']['name'];
    $temp_category_image = $_FILES['category_image']['tmp_name'];

    $select_query="Select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This category is present inside database')</script>";
    }else{
        move_uploaded_file($temp_image, "./category_images/$category_image");

        $insert_query="insert into `categories` (category_title, category_image) values('$category_title', '$category_image)'";
        $result=mysqli_query($con, $insert_query);
        if($result){
            echo "<script>alert('category has been inserted successfully')</script>";
    }
}}

?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
    </div>
</form> -->




<?php 
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];
    $category_image = $_FILES['category_image']['name'];
    $temp_category_image = $_FILES['category_image']['tmp_name'];

    $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0){
        echo "<script>alert('This category is already present in the database')</script>";
    } else {
        move_uploaded_file($temp_category_image, "./category_images/$category_image");

        $insert_query = "INSERT INTO `categories` (category_title, category_image) VALUES ('$category_title', '$category_image')";
        $result = mysqli_query($con, $insert_query);
        if($result){
            echo "<script>alert('Category has been inserted successfully')</script>";
        }
    }
}
?>

<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-90 mb-2">
        <!-- <input type="file" class="form-control" name="category_image[]" accept="image/*"> -->
        <input type="file" name="category_image[]" id="category_image" class="form-control" required>
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Category">
    </div>
</form>
