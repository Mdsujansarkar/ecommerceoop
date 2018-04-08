<?php 
if(isset($_POST['btn'])){
$message=$obj_app -> update_card_product_info($_POST);
}
if(isset($_GET['status'])){
	$cart_product_id= $_GET['id'];
	$message=$obj_app -> delet_card_product_info($cart_product_id);
}
$session_id = session_id();
$query_result=$obj_app -> select_cart_product_by_id($session_id);



?>

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Shopping Cart</li>
</ol>
</div>
<h2><?php if(isset($message)){ echo $message; unset($message); } ?></h2>
<div class="table-responsive cart_info">
<table class="table table-condensed">
	<thead>
		
		<tr class="cart_menu">
			<td class="image">Item</td>
			<td class="description"></td>
			<td class="price">Price</td>
			<td class="quantity">Quantity</td>
			<td class="total">Total</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php $sum=0; while($cart_product =mysqli_fetch_assoc($query_result)){ ?>
		<tr>
			<td class="cart_product">
				<a href=""><img src="asset/<?php echo $cart_product['product_image']; ?>" alt="" width="125" height="125"></a>
			</td>
			<td class="cart_description">
				<h4><a href=""><?php echo $cart_product['product_name']; ?></a></h4>
				<p>ID: <?php echo $cart_product['product_id']; ?></p>
			</td>
			<td class="cart_price">
				<p>BTD: <?php echo $cart_product['product_price']; ?> /=</p>
			</td>
			<td class="cart_quantity">
				<form action="" method="post">
				<div class="cart_quantity_button">
			
					<input class="cart_quantity_input" type="text" name="product_quantity" value="<?php echo $cart_product['product_quantity']; ?>" autocomplete="off" size="2">
					<input class="cart_quantity_input" type="hidden" name="temp_card_id" value="<?php echo $cart_product['temp_card_id']; ?>" autocomplete="off" size="2">
					<input type="submit" name="btn" class="cart_quantity_down" value="Update">
				</div>
				</form>
			</td>
			<td class="cart_total">
				<?php 
                  $total = $cart_product['product_price']* $cart_product['product_quantity'];
                  
				?>
				<p class="cart_total_price">BTD <?php if($total>0){echo $total; } ?> /=</p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href="?status=delet&&id=<?php echo $cart_product['temp_card_id'];?>"><i class="fa fa-times"></i></a>
			</td>
		</tr>
        <?php $sum=$sum+$total; } ?>
		
	</tbody>
</table>
<table class="table table-condensed table-border">
	<tr class="cart_menu">
		<td>sub total</td>
		<td class="pull-right">BTD :<?php echo $sum; ?>/=</td>
	</tr>
	<tr class="cart_menu">
		<td>VAT total</td>
		<td class="pull-right">BTD :<?php  
          $vat = ($sum*15)/100;
		echo $vat; ?>/=</td>
	</tr>
	<tr class="cart_menu">
		<td>Grant total</td>
		<td class="pull-right">BTD :<?php $grant= $sum+$vat; 
		$_SESSION['order_total']=$grant;
         echo $grant;
		?>/=</td>
	</tr>
</table>
</div>
</div>
</section> <!--/#cart_items-->
<div class="container"> 
	<div class="row"> 
      <div class="col-md-12"> 
        <div class="panel panel-default"> 
        	<div class="panel-body"> 
        		<a href="index.php" class="btn btn-primary">contune shipping</a>
        		<?php $customer_id= isset($_SESSION['customer_id']); 
                      $shipping_id= isset($_SESSION['shipping_id']);
                      if($customer_id == NULL && $shipping_id==NULL){ ?>

        		<a href="checkout.php" class="btn btn-primary pull-right">chack out</a>

        		<?php }elseif($customer_id !== NULL && $shipping_id==NULL) { ?>

        			<a href="shipping.php" class="btn btn-primary pull-right">chack out</a>

        	<?php	}elseif($customer_id !== NULL && $shipping_id!==NULL){ ?>

        	    <a href="payment.php" class="btn btn-primary pull-right">chack out</a>

        	    <?php } ?>
        	</div>
        </div>
      </div>
	</div>
</div>

<section id="do_action">
<div class="container">
<div class="heading">
<h3>What would you like to do next?</h3>
<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
</div>
<div class="row">
<div class="col-sm-6">
	<div class="chose_area">
		<ul class="user_option">
			<li>
				<input type="checkbox">
				<label>Use Coupon Code</label>
			</li>
			<li>
				<input type="checkbox">
				<label>Use Gift Voucher</label>
			</li>
			<li>
				<input type="checkbox">
				<label>Estimate Shipping & Taxes</label>
			</li>
		</ul>
		<ul class="user_info">
			<li class="single_field">
				<label>Country:</label>
				<select>
					<option>United States</option>
					<option>Bangladesh</option>
					<option>UK</option>
					<option>India</option>
					<option>Pakistan</option>
					<option>Ucrane</option>
					<option>Canada</option>
					<option>Dubai</option>
				</select>
				
			</li>
			<li class="single_field">
				<label>Region / State:</label>
				<select>
					<option>Select</option>
					<option>Dhaka</option>
					<option>London</option>
					<option>Dillih</option>
					<option>Lahore</option>
					<option>Alaska</option>
					<option>Canada</option>
					<option>Dubai</option>
				</select>
			
			</li>
			<li class="single_field zip-field">
				<label>Zip Code:</label>
				<input type="text">
			</li>
		</ul>
		<a class="btn btn-default update" href="">Get Quotes</a>
		<a class="btn btn-default check_out" href="">Continue</a>
	</div>
</div>
<div class="col-sm-6">
	<div class="total_area">
		<ul>
			<li>Cart Sub Total <span>$59</span></li>
			<li>Eco Tax <span>$2</span></li>
			<li>Shipping Cost <span>Free</span></li>
			<li>Total <span>$61</span></li>
		</ul>
			<a class="btn btn-default update" href="">Update</a>
			<a class="btn btn-default check_out" href="">Check Out</a>
	</div>
</div>
</div>
</div>
</section><!--/#do_action-->