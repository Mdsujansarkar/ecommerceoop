<?php 
if(isset($_POST['btn'])){
 $obj_app->save_customer_info($_POST);
}

?>

<div class="container"> 
	<div class="row"> 
      <div class="col-md-12"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>please log in if not please registration</h2>
        	</div>
        </div>
      </div>
	</div>
</div>
<div class="row"> 
      <div class="col-md-6"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>Registration here</h2>
        		<hr>
        		<form class="form-horizontal" action="" method="post">
        			<div class="form-group"> 
        				<label for="first" class="control-label col-lg-3">first name</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="first_name" class="form-control" id="first" require>
        				</div>
        			</div>
        			<div class="form-group"> 
        				<label for="last" class="control-label col-lg-3">last name</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="last_name" class="form-control" id="last" require>
        				</div>
        			</div>
        			<div class="form-group"> 
        				<label for="email" class="control-label col-lg-3">email</label>
        				<div class="col-lg-9"> 
                         <input type="email" name="email_address" class="form-control" id="email" require>
        				</div>
        			</div>
        			<div class="form-group"> 
        				<label for="password" class="control-label col-lg-3">password</label>
        				<div class="col-lg-9"> 
                         <input type="password" name="password" class="form-control" id="password" require>
        				</div>
        			</div>
        			<div class="form-group"> 
        				<label for="contact" class="control-label col-lg-3">contact number</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="phone_number" class="form-control" id="contact" require>
        				</div>
        			</div>
        			    <div class="form-group"> 
        				<label for="city" class="control-label col-lg-3">blod grop</label>
        				<div class="col-lg-9"> 
                         <select name="blod_group" id="">
                         	<option value="-1">select</option>
                         	<option value="1">A+</option>
                         	<option value="2">AB+</option>
                         	<option value="4">O+</option>
                         	<option value="5">A-</option>
                         	<option value="6">B-</option>
                         	<option value="7">AB-</option>
                         	<option value="8">O-</option>
                         </select>
        				</div>
        			  
        			</div>
        			 <div class="form-group"> 
        				<label for="area" class="control-label col-lg-3">Address</label>
        				<div class="col-lg-9"> 
                         <textarea class="from-control" name="address"></textarea>
        				</div>

        			</div>
        			 <div class="form-group"> 
        				<label for="city" class="control-label col-lg-3">city</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="city" class="form-control" id="city" require>
        				</div>
        			  
        			</div>
        		
        			 <div class="form-group"> 
        				<label for="Dis" class="control-label col-lg-3">District</label>
        				<div class="col-lg-9"> 
                         <input type="text" name="dis" class="form-control" id="Dis" require>
        				</div>
        			  
        			</div>
        			 <div class="form-group"> 
        	
        				
                         <input type="submit" name="btn" class="btn btn-primary pull-right" value="submit">
        				
        			</div>

           		</form>
        	</div>
        </div>
      
	</div>
	<div class="col-md-6"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>Login here</h2>
        		<hr>
        		<form class="form-horizontal" action="">
        		
        			<div class="form-group"> 
        				<label for="email" class="control-label col-lg-3">email</label>
        				<div class="col-lg-9"> 
                         <input type="email" name="email_name" class="form-control" id="email" require>
        				</div>
        			</div>
        			<div class="form-group"> 
        				<label for="password" class="control-label col-lg-3">password</label>
        				<div class="col-lg-9"> 
                         <input type="password" name="password_name" class="form-control" id="password" require>
        				</div>
        			</div>
        		<div class="form-group">
                         <input type="submit" name="btn" class="btn btn-primary pull-right" value="login">
        				
        		</div>

           		</form>
        	</div>
        </div>
      
	</div>
</div>