<?php

	if(isset($_POST['submit'])){
		session_start();
		$email =$_POST['email'];
		$password=$_POST['password'];

		if(!empty($email) && !empty($password)){
			if($email == "admin@code.edu.az" && $password == 123456){
				$_SESSION['admin'] = true;
				header('Location:admin.php');
			}
			else{
				$_SESSION['error']='Qeydiyyat sehvdir';
				header('Location:index.php');
			}
		}else{
			$_SESSION['error']='Qeydiyyati tamamla.';
			header('Location:index.php');
		}
	}
		
?>