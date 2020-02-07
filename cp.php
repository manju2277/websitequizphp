<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdata');
$_SESSION['pageviews'] = ($_SESSION['pageviews']) ? $_SESSION['pageviews'] + 1 : 1;
$id=$_SESSION['pageviews'];
if($id!=1)
{
 if (isset($_POST['submit']))
  {
$radioVal = $_POST["manju"];
array_push($_SESSION['p'],$radioVal);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	
</head>
<body>
	<div class="container">
<br><h1 class="text-center text-primary"> Space Quiz<h1>
<h2 class="text-center text-success">welcome  <?php echo $_SESSION['username'];?></h2>
<div class="col-lg-8 m-auto d-block">
<div class="card">
	</div>
	<?php
	if($id!=5)
		{?>
	<form action="cp.php" method="post">
		<?php
	}?>
	<?php
	if($id==5)
		{?>
	<form action="check.php" method="post">
		<?php
	}?>
	<?php
	$q="select * from questions where qid=$id";
	$query=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($query))
	{
		?>
     <div class="card">
     	<h4 class="card-header"><?php echo $rows['question']?></h4>
      <?php 
       $q="select * from answers where ans_id=$id";
	    $query=mysqli_query($con,$q);
        while($rows=mysqli_fetch_array($query))
	{
		?>
     <div class="card-body">
     <input type="radio" name="manju" value="<?php echo $rows['aid']; ?>" >
     <?php echo $rows['answer'] ?>


     </div>
<?php 
}}
?>
<button id="my1" name="submit" class="btn btn-success">submit</button>
</form>
</div>
</div>
<br>
<br>
<div class="m-auto">
<a href="logout.php" class="btn btn-primary">
LOGOUT</a>
</div>
</div>
</body>
</html>