<?php 
$query_result=$ob_supera->select_all_order_info();

?>
<div class="row-fluid sortable">		
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<h2><?php if(isset($message)){ echo $message; unset($message); }?></h2>
		<h2><?php if(isset($_SESSION['message'])){ echo $_SESSION['message']; unset($_SESSION['message']); }?></h2>
		<table class="table table-striped table-bordered bootstrap-datatable datatable">
		  <thead>
			  <tr>
				  <th>Order id</th>
				  <th>customer name</th>
				  <th>Order total</th>
				  <th>Order status</th>
				  <th>payment type</th>
				  <th>Publication status</th>
				  <th>Actions</th>
			  </tr>
			</thead>
		  <tbody>
		  	<?php while($order_info=mysqli_fetch_assoc($query_result)){ ?>
			<tr>
				<td><?php echo $order_info['order_id']; ?></td>
				<td class="center"><?php echo $order_info['first_name'].''.$order_info['first_name']; ?></td>
				<td class="center"><?php echo $order_info['order_total']; ?></td>
				<td class="center"><?php echo $order_info['order_status']; ?></td>
				<td class="center"><?php echo $order_info['payment_type']; ?></td>
				<td class="center"><?php echo $order_info['payment_status']; ?></td>

                <td>
                   <a class="btn btn-primary" href="view_order.php?id=<?php echo $order_info['order_id']; ?>">
						<i class="halflings-icon white zoom-in" title="view order"></i>  
					</a>
					<a class="btn btn-primary" href="view_invoce.php?id=<?php echo $order_info['order_id']; ?>">
						<i class="halflings-icon white zoom-in" title="view invoce"></i>  
					</a>

				
					<a class="btn btn-info" href="editproduct.php?id=<?php echo $order_info['order_id']; ?>">
						<i class="halflings-icon white edit" title="Download"></i>  
					</a>
					<a class="btn btn-danger" href="?status=delete&&id=<?php echo $order_info['order_id']; ?>" title="edit order" onclick="return check_delete();">
						<i class="halflings-icon white trash"></i> 
					</a>
					<a class="btn btn-danger" href="?status=delete&&id=<?php echo $order_info['order_id']; ?>" title="delete order" onclick="return check_delete();">
						<i class="halflings-icon white trash"></i> 
					</a>
				</td>
			</tr>
			<?php } ?>
		  </tbody>
	  </table>            
	</div>
</div><!--/span-->
</div>