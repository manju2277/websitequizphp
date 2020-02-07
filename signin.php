<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<br><h1 class="text-center text-success"> Welcome to Quiz World</h1><br>
<div class="container">
	<div class="row">
                 <div class="col-lg-6 m-auto d-block">
				<div class="card">
				<h2 class="text-center card-header">Sign Form</h2>
				<form name="myform" action="registration.php" method="post">
					<div class="form-group">
					<label>username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
				</div>
				<div style="text-align:center">  
				<button  style="float: right;" class="btn btn-primary">signin</button>
			</div>
			<div style="text-align:center">  
				<button id="my" style="float: left;" class="btn btn-primary">login</button>
			</div>
                </div>
			</form>
		</div>
	</div>
</div>
	<script type="text/javascript">
    document.getElementById("my").onclick = function () {
        location.href = "login.php";
    };
</script>
</body>
</html>
