<?php
include'../config/config.php';
//contact us code

if(isset ($_REQUEST['contact'])) {
	$fname = $_REQUEST['fname'];
	$email =  $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	$message =   $_REQUEST['message'];

// 	if(empty($fname) && empty($email) && empty($contact) && empty($message))
//     echo "Please fill the blank field";
// }else{
// 	$sql = "INSERT INTO contact_details(fname, email, contact, message)
// 	VALUES('$fname', '$email', '$contact', '$message')";

// 	if(mysqui_query($conn, $sql)){
// 		echo 'Data submitted successfully';

// 	}else {
// 		echo 'Error!'.mysqui_error($sql);
// 	}

// }

	if(empty($fname)){
		$_SESSION['error'] = "Please fill the blank field";
		header('location:'.$siteURl.'/contact-us.php');

	}else{ 
		$sql = mysqli_query($conn, "SELECT*FROM tbl_contact_info WHERE email = '$email'");

		if(mysqli_num_rows($sql)>0){

			$_SESSION['error'] = "Your query already exists!";
			header("location:".$siteURl."/contact-us.php");

	}else{

		$sql = mysqli_query($conn, "INSERT INTO tbl_contact_info(fname, email, contact,message)VALUES('$fname' , '$email' , '$contact_num' , '$message')");

		$_SESSION['success'] = "Your query has been submitted succesfully!";
		header('location:'.$siteURl.'/contact-us.php');
	}
		}
   }

   //Signup here

   if(isset ($_REQUEST['signup']) == 'signup') {
	$fname = $_REQUEST['name'];
	$email =  $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	$message =   $_REQUEST['pass'];
	$message =   $_REQUEST['cpass'];

	if(empty($name) && empty($email) && empty($contact) && empty($pass) && empty($cpass)) {

		$_SESSION['error'] = "Please fill the blank field";
		header("location:".$siteURl."/sign-up.php");

	} else{ 

		$password = md5($pass);
		if($pass == $cpass){
			$sql = mysqli_query($conn,"SELECT * FROM user_registration WHERE email = '$email");
			if(mysqui_num_rows($sql)>0){

					$_SESSION['error'] = "Your registration already exists";
		header("location:".$siteURl."/sign-up.php");
			
			}else{
				mysqli_query($conn, "INSERT INTO user_registration(name, contact, email, pass) VALUES('$name', '$contact',' $email',' $pass')");

				$_SESSION['success'] = "Your registration successfully";
		        header("location:".$siteURl."/sign-up.php");
             
             }
			}else{$_SESSION['success'] = "Your confirm password did not match";
		        header("location:".$siteURl."/sign-up.php");

			}
		}
	}
 ?>