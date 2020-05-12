<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin: 20px;
		}
	</style>
</head>
<body>
	<div class="form-group margin">
	<form class="" action="includes/login.inc.php" method="post">
		<center><label><h2>Login Page</h2></h2></label></center>
		<label for="exampleInputEmail1">Email address</label>
		<input type="text" class="form-control" id="exampleInputEmail1" name="mailuid" placeholder="Username/Email..."><br>
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password..."><br>
		<button type="submit" class="btn btn-primary" name="login-submit">Login</button> 
	</form>
    </div>
	<center><big><a href="signup.php">Sign up</a></big></center>
</body>
</html>