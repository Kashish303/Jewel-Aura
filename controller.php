<?php 
include '../config/config.php';
if(isset($_REQUEST['contact'])){
	$customer_name = $_REQUEST['name'];
	$email_id = $_REQUEST['email'];
	$contact_number =$_REQUEST['message'];
	

	if(empty($name) && empty($email) && empty($message)){
        // print_r(empty($name) && empty($email) && empty($message)
        // exit();
		

		$_SESSION['error'] = "Sorry Please fill the blank field!";
		header("location:".$siteURL."/index.php");
	}else{
		$sql = mysqli_query($conn, "SELECT * FROM contact WHERE email='$email'");
		
		if(mysqli_num_rows($sql)>0){			

			$_SESSION['error'] = "Your registration already exists!";
			header("location:".$siteURL."/index.php");
		}else{
			mysqli_query($conn, "INSERT INTO contact(name ,, message)VALUES('$customer_name','$email_id', '$contact_number')");			
			$_SESSION['success'] = "Your registration successfully";
			header("location:".$siteURL."/index.php");
		}
	}

}
?>