<!DOCTYPE html>
<html>
<head>
	<title>SignUp Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin:20px;
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  border: 1px solid #e7e7e7;
		  background-color: #f3f3f3;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: #666;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #ddd;
		}

		li a.active {
		  color: white;
		  background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<main>
		<?php 
	 	if (isset($_GET["error"])) {
	 		if ($_GET["error"]=="emptyfields") {
	 			echo '<p>Fill in all the fields</p>';
	 		}else if($_GET["error"]=="invalidmailuid") {
	 			echo '<p>Invalid user name and e-mail</p>';
	 		}else if($_GET["error"]=="invalidmail") {
	 			echo '<p>Invalid e-mail</p>';
	 		}else if($_GET["error"]=="invaliduid") {
	 			echo '<p>Invalid user name</p>';
	 		}else if($_GET["error"]=="passwordcheck") {
	 			echo '<p>Your Password do not match</p>';
	 		}else if($_GET["error"]=="usertaken") {
	 			echo '<p>User is already taken</p>';
	 		}
	 	}
	 	 
	 	?>
	 	<ul>
	 	  <li><a class="active" href="#home">Home</a></li>
	 	  <li><a href="#contact">Contact</a></li>
	 	  <li><a href="#about">About</a></li>
	 	</ul>
	 	<form action="includes/signup.inc.php" method="post">
	 		<br><center><label><h2>SignUp page</h2></h2></label></center>
	 		<label for="name">User name</label>
	 		<input type="text" class="form-control" id="exampleInputEmail1" name="uid" placeholder="Username"><br>
	 		<label for="mail">Email Address</label>
	 		<input type="text" class="form-control" id="exampleInputEmail1" name="mail" placeholder="E-mail"><br>
	 		<label for="exampleInputPassword1">Password</label>
	 		<input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password"><br>
	 		<label for="exampleInputPassword1">ReEnter Password</label>
	 		<input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat" placeholder="Repeat Password"><br>
	 		<button type="submit" class="btn btn-primary" name="signup-submit">Sign up</button>
	 	</form>
	 	<center><br><big><a href="index.php">Login</a></big></center>
	 </main>
</body>
</html>




 <?php 
 require 'footer.php'; 
 ?>