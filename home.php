<?php
session_start();
?>











<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header"> 
<h1>Registration Form</h1>
</div>





<?php

if(isset($_SESSION['message']))
{
	echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
}
?>






<h4>You are logged in </h4>
<br>

We are redirecting you....

<br><br><br>

<div>
	      <button onclick="window.location.href = 'logout.php';">Logout</button>

	
</div>

        <?php
        header( 'Refresh: 5; URL = myaccount.php' );

        ?>











</body>
</html>