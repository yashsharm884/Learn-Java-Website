<?php
session_start();

//connect to database;

$db = mysqli_connect("localhost", "root","","authentication");


if(isset($_POST['register_btn'] ) )
{





    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2'); 


/*

	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);
*/

	if($password == $password2)
	{
		$password = md5($password);  //hash password before storing..........
		$sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "You are logged in.";
		$_SESSION['username'] = $username;

//header( 'Refresh: 5; URL=contact.php' );

        header("location: home.php");



	}
	else
	{
		$_SESSION['message'] ="The Two password doesnot matach.";
	}
}


?>







<!DOCTYPE html>
<html>
<head>


	<link rel="icon" href="images/java1.png">




		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">

	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">






 

	<title>My Account-Learn Java</title>




</head>



<style>




body{
	background-image: url('images/myacount.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	color: white;
}


/*

div {
  background-image: url('images/abc123.jpg');
}


*/
</style>


<body>

	<div class="header" >
		<div class="inner_header">
			<div class="logo_container">
				<a href="index.php">
					<br>
				<h1>Learn <span>Java</span></h1>
			</div>

			<ul class="navigation">



				    <a href="index.php"><li>Home</li></a>
				    <a href="about.php"><li>About Us</li></a>
					<a href="testimonial.php"><li>Testimonial</li></a>
					<a href="blog.php"><li>Blog</li></a>
					<a href="contact.php"><li>Contact</li></a>
					<a href="myaccount.php"><li>My Account</li></a>





			</ul>



		</div>
	


	</div>



















<style>

form
{
	text-align: center;
	margin: 0 auto;
}
table
{
	margin: 0 auto;
}

/*
body{
	background-image: url('images/myacount.jpg');
	background-repeat: no-repeat;
	background-size: 1600px 900px;
}
*/
</style> 











<div>
	<br><br><br>
<h1 style="text-align: center; color: white;">Registration Form</h1><br><br>
</div>
<br><br>

<!--

<?php

if(isset($_SESSION['message']))
{
	echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
}
?>
-->

<form method="post" action="myaccount.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="form-control" required></td>			
		</tr>

		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="form-control" required></td>			
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="form-control" required></td>			
		</tr>

		<tr>
			<td>Password Again:</td>
			<td><input type="password2" name="password2" class="form-control" required></td>			
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register"></td>			
		</tr>



	</table>

</form>

<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      <button onclick="window.location.href = 'login.php';" style="">Login here</button>


	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






<footer>




		<footer class="footer-distributed">
 
				<div class="footer-left">
			  <img src="images/logo.png">
					<h3>Learn <span> Java</span></h3>
	 
					<p class="footer-links">


						<a href="index.php">Home</a>
						|
						<a href="about.php">About Us</a>
						|
						<a href="testimonial.php">Testimonial</a>
						|
						<a href="blog.php">blog</a>
						|
						<a href="contact.php">Contact</a>
						|
						<a href="myaccount.php">My Account</a>

					</p>
	 
					<p class="footer-company-name">© 2019 Yash Bhardwaj Industries Pvt. Ltd.</p>
				</div>
	 
				<div class="footer-center">
					<div>
						<i class="fa fa-map-marker"></i>
					</div>
	 
					<div>
						<i class="fa fa-phone"></i>
						<p>+91 </p>
					</div>
					<div>
						<i class="fa fa-envelope"></i>

							<p><a href="mailto:yashsharm884@gmail.com? subject=subject text">Send Eamil</a></p>


					</div>
				</div>
				<div class="footer-right">
					<p class="footer-company-about">
						<span>About the company</span>
						We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
					<div class="footer-icons">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</footer>

</body>
</html>

