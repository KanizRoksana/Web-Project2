<?php

include "config.php";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web.css"/>
<title>Registration</title>
<h2 class="h" align="center">Welcome to our page!!!! <br> Registration Form</h2>

</head>
<body id="b">
<div id="d">
<form action="regi.php" method="POST"align="center">
<b>
<label> User-Name </label>
<input name ="name" type="text" id="form" placeholder="Enter Your Name" required ></input>
<br>
<b>
<label> User-Email </label>
<input name ="email" type="email" id="form" placeholder="Enter Your Email" required></input>
<br>
<b>
<label> User-Password </label>
<input name ="pass" type="password" id="form" placeholder="Enter Your Password" required></input>
<br>
<b>
<label> Confirm-Password </label>
<input name ="cpass" type="password" id="form" placeholder="Confirm Your Password" required></input>

<input name ="regi" type="submit" id="button" value="Sign-Up" ></input>
<a href="login.php"><input name ="back" type="button" id="button" value=" Back to Login" ></input>

</form>

<?php
if(isset($_POST['regi']))
{
$name=$_POST['name'];
$email=$_POST['email'];	
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

if($pass == $cpass){
	
	$query=" select*from user where email='$email' ";
	$query_check=mysqli_query($con,$query);
	
	if($query_check){
		
		if(mysqli_num_rows($query_check)> 0)
		{
		echo"
<script>
alert('Email already use');
window.location.href='login.php';
</script>
";

		
		}
		else{
			$insertion="insert into user values('$name','$email','$pass')";
			$run= mysqli_query($con,$insertion);
			
			if($run){
				echo"
<script>
alert('you are successfully registered');
window.location.href='home.php';
</script>
";
				
				
			}
			else{
				echo"
<script>
alert('Connection failed');
window.location.href='regi.php';
</script>
";
			}
		}
		
		
		
	}
	else{
		echo"
<script>
alert('Database error');
window.location.href='regi.php';
</script>
";
	}
	
	
	
}

else{
	echo"
<script>
alert('Password & Confirm-Password Does not match');
window.location.href='regi.php';
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