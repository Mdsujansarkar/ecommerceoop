<?php 



class Super_admin{

	private $dbconnection;
	public function __construct(){
		$host_name= 'Localhost';
		$user_name ='root';
		$password ='';
		$dbname ='db_shop';
		$this ->dbconnection= mysqli_connect($host_name, $user_name, $password, $dbname);

		if(!$this ->dbconnection){
			die('Conection Fail'. mysqli_error($this ->dbconnection));
		}
	}

    public function save_category_info($data){
    	
    	$sql = "INSERT INTO tbl_category(category_name, category_description, category_status) VALUES('$data[category_name]', '$data[category_description]', '$data[sts]')";
        
        if(mysqli_query($this->dbconnection, $sql)){
        	$message = "category creat successfully";
        	return $message;
        }else{
        	die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function select_all_category_info(){
    	$sql = "SELECT * FROM tbl_category";
        
        if(mysqli_query($this->dbconnection, $sql)){
        	$query_result = mysqli_query($this->dbconnection, $sql);

        	return $query_result;
        }else{
        	die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    
    public function unpublished_by_category_id($category_id){
        $sql = "UPDATE tbl_category SET category_status=0 WHERE category_id='$category_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "Category unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function published_by_category_id($category_id){
        $sql = "UPDATE tbl_category SET category_status=1 WHERE category_id='$category_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "Category unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function delete_by_category_id($category_id){
         $sql = "DELETE FROM tbl_category WHERE category_id='$category_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "Category unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    public function select_category_info_by_category_id($category_id) {
        $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id' ";
        $resource_id = mysqli_query($this->dbconnection, $sql);
        return $resource_id;
    }
    public function update_category_info_by_category_id($data) {
        $sql = "UPDATE tbl_category SET category_name='$data[category_name]', category_description='$data[category_description]', category_status='$data[sts]' WHERE category_id='$data[category_id]'";
        if (mysqli_query($this->dbconnection, $sql)) {
            $_SESSION['message'] = "Category info update sucessfully";
            header('Location:http://localhost/ecommerce/admin/manage_category.php');
        } else {
            die('Query problem' . mysqli_error($this->dbconnection));
        }
    }

    public function save_manufacturer_info($data){
     $sql = "INSERT INTO tbl_manufacture(manufacturer_name, manufacturer_description, manufacturer_status) VALUES('$data[manufacturer_name]', '$data[manufacturer_description]', '$data[sts]')";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "manufacturer creat successfully";
            return $message;
        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }   
    }
    public function select_all_manufacturer_info(){
        $sql = "SELECT * FROM tbl_manufacture";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $query_result = mysqli_query($this->dbconnection, $sql);

            return $query_result;
        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }

    }

    public function unpublished_by_manufacturer_id($manufacturer_id){
    
       $sql = "UPDATE tbl_manufacture SET manufacturer_status=0 WHERE manufacturer_id='$manufacturer_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "manufacturer unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }

    }

    public function published_by_manufacturer_id($manufacturer_id){
         $sql = "UPDATE tbl_manufacture SET manufacturer_status=1 WHERE manufacturer_id='$manufacturer_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "manufacturer published successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    public function select_manufacturer_info_by_id($manufacturer_id){
       $sql = "SELECT * FROM tbl_manufacture WHERE manufacturer_id = '$manufacturer_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $query_result = mysqli_query($this->dbconnection, $sql);

            return $query_result;
        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }

    }
    public function update_manufacturer_info($data){
        $sql = "UPDATE tbl_manufacture SET manufacturer_name='$data[manufacturer_name]', manufacturer_description='$data[manufacturer_description]', manufacturer_status='$data[sts]' WHERE manufacturer_id='$data[manufacturer_id]'";
        if (mysqli_query($this->dbconnection, $sql)) {
            $_SESSION['message'] = "manufacturer info update sucessfully";
            header('Location:http://localhost/ecommerce/admin/manage_menufacture.php');
        } else {
            die('Query problem' . mysqli_error($this->dbconnection));
        }
    }

    public function delete_by_manufacturer_id($manufacturer_id){
          $sql = "DELETE FROM tbl_manufacture WHERE manufacturer_id='$manufacturer_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "Manufacturer delete successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function save_product_info($data){

        $directory ="../asset/images/";
        $targetFile = $directory.$_FILES['product_image']['name'];
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $fileSize =$_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if($image){

            if(file_exists($targetFile)){

            die("image are exist");
            }else{

                if($fileSize > 5242880){
                    die("file size to large");
                }else{

                    if($fileType !='jpg' && $fileType != 'png' ){
                        die("File type are invalide");
                    }else{

                        move_uploaded_file($_FILES['product_image']['tmp_name'], $targetFile);
                        $sql = "INSERT INTO tbl_product (product_name, category_id, manufacturer_id, product_price,stock_amount, minimum_stock_amount,product_short_description,product_long_description,product_image,publication_status) VALUES('$data[product_name]', '$data[category_id]', '$data[manufacturer_id]', '$data[product_price]','$data[stock_amount]','$data[minimum_stock_amount]','$data[product_short_description]','$data[product_long_description]','$targetFile','$data[publication_status]')";
                        if(mysqli_query($this->dbconnection, $sql)){
                          $message = "Manufacturer delete successfully";
                           return $message;

                             }else{
                            die('query problem'. mysqli_error($this->dbconnection));
                      }
                    }
                }
            }
        }else{
            die("This file are not image");
         }
    }

    public function select_all_product_info(){

        $sql = "SELECT p.product_id, p.product_name, p.category_id, p.manufacturer_id, p.product_price, p.stock_amount,p.publication_status, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacture as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $query_result = mysqli_query($this->dbconnection, $sql);

            return $query_result;
        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    public function select_product_info_by_id($product_id){
    
    $sql = "SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacture as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id AND p.product_id='$product_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $query_result = mysqli_query($this->dbconnection, $sql);

            return $query_result;
        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }

    }

    public function unpublished_by_product_id($product_id){
        $sql = "UPDATE tbl_product SET publication_status=0 WHERE product_id='$product_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "product id unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function published_by_product_id($product_id){
        $sql = "UPDATE tbl_product SET publication_status=1 WHERE product_id='$product_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "product unpublished successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        } 
    }
    public function delete_by_product_id($product_id){
          $sql = "DELETE FROM tbl_product WHERE product_id='$product_id'";
        
        if(mysqli_query($this->dbconnection, $sql)){
            $message = "product delete successfully";
            return $message;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }

    }
    public function update_product_info_by_product_id($data){

       
        $directory ="../images/";
        $targetFile = $directory.$_FILES['product_image']['name'];
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $fileSize =$_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if($image){

            if(file_exists($targetFile)){

            die("image are exist");
            }else{

                if($fileSize > 5242880){
                    die("file size to large");
                }else{

                    if($fileType !='jpg' && $fileType != 'png' ){
                        die("File type are invalide");
                    }else{

                        move_uploaded_file($_FILES['product_image']['tmp_name'], $targetFile);
                        $sql = "UPDATE tbl_product SET product_name ='$data[product_name]', category_id='$data[category_id]', manufacturer_id ='$data[manufacturer_id]', product_price ='$data[product_price]',stock_amount='$data[stock_amount]', minimum_stock_amount ='$data[minimum_stock_amount]',product_short_description ='$data[product_short_description]',  product_long_description='$data[product_long_description]',product_image='$targetFile',publication_status='$data[publication_status]' WHERE product_id = '$data[product_id]'";
                        if(mysqli_query($this->dbconnection, $sql)){
                          $_SESSION['message'] = "manufacturer info update sucessfully";
                           header('Location:http://localhost/ecommerce/admin/manage_menufacture.php');

                             }else{
                            die('query problem'. mysqli_error($this->dbconnection));
                      }
                    }
                }
            }
        }else{
            die("This file are not image");
         }
      

    }
    public function select_all_order_info(){
        $sql ="SELECT o.*, c.first_name,c.last_name, p.payment_type,p.payment_status FROM tbl_order as o, tbl_customer as c, tbl_payment as p WHERE o.customer_id=c.customer_id AND o.order_id=p.order_id";
         if(mysqli_query($this->dbconnection, $sql)){
            $query_result=mysqli_query($this->dbconnection, $sql);
            return $query_result;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    public function select_customer_info_by_order_id($order_id){
       $sql ="SELECT o.order_id, o.customer_id, c.*  FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id AND o.order_id='$order_id'";
         if(mysqli_query($this->dbconnection, $sql)){
            $query_result=mysqli_query($this->dbconnection, $sql);
            return $query_result;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }

    public function select_shipping_info_by_order_id($order_id){
         $sql ="SELECT o.order_id, o.shipping_id, s.*  FROM tbl_order as o, tbl_shipping as s WHERE o.shipping_id=s.shipping_id AND o.order_id='$order_id'";
         if(mysqli_query($this->dbconnection, $sql)){
            $query_result=mysqli_query($this->dbconnection, $sql);
            return $query_result;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }
    public function select_payment_info_by_order_id($order_id){
         $sql ="SELECT o.order_id, p.*  FROM tbl_order as o, tbl_payment as p WHERE o.order_id=p.order_id AND o.order_id='$order_id'";
         if(mysqli_query($this->dbconnection, $sql)){
            $query_result=mysqli_query($this->dbconnection, $sql);
            return $query_result;

        }else{
            die('query problem'. mysqli_error($this->dbconnection));
        }
    }




	public function logout(){
		unset($_SESSION['admin_name']);
		unset($_SESSION['admin_id']);
		header('Location: index.php');
	}
}