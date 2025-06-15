<?php 
include '../config/config.php';
if(isset($_REQUEST['login_user'])){
	
	$email_id = $_REQUEST['email'];
    $message = $_REQUEST['message'];
	if(empty($name) && empty($email) && empty($message)){
        
		$_SESSION['error'] = "Sorry Please fill the blank field!";
		header("location:".$siteURL."/index.php");
	}else{
		$sql = mysqli_query($conn, "SELECT * FROM login_user WHERE email='$email'");
		if(mysqli_num_rows($sql)>0){			
			$_SESSION['error'] = "Your registration already exists!";
			header("location:".$siteURL."/index.php");
		}else{
			mysqli_query($conn, "INSERT INTO login_user (name , email , message) VALUES('$customer_name','$email_id', '$contact_number')");			
			$_SESSION['success'] = "Your registration successfully";
			header("location:".$siteURL."/index.php");
		}
	}

}
?>