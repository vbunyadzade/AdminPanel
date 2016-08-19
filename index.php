
<!DOCTYPE html>

<html>
<head>
	<title>AdminPages</title>
	<link rel="stylesheet" type="text/css" href="img/bootstrap.css">
	<style>
		.panel{
			border:1px solid green;
			border-radius: 1px;
			}
		img{
			margin-top: 30px;
		}
		.text{
			margin-top: 15px;
			width: 250px;
			height: 40px;

		}
		.btn {
			margin-top: 20px;
			width: 150px;
		}
		.copy{
			background-color: lightgray;
			height: 50px;
			margin-top:20px;
			padding-top: 20px;
		}
		.img-circle{
			border: 1px solid gray;
			padding:5px;
		}
		.eror{
			color:red;
			padding-top: 10px;
			font-size: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		 <div class="col-md-5 col-md-offset-3">
			 <div class="panel text-center">
				 	 <img src="img/no-image.png" class="img-circle text-center"><br>
						 	<h4>Admin Login</h4>
					 		<p>Sign in to your account</p>

					 <form action="check.php" method="post">

					 	 <input type="text" class="text" name="email" placeholder="mail@code.edu.az"><br>

					 	 <input type="password" class="text" name="password" placeholder="password"><br>

					 	 <input type="submit" value="Sign in" class="btn btn-success" name="submit">
				 	 </form>
						<?php 
						session_start();
					if(isset($_SESSION['error'])){  ?>
						<p class="eror"><?=$_SESSION['error']?></p>
					<?php
					unset($_SESSION['error']);
					}?>

				 	 <div class="copy">
			<p>&copy Code Acamey 2016. All rights reserved.</p>
		</div>
			</div>
		 </div>
	</div>
</div>
</body>
</html>	