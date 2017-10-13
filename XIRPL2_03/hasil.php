<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VERIFY</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<?php
	
$host= "localhost";
$user= "root";
$password= "";
$email=$_GET['email'];
$fullname=$_GET['fullname'];
$user=$_GET['user'];

?>

<div id="login">

	<div class="Header">Verification Input Data</div>
	
	<div class="hasil">
		<div class="email">
			Email : <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Fullname : <?php echo" $fullname" ?><br>
		</div>

		<div class="user">
			User : <?php echo" $user" ?><br>
		</div>

		<div class="password">
			Password : <?php echo" $password" ?><br>
		</div>

	</div>
</div>
</body>
</html>