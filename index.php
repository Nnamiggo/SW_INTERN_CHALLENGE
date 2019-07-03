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
		<!-- 	<form>
				<label>Welcome</label>
				<input type="" name="">
			</form> -->
			<h2 id="user">Welcome</h2>
		</div>
		<div id="main_section">
			<h2>Please Login</h2>
			<form>
				<label>User name: </label><input type="text" maxlength="40" name="name"><br><br>
				<label>Password: </label> <input type="Password" maxlength="25" name="Password"><br><br>
				<input type="button" id="login" name="Login" value="Login"><br>
			</form>
		</div>
		<?PHP include "footer.html"; ?>


	</div>
</body>
</html>