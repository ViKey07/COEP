<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <style>
        .bg-custom {
            background-color: #3A3086;
        }

        .text-success {
            color: green;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
        }

        /* .table thead {
            background-color: #3A3086;
            color: #fff;
        } */

        .table tbody {
            color: black;
        }

        .btn{
            background-color: #3A3086;
            border-radius: 0;
        }

        @media (max-width: 480px) {
            .table th,
            .table td {
                display: block;
                padding: 4px;
            }
            
            .table td:before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            .table tbody tr {
                display: block;
                margin-bottom: 10px;
            }

            .table tbody td {
                display: block;
                text-align: right;
                font-size: 13px;
                border-bottom: none;
            }

            .table tbody td:last-child {
                border-bottom: 1px solid #ddd;
            }
        }
    </style>
</head>
<body>
<?php
    $user_email = $_SESSION['user_email'];
    $get_user = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    $username = $row_fetch['username'];
    $user_address = $row_fetch['user_address'];
    $user_mobile = $row_fetch['user_mobile'];
?>

<h3 class="text-dark">All orders</h3>
<table class="table">
    <thead>
        <tr class='tb-hd'>
            <th>Sr no</th>
            <th>Name</th>
            <th>Amount due</th>
            <th>Total products</th>
            <th>Invoice number</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Date</th>
            <th>Complete/Incomplete</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $get_order_details = "SELECT * FROM `user_orders` WHERE user_id = $user_id";
        $result_orders = mysqli_query($con, $get_order_details);
        $number = 1;
        while ($row_orders = mysqli_fetch_assoc($result_orders)) {
            $order_id = $row_orders['order_id'];

            $amount_due = $row_orders['amount_due'];
            $total_products = $row_orders['total_products'];
            $invoice_number = $row_orders['invoice_number'];

            $order_status = $row_orders['order_status'];
            if ($order_status == 'pending') {
                $order_status = 'Incomplete';
            } else {
                $order_status = 'Complete';
            }
            $order_date = $row_orders['order_date'];

            echo "<tr>
                <td data-label='Sr no'>$number</td>
                <td data-label='username'>$username</td>
                <td data-label='Amount due'>$amount_due</td>
                <td data-label='Total products'>$total_products</td>
                <td data-label='Invoice number'>$invoice_number</td>
                <td data-label='user_address'>$user_address</td>
                <td data-label='user_mobile'>$user_mobile</td>
                <td data-label='Date'>$order_date</td>
                <td data-label='Complete/Incomplete'>$order_status</td>";

            if ($order_status == 'Complete') {
                echo "<td data-label='Status'>Paid</td>";
            } else {
                echo "<td data-label='Status'><a href='confirm_payment.php?order_id=$order_id' class='btn btn-primary px-3 py-2 mx-3 border-0'>Confirm payment</a></td>";
            }

            echo "</tr>";
            $number++;
        }
        ?>
    </tbody>
</table>

</body>
</html>



