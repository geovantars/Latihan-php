<?php

include "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi,$query);

if(!$result){
	die('Query Failed' . mysqli_error($koneksi));
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
	<div class="col-6">
	<from action="login_update.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"/>
		</div>
		<div class="form-group">
			<select name="id" class="form-control">
				<?php
				while($row =mysqli fetch_assdc($result)){
					$id = $row['id'];
					echo "<option value='$id'>$id</option>';
				}
				?>

				</select>
			</div>
			<input type="submit" name="submit" value="UPDATE" class="btn btn-primary" />
		</form>
	</div>
</div>
		
</body>
</html>
//LEVEL 2 - Creating Update Records Form 