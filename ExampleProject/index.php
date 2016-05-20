<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<center><h2>Registration Form</h2></center>
	<div class="col-sm-6 col-sm-offset-3" style="margin-top:25px;">
		<form class="form-horizontal" method="POST" action="register.php">
			<div class="form-group">
				<label class="col-sm-4">Name</label>
				<input type="text" class="col-sm-4 form-control" placeholder="name" name="name">
			</div>
			<div class="form-group">
				<label class="col-sm-4">Surname</label>
				<input type="text" class="col-sm-4 form-control" placeholder="surname" name="surname">
			</div>
			<div class="form-group">
				<label class="col-sm-4">Age</label>
				<input type="text" class="col-sm-4 form-control" placeholder="age" name="age">
			</div>
			<div class="form-group">
				<label class="col-sm-4">City</label>
				<input type="text" class="col-sm-4 form-control" placeholder="city" name="city">
			</div>
			<div class="form-group">
				<label class="col-sm-4">Password</label>
				<input type="password" class="col-sm-4 form-control" placeholder="password" name="password">
			</div>
			<div class="form-group">
				<center><input type="submit" class="btn btn-success"></center>
			</div>
		</form>
	</div>
</body>
</html>