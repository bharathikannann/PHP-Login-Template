<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  cursor: pointer;
}
.button design

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
  padding: 32px 16px;
  width:50%;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Danger!</strong> Please Enter correct credentials.You entered wrong username and password.
</div><br><br>
<center>
<form action='includes/logout.inc.php' method='post'>
					<button type='submit' class='button button3' name='logout-submit'>Log Out</button>
				</form>
                </center>
</body>
</html>