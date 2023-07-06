<?php
include('includes/connect.php');
include('functions/common_function.php');
require('../razorpay-php/Razorpay.php');

$order_id = $_POST['order_id'];

// Verify the payment
$payment_id = $_POST['payment_id'];

$success = true;

try {
    $api = new Razorpay\Api\Api($razorpayKey, $razorpaySecret);
    $payment = $api->payment->fetch($payment_id);

    // Verify if the payment is successful
    if ($payment->status !== 'captured') {
        $success = false;
        
    }
} catch (Exception $e) {
    $success = false;
}

if ($success) {
    // Payment is successful, update the order status
    $update_order_status = "UPDATE `user_orders` SET order_status = 'Complete' WHERE order_id = $order_id";
    $result_order_status = mysqli_query($con, $update_order_status);

    if ($result_order_status) {
        // Redirect to the profile page or any other desired action
        header('Location: profile.php?my_orders');
        exit();
    } else {
        // Error updating the order status
        echo "Error updating order status. Please contact support.";
    }
} else {
    // Payment failed
    echo "Payment failed. Please try again.";
}
?>
