<?php
    $con = mysqli_connect("localhost", "root", "", "coepstore");
    if(!$con){
        die(mysqli_error($con));
    }


    $razorpayKey = 'rzp_test_OGaFKDAoV3UjI1';
    $razorpaySecret = 'gKhkr8GYuttlieq0ALgNPS4d';
?>