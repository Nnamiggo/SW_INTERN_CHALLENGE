<!DOCTYPE html>
<html>
<head>
	<title>points accrual</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div id="page_container">
		<?PHP include "header.html"; ?>
		<div id="welcome">
	
			<h2 id="user">Welcome</h2>
		</div>
		<div id="main_section">
			<h2>Please Login</h2>
			
			<form action="#" method="get">
				<label>User ID: </label><input type="number" maxlength="3" name="id"><br><br>
				<label>Password: </label> <input type="password" maxlength="25" name="password"><br><br>
				<input type="submit" id="login" name="login" value="Login"><br>
			</form>
		</div>
		
		<div id="logincheck">
			<?php 

			if(isset($_POST[Login])) {

				//get posted values

				$id = $_GET['id'];
				$pwd = $_GET['login'];
				
				//include connection string

				$conn = new mysqli("localhost", "root", "stressfree", "FENIX");
				
				if ($conn->maxdb_connect_error()) {
					die ("<p>" .mysqli_error($conn)."</p>");
					
				}

				$sql = "SELECT employeeId, employeetype FROM employees WHERE id = $id && password = $pwd";
				
				if (mysqli_num_rows($sql)==0)
				{
					 echo("<p> Invalid user Id or password. </p>");
				}

				else {
					echo "<p>Success</p>";
				}
			}
			?>
	</div>
	<?PHP include "footer.html"; ?>
	</div>
</body>
</html>