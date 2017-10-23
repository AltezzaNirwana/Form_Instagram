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
$name=$_GET['name'];
$user=$_GET['user'];
$pass=$_GET['pass'];

if($name)
{
	$conn=mysqli_connect($host,$user,$password); 
	mysqli_select_db('dbaingmacan',$conn);
	$sql="insert into tbaingmacan values('$email','$name','$user','$pass')";
	$hasil=mysqli_query ($conn,$sql);
}

else{
	echo "Data Gagal Disimpan";
}

?>

<div id="login">

	<div class="Header">Verification Input Data</div>
	
	<div class="hasil">
		<div class="email">
			Email : <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Fullname : <?php echo" $name"; ?><br>
		</div>

		<div class="user">
			User : <?php echo" $user"; ?><br>
		</div>

		<div class="password">
			Password : <?php echo" $pass"; ?><br>
		</div>

	</div>
</div>
</body>
</html>