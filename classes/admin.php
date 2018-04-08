<?php

class Admin{
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


	public function admin_login($data){
       
           $emailAdd = $data['email_addrees'];
           $password = md5($data['password']);
        


       $sql = "SELECT * FROM tbl_admin WHERE admin_email ='$emailAdd' AND password='$password'";
       
       if(mysqli_query($this->dbconnection, $sql)){
       	$query_result = mysqli_query($this->dbconnection, $sql);
        
        $admin_info = mysqli_fetch_assoc($query_result);
 
        
        if($admin_info){
          
          session_start();
          $_SESSION['admin_name'] = $admin_info['admin_name'];
          $_SESSION['admin_id'] = $admin_info['admin_id'];

        	header('Location:admin_master.php');

        }else{
        	$message = "Your email address or password are invalied";

        	return $message;
        }



       }else{
       	die('query problem'. mysql_error($this->dbconnection));
       }
  	}
}