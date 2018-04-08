<?php 

if(isset($_POST['cbtn'])){
$message=$ob_supera->save_manufacturer_info($_POST);

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
					<a href="#">manufacturer</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>manufacturer add</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<h3 style="color:green;"><?php if(isset($message)){ echo $message; }?></h3>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">manufacturer name </label>
							  <div class="controls">
								<input type="text" name="manufacturer_name" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">manufacturer Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacturer_description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>


                          <div class="control-group">
								<label class="control-label" for="selectError">Publication status</label>
								<div class="controls">
								  <select id="selectError" name="sts">
									<option>Publication status</option>
									<option value="1">Publish</option>
									<option value="0">Unpublish</option>
								  </select>
								</div>
							  </div>

							<div class="form-actions">
							  <button type="submit" name="cbtn" class="btn btn-primary">Save changes</button>
							  <button type="reset" name="" class="btn" >Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
				

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	