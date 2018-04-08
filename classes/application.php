<?php 


class Application{
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

	public function select_all_published_category(){
		$sql = "SELECT * FROM tbl_category WHERE category_status= 1";
		if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
	} 
	public function select_all_published_manufacture(){
			$sql = "SELECT * FROM tbl_manufacture WHERE manufacturer_status= 1";
		if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
	}
    public function select_product_latest_info(){
   	$sql = "SELECT * FROM tbl_product WHERE publication_status= 1 ORDER BY product_id DESC LIMIT 6";
		if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
     	
    }



    public function select_info_by_id($product_id){
    	$sql = "SELECT p.*, c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c, tbl_manufacture as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id AND product_id ='$product_id'";

    	if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }
    public function add_to_cart($data){
    	$product_id = $data['product_id'];
    	$sql ="SELECT product_name, product_price, product_image FROM tbl_product WHERE product_id= '$product_id'";
    	
			$query_result = mysqli_query($this->dbconnection, $sql);
			$product_info = mysqli_fetch_assoc($query_result);

			session_start();
			$session_id = session_id();
			$sql ="INSERT INTO tbl_temp_card(session_id,product_id,product_name, product_price,product_quantity,product_image) VALUES('$session_id','$product_id','$product_info[product_name]','$product_info[product_price]','$data[product_quantity]','$product_info[product_image]')";
			 mysqli_query($this->dbconnection, $sql);
			 header("Location:cart.php");
    	
    }

    public function select_cart_product_by_id($session_id){
    	$sql = "SELECT * FROM tbl_temp_card WHERE session_id ='$session_id'";

    	if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}

    }
    public function update_card_product_info($data){

       $sql ="UPDATE tbl_temp_card SET product_quantity = '$data[product_quantity]' WHERE temp_card_id='$data[temp_card_id]'";
    	if(mysqli_query($this->dbconnection, $sql)){
			$message ="cart product info update successfully";
			return $message;
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}

    }
    public function delet_card_product_info($cart_product_id){
    	$sql ="DELETE FROM tbl_temp_card  WHERE temp_card_id='$cart_product_id'";
    	if(mysqli_query($this->dbconnection, $sql)){
			$message ="cart product info delete successfully";
			return $message;
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }
    
    public function select_published_by_category_id($category_id){
    		$sql = "SELECT * FROM tbl_product  WHERE category_id= '$category_id' AND publication_status=1 ORDER BY product_id DESC";
		     if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }

    public function save_customer_info($data){
    	$password = md5($data[password]);
    	$sql = "INSERT INTO tbl_customer(first_name,last_name,email_address,password,phone_number,blod_group,	address,city,dis) VALUES('$data[first_name]','$data[last_name]','$data[email_address]','$password','$data[phone_number]','$data[blod_group]','$data[address]','$data[city]','$data[dis]')";
		     if(mysqli_query($this->dbconnection, $sql)){
			  $customer_id=mysqli_insert_id($this->dbconnection);
			  session_start();
			  $_SESSION['customer_id'] = $customer_id;
			  $_SESSION['customer_name'] = $data['first_name'].''.$data['last_name'];
			  /*
              *email varifaction*/
              //mail($to,$subject,$message);
			  header("Location:shipping.php");
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }
    public function select_customer_info_by_id($customer_id){
    		$sql = "SELECT * FROM tbl_customer  WHERE customer_id= '$customer_id'";
		     if(mysqli_query($this->dbconnection, $sql)){
			$query_result = mysqli_query($this->dbconnection, $sql);
			return $query_result; 
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }
    public function save_shipping_info($data){
     
    	$sql = "INSERT INTO tbl_shipping(full_name,email_address,phone_number,address,city,dis) VALUES('$data[full_name]','$data[email_address]','$data[phone_number]','$data[address]','$data[city]','$data[dis]')";
		     if(mysqli_query($this->dbconnection, $sql)){
			  $shipping_id=mysqli_insert_id($this->dbconnection);
			  session_start();
			  $_SESSION['shipping_id'] = $shipping_id;
			 
			  header("Location:payment.php");
		}else{
			die("Query problem". mysqli_error($this->dbconnection));
		}
    }

    public function save_order_info($data){
    	$payment_type = $data['payment_type'];  
    	if($payment_type == 'cash_ondelivery'){
          session_start();
    		$customer_id =$_SESSION['customer_id'];  
    		$shipping_id =$_SESSION['shipping_id'];
    		$order_total =$_SESSION['order_total'];
    		$sql ="INSERT INTO tbl_order(customer_id,shipping_id,order_total) VALUES('$customer_id','$shipping_id','$order_total')"; 
    		  if(mysqli_query($this->dbconnection, $sql)){
			  $order_id=mysqli_insert_id($this->dbconnection);
			  $sql ="INSERT INTO tbl_payment(order_id,payment_type) VALUES('$order_id','$payment_type')";
			       if(mysqli_query($this->dbconnection, $sql)){
			       	
			       	$session_id=session_id();
			       	$sql ="SELECT * FROM tbl_temp_card WHERE session_id='$session_id'";
			       	$query_result =mysqli_query($this->dbconnection, $sql);
			        
			       	while($product_info=mysqli_fetch_assoc($query_result)){
			       	$sql ="INSERT INTO tbl_order_details(order_id,product_id,product_name,product_price,product_quantity,product_image) VALUES('$order_id','$product_info[product_id]','$product_info[product_name]','$product_info[product_price]','$product_info[product_quantity]','$product_info[product_image]')";
			       	    mysqli_query($this->dbconnection, $sql);
			       	}
			       	$sql ="DELETE FROM tbl_temp_card WHERE session_id='$session_id'";
			       	mysqli_query($this->dbconnection, $sql);
			       	unset($_SESSION['order_total']);

			       	header("Location:customer_home.php");

			        }else{
			         die("Query problem". mysqli_error($this->dbconnection));
		              }	 
       		  }else{
			  die("Query problem". mysqli_error($this->dbconnection));
		   }
		
    	}
    }
    public function logout_customer(){
    	unset($_SESSION['customer_id']);
    	unset($_SESSION['customer_name']);
    	unset($_SESSION['shipping_id']);
    	header("Location:index.php");
    }



}