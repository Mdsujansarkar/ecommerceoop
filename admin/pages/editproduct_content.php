<?php 
$product_id = $_GET['id'];
 $query_result=$ob_supera->select_product_info_by_id($product_id);
$product_info= mysqli_fetch_assoc($query_result);

if(isset($_POST['cbtn'])) {
 $ob_supera->update_product_info_by_product_id($_POST);
}
?>

<ul class="breadcrumb">
<li>
	<i class="icon-home"></i>
	<a href="index.html">Home</a>
	<i class="icon-angle-right"></i> 
</li>
<li>
	<i class="icon-edit"></i>
	<a href="#">Category</a>
</li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon edit"></i><span class="break"></span>product add</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<h3 style="color:green;"><?php if(isset($message)){ echo $message; }?></h3>
	<div class="box-content">
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		  <fieldset>
			<div class="control-group">
			  <label class="control-label" for="typeahead">product name </label>
			  <div class="controls">
				<input type="text" name="product_name" value="<?php echo $product_info['product_name']; ?>" class="span6 typeahead" id="typeahead">
				<input type="hidden" name="product_id" class="span6 typeahead" id="typeahead">
				
			  </div>
			</div>
			 <div class="control-group">
				<label class="control-label" for="selectError">Publication status</label>
				<div class="controls">
				  <select id="selectError" name="category_id">
					<option>select category name</option>
					<?php while($category_info= mysqli_fetch_assoc($category_query_result)){ ?>
					<option value="<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>

			 <div class="control-group">
				<label class="control-label" for="selectError">Publication status</label>
				<div class="controls">
				  <select id="selectError" name="manufacturer_id">
					<option>select manufactrurer name</option>
					<?php while($manufacture_info= mysqli_fetch_assoc($manufacturer_query_result)){ ?>
					<option value="<?php echo $manufacture_info['manufacturer_id']; ?>"><?php echo $manufacture_info['manufacturer_name']; ?></option>
					<?php }  ?>
				  </select>
				</div>
			  </div>

			  <div class="control-group">
			  <label class="control-label" for="typeahead">product price </label>
			  <div class="controls">
				<input type="number" value="<?php echo $product_info['product_price']; ?>" name="product_price" class="span6 typeahead" id="typeahead">
				
			  </div>
			</div>


			  <div class="control-group">
			  <label class="control-label"  for="typeahead">stock amount </label>
			  <div class="controls">
				<input type="number" name="stock_amount" value="<?php echo $product_info['stock_amount']; ?>" class="span6 typeahead" id="typeahead">
				
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="typeahead">minimum stock amount</label>
			  <div class="controls">
				<input type="number" name="minimum_stock_amount" value="<?php echo $product_info['minimum_stock_amount']; ?>" class="span6 typeahead" id="typeahead">
				
			  </div>
			</div>

			<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">product short Description</label>
			  <div class="controls">
				<textarea class="cleditor" name="product_short_description"   id="textarea2" rows="3"><?php echo $product_info['product_short_description']; ?></textarea>
			  </div>
			</div>
			<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">product long Description</label>
			  <div class="controls">
				<textarea class="cleditor" name="product_long_description"  id="textarea2" rows="3"><?php echo $product_info['product_long_description']; ?></textarea>
			  </div>
			</div>
             
             <div class="control-group">
			  <label class="control-label" for="typeahead">image upload </label>
			  <div class="controls">
				<input type="file" name="product_image"  value="<?php echo $product_info['product_image']; ?>" class="span6 typeahead" id="typeahead">
				
			  </div>
			</div>

               <div class="control-group">
				<label class="control-label" for="selectError">Publication status</label>
				<div class="controls">
				  <select id="selectError" name="publication_status">
					<option>Publication status</option>
					<option value="1">Publish</option>
					<option value="0">Unpublish</option>
				  </select>
				</div>
			  </div>

			<div class="form-actions">
			  <button type="submit" name="cbtn" class="btn btn-primary">Product Save </button>
			  <button type="reset" name="" class="btn" >Cancel</button>
			</div>
		  </fieldset>
		</form>   

	</div>
</div><!--/span-->


</div><!--/row-->

</div><!--/.fluid-container-->

<!-- end: Content -->
