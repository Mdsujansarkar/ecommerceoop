<?php 
 $product_id = $_GET['id'];
 $query_result=$ob_supera->select_product_info_by_id($product_id);
$product_info= mysqli_fetch_assoc($query_result);


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

		     <tr> 
		      <td>product id</td>
		      <td><?php echo $product_info['product_id']; ?></td>
            </tr>
            <tr> 
		      <td>product Name</td>
		      <td><?php echo $product_info['product_name']; ?></td>
            </tr>
            <tr> 
		      <td>Category Name</td>
		      <td><?php echo $product_info['category_name']; ?></td>
            </tr>
           
		   <tr> 
		      <td>Manufacture Name</td>
		      <td><?php echo $product_info['manufacturer_name']; ?></td>
            </tr>
              <tr> 
		      <td>product price</td>
		      <td><?php echo $product_info['product_price']; ?></td>
            </tr>
            <tr> 
		      <td>stock amount</td>
		      <td><?php echo $product_info['stock_amount']; ?></td>
            </tr>
            <tr> 
		      <td>minimum stock amount</td>
		      <td><?php echo $product_info['minimum_stock_amount']; ?></td>
            </tr>
           
            <tr> 
		      <td>product short description</td>
		      <td><?php echo $product_info['product_short_description']; ?></td>
            </tr>
            <tr> 
		      <td>product Long description</td>
		      <td><?php echo $product_info['product_long_description']; ?></td>
            </tr>
		  <tr> 
		      <td>product image</td>
		      <td style="height:150px; width:150px;"><img src="<?php echo $product_info['product_image']; ?>" alt="<?php echo $product_info['product_name']; ?>"></td>
            </tr>
            <tr> 
		      <td>publication status</td>
		      <td><?php 
              if($product_info['publication_status']==1){
              	echo "published ";
              }else{
              	echo "unpublished";
              }


		      ?></td>
            </tr>
	  </table>            
	</div>
</div><!--/span-->
</div>