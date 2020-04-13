<?php

include "config.php";

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web.css"/>
<title>Log In</title>
<h2 class="h" align="center">Welcome to Log In </h2>
</head>
<body id="b">
<div id="d">
<form action="login.php" method="POST" align="center">
<b>
<br>
<label> User-Email </label>
<input name ="email" type="email" id="form" placeholder="Enter Your Email" required></input>
<br>
<b>
<label> User-Password </label>
<input name ="pass" type="password" id="form" placeholder="Enter Your Password" required></input>
<br>
<b>


<input name ="login" type="submit" id="button" value="Log In" ></input>
<a href="regi.php"><input name ="regi" type="button" id="button" value=" Registration" ></input>

</form>
<?php
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$query="select*from user where email='$email' AND pass='$pass'";
	$check= mysqli_query($con,$query);
	
	if($check){
		if(mysqli_num_rows($check)> 0){
			echo"
<script>
alert ('You are successfully Logged In');
window.location.href='home.php';
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