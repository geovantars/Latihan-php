<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$koneksi = mysqli_connect("localhost", "root", "", "belajar_loginapp");
	
	if($koneksi){
		echo "We re connected";
	}else{
		echo "connection failed";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="col-md-6">
		<form action="login1.php" method="post">
			<div class="from-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" />
			</div>
			<div calss="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" />
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn-primary" />
		</form>
	</div>
</div>
></body>
</html>
LEVEL 2 - Connecting to the Database using PHP 