<h3 class="text-center text-success">All Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php
            $get_orders = "SELECT u.username, u.user_address, u.user_mobile, o.* FROM `user_orders` o
                INNER JOIN `user_table` u ON u.user_id = o.user_id";
            $result = mysqli_query($con, $get_orders);
            $row_count = mysqli_num_rows($result);
            echo "<tr>
            <th>No.</th>
            <th>Name</th>
            <th>Due Amount</th>
            <th>Invoice Number</th>
            <th>Total Products</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Order date</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";

    if($row_count == 0){
        echo "<h2 class='text-danger text-center mt-5'>No orders yet.</h2>";
    }else{
        $number = 0;
        while($row_data = mysqli_fetch_assoc($result)){
            $order_id = $row_data['order_id'];
            $username = $row_data['username'];
            $user_address = $row_data['user_address'];
            $user_mobile = $row_data['user_mobile'];
            $amount_due = $row_data['amount_due'];
            $invoice_number = $row_data['invoice_number'];
            $total_products = $row_data['total_products'];
            $order_date = $row_data['order_date'];
            $order_status = $row_data['order_status'];
            $number++;
            echo "<tr>
            <td>$number</td>
            <td>$username</td>
            <td>$amount_due</td>
            <td>$invoice_number</td>
            <td>$total_products</td>
            <td>$user_address</td>
            <td>$user_mobile</td>
            <td>$order_date</td>
            <td>$order_status</td>
            <td><a href=''><i class='fa-solid fa-trash text-light'></i></a></td>
        </tr>";
        }
    }
        ?>
        
        
    </tbody>
</table>