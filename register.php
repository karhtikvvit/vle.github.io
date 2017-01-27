<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$con=mysqli_connect("localhost", "root", "","project");
if (isset($designation) && $designation=="student")
{
$sql = "INSERT INTO student ('firstname', 'lastname', 'email', 'mobile', 'password')
VALUES ('$firstname', '$lastname', '$email', '$mobile', '$password')";
}
else
{
 $sql = "INSERT INTO faculty ('firstname', 'lastname', 'email', 'mobile', 'password')
 VALUES ('$firstname', '$lastname', '$email', '$mobile', '$password')";
}
$rs=mysqli_query($con,$sql);
if($rs)
{
	echo "inserted";
}else
{
	echo "not inserted";
}
?>
