<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<style type="text/css">
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
		<nav>
			<ul>
			  <li><a class="active" href="#home">Home</a></li>
			  <li><a href="#contact">Contact</a></li>
			  <li><a href="#about">About</a></li>
			</ul>
			<div>
				<?php 
					 	if(isset($_SESSION["userId"])){
					 		echo '<form class="" action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Log Out</button>
				</form>';
					 	}else{
					 		require 'login.php';
					 	}	 

				?>
				
				
				
			</div>
		</nav>
	</body>
			


</html>
<?php 
 require 'footer.php'; 
 ?>
