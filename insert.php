<!DOCTYPE html>
<html>



<?php





$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$mobile = filter_input(INPUT_POST, 'mobile');
$email = filter_input(INPUT_POST, 'email');
//$subject = filter_input(INPUT_POST, 'subject');



if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($mobile)){
if (!empty($email)){


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test1";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (firstname,lastname,mobile,email)
values ('$firstname','$lastname','$mobile','$email')";







if ($conn->query($sql)){
//echo "Thanks for Contact us."; 
//echo "<br>";
//echo "We will contact you...";
//echo "<br><br><br><br>";
//echo "We will redirecting you to the page...";

echo "<body style='background: url(images/thankyou.jpg);'>";


echo '<span style="color:#AFA; text-align:center; ">Thank you for submit the request.</span><br><br>';
echo '<span style="color:#AFA; text-align:center; ">We will contact you.</span><br><br>';
echo '<span style="color:#AFA; text-align:center; ">We will redirecting you to the contact page..again</span><br><br>';






header( 'Refresh: 5; URL=contact.php' );

//header( 'location: contact.html' ) ;
 


}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}else
echo " Mobile should not be empty.";
die();
}
}


?>





</html>
