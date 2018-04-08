<?php 
if(isset($_GET['status'])){
	$manufacturer_id = $_GET['id'];
	if($_GET['status']=='unpublished'){
		$message= $ob_supera->unpublished_by_manufacturer_id($manufacturer_id);
	}else if($_GET['status']=='published'){
		$message=$ob_supera->published_by_manufacturer_id($manufacturer_id);
	}else if($_GET['status']=='delete'){
		$message=$ob_supera->delete_by_manufacturer_id($manufacturer_id);
	}
}

$query_result=$ob_supera->select_all_manufacturer_info();

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
				  <th>manufacturer id</th>
				  <th>manufacturer name</th>
				  <th>manufacturer Description</th>
				  <th>Publication status</th>
				  <th>Actions</th>
			  </tr>
		  </thead>   
		  <tbody>
		  	<?php while($manufacturer_info=mysqli_fetch_assoc($query_result)){ ?>
			<tr>
				<td><?php echo $manufacturer_info['manufacturer_id']; ?></td>
				<td class="center"><?php echo $manufacturer_info['manufacturer_name']; ?></td>
				<td class="center"><?php echo $manufacturer_info['manufacturer_description']; ?></td>
				<td class="center">					<?php 
                     if($manufacturer_info['manufacturer_status']==1){
                     echo "Published";

                     }else {
                     	echo "Unpublished";
                     }


					?></td>
			
				<td class="center">
					<?php if($manufacturer_info['manufacturer_status']==1){ ?>
					<a class="btn btn-success" href="?status=unpublished&&id=<?php echo $manufacturer_info['manufacturer_id']; ?>" title="unpublished">
						<i class="halflings-icon white arrow-up"></i>  
					</a>
					<?php } else{ ?>
                       <a class="btn btn-danger" href="?status=published&&id=<?php echo $manufacturer_info['manufacturer_id']; ?>" title="published">
						<i class="halflings-icon white arrow-down"></i>  
					  </a>
					<?php } ?>
					<a class="btn btn-info" href="editmanufacturer.php?manufacturer_id=<?php echo $manufacturer_info['manufacturer_id']; ?>">
						<i class="halflings-icon white edit" title="edit"></i>  
					</a>
					<a class="btn btn-danger" href="?status=delete&&id=<?php echo $manufacturer_info['manufacturer_id']; ?>" title="delete" onclick="return check_delete();">
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