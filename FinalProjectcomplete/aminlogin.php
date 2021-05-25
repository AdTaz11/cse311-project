
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<?php include 'parts.php' ?>
</head>
	<body class="image"> 
<header>
	<div class= "container center-div shadow mb-5">
		<div class="heading text-center text-uppercase text-black"> ADMIN LOGIN 
	</div>
	<div class= "container row d-flex flex-row justify-content-center mb-5">
		<div class= "admin-form shadow p-2">
			<form action ="logincheck.php" method ="POST">
				<div class="form-group">
					<label>Email ID</label>
					<input type="text" name="user" value="" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="pass" value="" class="form-control" autocomplete="off">
				</div>
				
				<li>
						<a href="dashboard.php">submit</a>
					</li>
			</form>
		</div>
	</div>
</header>
		
</body>
</html>