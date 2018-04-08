<?php 

 $order_id = $_GET['id']; 
 $customer_query_result=$query_result=$ob_supera->select_customer_info_by_order_id($order_id);
 $customer_info=mysqli_fetch_assoc($customer_query_result);

 $shipping_query_result=$query_result=$ob_supera->select_shipping_info_by_order_id($order_id);
 $shipping_info=mysqli_fetch_assoc($shipping_query_result);

 $payment_query_result=$query_result=$ob_supera->select_payment_info_by_order_id($order_id);
 $payment_info=mysqli_fetch_assoc($payment_query_result);



?>
<div class="row-fluid sortable">		
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>view product</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<table class="table table-striped table-bordered bootstrap-datatable datatable">
        <h2>customer info</h2>
        <tr>
            <td>customer name</td>
            <td><?php echo $customer_info['first_name'].''.$customer_info['last_name']; ?></td>
        </tr>
         <tr>
            <td>Email address</td>
            <td><?php echo $customer_info['email_address']; ?></td>
        </tr>
         <tr>
            <td>phone number</td>
            <td><?php echo $customer_info['phone_number']; ?></td>
        </tr>
         <tr>
            <td>address</td>
            <td><?php echo $customer_info['address']; ?></td>
        </tr>
         <tr>
            <td>City</td>
            <td><?php echo $customer_info['city']; ?></td>
        </tr>
         <tr>
            <td>Distr</td>
            <td><?php echo $customer_info['dis']; ?></td>
        </tr>       
		   
	  </table>            
	  <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <h2>shipping info</h2>
        <tr>
            <td>customer name</td>
            <td><?php echo $shipping_info['full_name']; ?></td>
        </tr>
         <tr>
            <td>Email address</td>
            <td><?php echo $shipping_info['email_address']; ?></td>
        </tr>
         <tr>
            <td>phone number</td>
            <td><?php echo $shipping_info['phone_number']; ?></td>
        </tr>
         <tr>
            <td>address</td>
            <td><?php echo $shipping_info['address']; ?></td>
        </tr>
         <tr>
            <td>City</td>
            <td><?php echo $shipping_info['city']; ?></td>
        </tr>
         <tr>
            <td>Distr</td>
            <td><?php echo $shipping_info['dis']; ?></td>
        </tr>       
		   
	  </table>
	  <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <h2>payment info</h2>
        <tr>
            <td>payment type</td>
            <td><?php echo $payment_info['payment_type']; ?></td>
        </tr>
         <tr>
            <td>payment status</td>
            <td><?php echo $payment_info['payment_status']; ?></td>
        </tr>       
		   
	  </table> 
	    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <h2>product info</h2>
        <tr>
            <td>product ID</td>
            <td>product name</td>
            <td>product image</td>
            <td>product price</td>
            <td>product quentity</td>
            <td>total price</td>
        </tr>
          
		   
	  </table>             
	</div>
</div><!--/span-->
</div>