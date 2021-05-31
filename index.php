<!DOCTYPE html>
<html>
<head>


	<link rel="icon" href="images/java1.png">


		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">

	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - Learn Java</title>




</head>

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

<section class="main_para">






<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/winter.jpg" style="width:100%" height="600px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/winter1.jpg" style="width:100%" height="600px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/sun.jpg" style="width:100%" height="600px">
  
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>




















<!--
		<img src="images/coding_large.jpg" width="100%">
-->

	<p class="welcome_text" align="center">
			Welcome to the Learn-Java. <br>
			 Interactive Java Tutorial.
			 <br><br>


	</p>

	<p>



			<p class="que1"><b>Why Learn Java?</b> <br></p>

			<p class="para_123">Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is.
			 Java can be used for a large number of things, including software development, mobile applications, and
			  large systems development. As of 2019, 88% market share of all smartphones run on Android, the mobile operating system 
			  written in Java. Knowing Java opens a great deal of doors for you as a developer.
			<br><br><br> </p>

			<p class="que2"><b>Take-Away Skills</b>  <br></p>
			<p class="para_123">In this course you’ll be exposed to fundamental programming concepts, including object-oriented programming (OOP)
			 using Java. You’ll build 7 Java projects—like a basic calculator—to help you practice along the way.
			<br><br><br> </p>

			
			<br><br>
			<p class="que3"><b>Recently Updated</b>  <br></p>
			<p class="para_123">We’ve recently updated this course! For more information on why we did this update and how it might affect you,
			 check out this blog post: </p>
			 <a href="#" target="_blank" rel="noopener" class="para_123">Learn Java Updates</a>
			<br><br><br>
			<p class="que4"><b>Upcoming Releases</b>  <br></p>
			<p class="para_123">
			We’re building new and exciting content for this course, look for more new content soon!
			</p>
			<br><br><br>
			<br/>


			<p class="para_123">

			Whether you are an experienced programmer or not, this website is intended for everyone
			 who wishes to learn the Java programming language.
			 <br><br>
			</p>
			


			<p class="para_123" align="center">
			<?php
			echo "Thanks for visiting us.<br><br>";
			?> </p>
			
	</p>


</section>













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





