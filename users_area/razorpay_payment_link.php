<?php
    include('../includes/connect.php');
		require('../razorpay-php/Razorpay.php');
		session_start();

// Create the Razorpay Order
	use Razorpay\Api\Api;
	use Razorpay\Api\Errors\SignatureVerificationError;

	function CreateRazorPayOrder($arrOrderData = array()){		
		 $keyId = 'rzp_test_OGaFKDAoV3UjI1';
	 $keySecret = 'gKhkr8GYuttlieq0ALgNPS4d';
		
		$arrOrder = array();
		if(count($arrOrderData)>0){
			$api = new Api($keyId, $keySecret);
			$arrRazorpayOrder = $api->order->create($arrOrderData);
            
			if(!empty($arrRazorpayOrder)){
				$arrOrder = $arrRazorpayOrder;
			}
		}
		return $arrOrder;
	}

	function IsVeryfiedRazorPaySignature($sRazorPayOrderId=null, $sRazorPayPaymentId=null, $sRazorPaySignature=null){
        $keyId = 'rzp_test_OGaFKDAoV3UjI1';
	 $keySecret = 'gKhkr8GYuttlieq0ALgNPS4d';
		$bVeryfied = false;

		if(!empty($sRazorPayOrderId) && !empty($sRazorPayPaymentId) && !empty($sRazorPaySignature)){
			$api = new Api($keyId, $keySecret);
	    try
	    {
	      // Please note that the razorpay order ID must
	      // come from a trusted source (session here, but
	      // could be database or something else)
	      $attributes = array(
	          'razorpay_order_id' => $sRazorPayOrderId,
	          'razorpay_payment_id' => $sRazorPayPaymentId,
	          'razorpay_signature' => $sRazorPaySignature
	      );

	      $api->utility->verifyPaymentSignature($attributes);
	      $bVeryfied = true;
	    }
	    catch(SignatureVerificationError $e)
	    {
	      $bVeryfied = false;
	      //$error = 'Razorpay Error : ' . $e->getMessage();
	    }	
		}		
		return $bVeryfied;
	}

  function FetchPaymentsForRazorPayOrder($sRazorPayOrderId=null){    
    $keyId = 'rzp_test_OGaFKDAoV3UjI1';
	 $keySecret = 'gKhkr8GYuttlieq0ALgNPS4d';
    
    $arrPayments = array();
    if(!empty($sRazorPayOrderId)){
      $api = new Api($keyId, $keySecret);      
      $arrRazorPayPayments = $api->order->fetch($sRazorPayOrderId)->payments()->toArray();
      if(count($arrRazorPayPayments)>0){
        $arrPayments = $arrRazorPayPayments;        
      }
    }
    return $arrPayments;
  }

  function FetchSettlementsForRazorPayPayments($sFromDate=null,$sToDate=null){    
    $keyId = 'rzp_test_OGaFKDAoV3UjI1';
	 $keySecret = 'gKhkr8GYuttlieq0ALgNPS4d';
    
    $arrSettlements = array();
    if(!empty($sDate)){
    	$sYear = date('Y', strtotime($sDate));
    	$sMonth = date('m', strtotime($sDate));
    	$sDay = date('d', strtotime($sDate));

    	//echo 'sYear=>'.$sYear.'sMonth=>'.$sMonth.'sDay=>'.$sDay;exit;

      $api = new Api($keyId, $keySecret);      
      $arrRazorPaySettlements = $api->settlement->reports(array('year' => 2020, 'month' => 07, 'day' =>04))->toArray();     
      //$arrRazorPaySettlements = $api->settlement->reports(array('year' => 2020, 'month' => 7))->toArray();
      if(count($arrRazorPaySettlements)>0){
        $arrSettlements = $arrRazorPaySettlements;        
      }
    }
    return $arrSettlements;
  }
  $order_id= ($_REQUEST["order_id"]);
//echo print_r( $order_id);


$get_order_details = "SELECT * FROM `user_orders` WHERE order_id  = '$order_id'";
$result_orders = mysqli_query($con, $get_order_details);
$row_orders = mysqli_fetch_assoc($result_orders);
//$invoice_number = String::uuid();

$amount_due = $row_orders['amount_due'];

$invoice_number = $row_orders['invoice_number'];
$arrOrderData = [
    'receipt'         => $invoice_number,
    'amount'          => $amount_due, //rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
    
  ];
  $arrRazorpayOrder = CreateRazorPayOrder($arrOrderData);
  echo '<pre>'; 
  // print_r( $arrRazorpayOrder); 
   print_r( CreateRazorPayOrder($arrOrderData)); 

   $sRazorPayOrderId = IsVeryfiedRazorPaySignature($arrOrderData);


   $IsVeryfiedRazorPaySignature
?>