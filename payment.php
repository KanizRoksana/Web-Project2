<?php

include "config2.php";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web.css"/>
<title>Payment</title>
<h2 class="h" align="center">Payment</h2>
</head>
<body id="b">
<div id="d">
<form action="payment.php" method="POST" align="center">
<b>
<br>
<label> Email </label>
<input name ="email" type="email" id="form" placeholder="Enter Your Email" required></input>
<br>
<b>
<label> Password </label>
<input name ="pass" type="password" id="form" placeholder="Enter Your Password" required></input>
<br>
<b>

<label> Account No. </label>
<input name ="text" type="text" id="form" placeholder="Enter Your Account No" required></input>
<br>

<label> Enter the Amount </label>
<input name ="number" type="text" id="form" placeholder="amount" required></input>
<br>



<a href="home2.php"><input name ="login" type="submit" id="button" value="Pay" ></input>


</form>
<?php
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$acc_no=$_POST['acc_no'];
	$pay=$_POST['pay'];
	
	$query="select*from user where email='$email' AND pass='$pass'";
	$check= mysqli_query($con,$query);
	
	if($check){
		if(mysqli_num_rows($check)> 0){
			echo"
<script>
alert ('You are successfully Logged In');
window.location.href='home2.php';
</script>
";
		}
	else{
		echo"
<script>
alert('Email or password not correct');
window.location.href='regi.php';
</script>
";
	}
	
}
else{
	echo"
<script>
alert('Database error');
window.location.href='login.php';
</script>
";
      }
}
else{
	
}


?>
</div>

</body>
</html>