<?php

include "config.php";

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="web.css"/>
<title>Logo-In</title>
<h2 class="h" align="center">Welcome to Home </h2>
</head>
<body id="b">
<div id="d">
<form action="home.php" method="POST" align="center">
<b>
<br>
<br>


<input name ="logout" type="submit" id="button" value="Log Out" ></input>


</form>
<?php
if(isset($_POST['logout'])){
	
	echo"
<script>
alert ('You are successfully Logged out');
window.location.href='index.php';
</script>
";
	
}
else{
	
}

?>
</div>

</body>
</html>