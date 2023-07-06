<?php 
    
    include('../includes/connect.php');
    require('../razorpay-php/Razorpay.php');
    session_start();
    if(isset($_GET['order_id'])){
        $order_id = $_GET['order_id'];
        // echo $order_id;
        $select_data = "SELECT * FROM `user_orders` WHERE order_id = $order_id";
        $result = mysqli_query($con, $select_data);
        $row_fetch = mysqli_fetch_assoc($result);
        $invoice_number = $row_fetch['invoice_number'];
        $amount_due = $row_fetch['amount_due'];
    }

    if(isset($_POST['confirm_payment'])){
        $invoice_number = $_POST['invoice_number'];
        $amount = $_POST['amount'];
        $payment_mode = $_POST['payment_mode'];

        $insert_query = "INSERT INTO `user_payments` (order_id, invoice_number, amount, payment_mode) VALUES ($order_id, $invoice_number, $amount, '$payment_mode')";
        $result = mysqli_query($con, $insert_query);
echo $insert_query; exit;
        if($result){
            echo "<h3 class='text-center text-light'>Successfully completed payment</h3>";
            echo "<script>window.open('profile.php?my_orders', '_self')</script>";

            $update_orders = "UPDATE `user_orders` SET order_status = 'Complete' WHERE order_id = $order_id";
            $result_orders = mysqli_query($con, $update_orders);

            exit(); // Exit to prevent further execution of the script
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <style>
        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }

        @media (max-width: 576px) {
            .nav3{
                display: flex;
                flex-wrap: nowrap;
            }
        }
    </style>
</head>
<body>
    <div>
        <div class="container my-5">
            <h1 class="text-center text-color">Confirm Payment</h1>
                <form action="" method="post">
                    <div class="form-outline my-4 text-center w-50 m-auto">
                        <label for="invoice_number">Invoice Number</label>
                        <input type="text" name="invoice_number" class="form-control w-50 m-auto" value="<?php echo $invoice_number ?>">
                    </div>

                    <div class="form-outline my-4 text-center w-50 m-auto">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" class="form-control w-50 m-auto" value="<?php echo $amount_due ?>">
                    </div>
                    
                    <div class="form-outline my-4 text-center w-50 m-auto">
                        <button id="rzp-button1" class="btn py-2 px-3 border-0 text-light razorpay-payment-button">
                            Pay with Razorpay
                        </button>
                    </div>


                    <!-- <div class="form-outline my-4 text-center w-50 m-auto">
                        <input type="submit" name="confirm_payment" class="btn py-2 px-3 border-0 text-light" value="Confirm Payment">
                    </div> -->
                </form>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    var order_id = '<?php echo $order_id;?>';
    var invoice_number = '<?php echo $invoice_number; ?>';
    var amount_due = '<?php echo $amount_due; ?>';

    // Create a new instance of Razorpay
    var razorpay = new Razorpay({
      key: '<?php echo $razorpayKey;?>', // Replace with your actual Razorpay API key
      amount: amount_due * 100, // Amount in paise (multiply by 100 for Rupees)
      currency: 'INR', // Replace with your desired currency code
      name: 'Yearbook Canvas',
      description: 'Invoice: ' + invoice_number,
      handler: function(response) {

        // Handle the payment success
        var payment_id = response.razorpay_payment_id;
        var payment_signature = response.razorpay_signature;

        $.ajax({
          url: './process_payment.php', // Replace with the actual PHP file to handle payment verification
          method: 'POST',
          data: { 'order_id' : order_id, 'payment_id' : payment_id, 'payment_signature' : payment_signature},
          success: function(pmt_response) {
            // Handle the response after payment verification
            //console.log(pmt_response);
            
            if($.trim(pmt_response) != '')
            {
              const obj_pmt_res = JSON.parse(pmt_response);

              var response_status  = (obj_pmt_res.response_status) ? obj_pmt_res.response_status * 1 : 0;
              var response_message = (obj_pmt_res.response_message) ? $.trim(obj_pmt_res.response_message) : ''; 

              switch(response_status)
              {
                case 1  : 
                          alert('Payment successful');
                          // Redirect or perform any other necessary actions
                          window.location.href = 'profile.php'; // Replace with the URL of your success page
                          break;
                default :
                          alert(response_message);
              }
            }
            else
            {
              alert('Payment process response not found.');
            }  
          },
          error: function(xhr, status, error) {
            // Handle errors
            console.log(xhr.responseText);
            alert(xhr.responseText);
          }
        }); 
      }
    });

    // Attach the Razorpay payment handler to the button click event
    document.getElementById('rzp-button1').onclick = function(e) {
      e.preventDefault();
      razorpay.open();
    };
  </script>
</body>
</html>