<?php 
$customer_id =$_SESSION['customer_id'];
if(isset($_POST['sign'])){
    $obj_app->save_shipping_info($_POST);
}
 $query_result=$obj_app->select_customer_info_by_id($customer_id);
 $customer_info = mysqli_fetch_assoc($query_result);


?>

<div class="container"> 
	<div class="row"> 
      <div class="col-md-12"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>Welcome <?php echo $_SESSION['customer_name']; ?> for shipping in my website and shpping address and billing address are same just press submit button :)</h2>
        	</div>
        </div>
      </div>
	</div>
</div>
<div class="row"> 
      <div class="col-md-8"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>Shipping here</h2>
        		<hr>
        		<form class="form-horizontal" action="" method="post">
        			<div class="form-group"> 
        				<label for="first" class="control-label col-lg-3">full name</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="full_name" class="form-control" value="<?php echo $customer_info['first_name'].''.$customer_info['last_name']; ?>" id="first" require>
        				</div>
        			</div>
        
        			<div class="form-group"> 
        				<label for="email" class="control-label col-lg-3">email</label>
        				<div class="col-lg-9"> 
                         <input type="email" value="<?php echo $customer_info['email_address']; ?>" name="email_address" class="form-control" id="email" require>
        				</div>
        			</div>
        		
        			<div class="form-group"> 
        				<label for="contact" class="control-label col-lg-3">contact number</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="phone_number" value="<?php echo $customer_info['phone_number']; ?>" class="form-control" id="contact" require>
        				</div>
        			</div>
        			 
        			 <div class="form-group"> 
        				<label for="area" class="control-label col-lg-3">Address</label>
        				<div class="col-lg-9"> 
                         <textarea class="from-control" name="address"><?php echo $customer_info['address']; ?></textarea>
        				</div>

        			</div>
        			 <div class="form-group"> 
        				<label for="city" class="control-label col-lg-3">city</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="city" value="<?php echo $customer_info['city']; ?>" class="form-control" id="city" require>
        				</div>
        			  
        			</div>
        		
        			 <div class="form-group"> 
        				<label for="Dis" class="control-label col-lg-3">District</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="dis" value="<?php echo $customer_info['dis']; ?>" class="form-control" id="Dis" require>
        				</div>
        			  
        			</div>
        			 <div class="form-group"> 
        	
        				
                         <input type="submit" name="sign" class="btn btn-primary pull-right" value="submit">
        				
        			</div>

           		</form>
        	</div>
        </div>
      
	</div>
	
	</div>
</div>