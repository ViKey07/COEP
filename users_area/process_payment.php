<?php
include('../includes/connect.php');
include('../functions/common_function.php');
require('../razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$order_id          = $_POST['order_id'];
$payment_id        = trim($_POST['payment_id']);
$payment_signature = trim($_POST['payment_signature']);

$response_status   = 0;
$response_message  = "Order id not found.";

if($order_id != 0) {
  $response_message  = "Payment id not found.";

  if($payment_id != '') {
    $api = new Api($razorpayKey, $razorpaySecret);
    
    //Will be used in Live Mode
    if($payment_signature != '') {
      try {

        $attributes = array(
                      'razorpay_order_id'   => $order_id,
                      'razorpay_payment_id' => $payment_id,
                      'razorpay_signature'  => $payment_signature
                    );
      
        $api->utility->verifyPaymentSignature($attributes);
        $response_status = 1;
      }
      catch(SignatureVerificationError $e) {
        $response_status  = 0;
        $response_message = 'Razorpay Error : '.$e->getMessage();
      }  
    }
    else {
      
      // Payment is successful, update the order status
        
      $update_order_status = "UPDATE `user_orders` SET order_status = 'Complete' WHERE order_id = $order_id"; 
      $result_order_status = mysqli_query($con, $update_order_status);
      $response_status     = 1;
      $response_message    = 'Order updated successfuly.';   
    }
  }  
}

$arr_res['response_status']  = $response_status;
$arr_res['response_message'] = $response_message;

echo json_encode($arr_res);
?>