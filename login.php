<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<div class="container">
		<br><h1 class="text-center text-success"> Welcome to Quiz World</h1><br>
		<div class="row">
			<div class="col-lg-6 m-auto d-block">
				<div class="card">
				<h2 class="text-center card-header">Login Form</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
					<label>username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
				</div >
				<div style="text-align:center">
				<button type="submit" class="btn btn-primary">login</button>
			</div>
                </div>
			</form>
		</div>
			
	</div>
</div>
</head>
<body>
</body>
</html>