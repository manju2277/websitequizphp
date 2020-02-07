<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
$id=0;
$count=0;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdata');
?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Space Quiz</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>
<td>
            <?php
            echo "Out of 5, You have attempt ".$_SESSION['pageviews']." option."; ?>
            </td>

<?php
	if (isset($_POST['submit']))
  {
$radioVal = $_POST['manju'];
array_push($_SESSION['p'],$radioVal);
}	
 $q="select * from questions";
 $query=mysqli_query($con,$q);
 while($rows=mysqli_fetch_array($query))
 {
 	if($rows['ans_id']==$_SESSION['p'][$id])
 	{
 		$count++;
 	}
 	$id++;
 }?>
<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
    				<?php 
	            echo " Your score is ". $count.".";
	            ?>
	            </td>
            </tr>
<?php
 $i=$_SESSION['pageviews'];
$name=$_SESSION['username'];
$final="insert into user(username,totalques,answercorrect)values('$name','$i','$count')";
$qu=mysqli_query($con,$final);
?>
</table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>