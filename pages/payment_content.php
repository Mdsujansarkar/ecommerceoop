<?php 
if(isset($_POST['btn'])){
 $obj_app->save_order_info($_POST);
}

?>
<div class="container"> 
	<div class="row"> 
      <div class="col-md-12"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2> SELECT YOUR PAYMENT METHODS</h2>
        	</div>
        </div>
      </div>
	</div>
</div>
<div class="row"> 
      <div class="col-md-3"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<h2>Shipping here</h2>
        		<hr>
        		<form class="form-horizontal" action="" method="post">
                 <table class="table table-striped"> 
                   <tr> 
                    <td>Cash on delivery</td>
                    <td><input type="radio" name="payment_type" value="cash_ondelivery"></td>
                   </tr>
                   <tr> 
                    <td>paypel</td>
                    <td><input type="radio" name="payment_type" value="paypel"></td>
                   </tr>
                   <tr> 
                    <td>bKash</td>
                    <td><input type="radio" name="payment_type" value="bkash"></td>
                   </tr>
                   <tr> 
                    
                    <td><input type="submit" name="btn" value="order confarm" class="btn btn-primary"></td>
                   </tr>
                 </table>

           		</form>
        	</div>
        </div>
      
	</div>
	
	</div>
</div>