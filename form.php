<?php
$servername="localhost";
$dbusername="root";
$dbpassword="2614";
$dbname="form_database";

$fname=$_POST['FName'];
$lname=$_POST['LName'];
$countrycode=$_POST['Ccode'];
$contact=$_POST['Contactn'];
$eid=$_POST['Eid'];
$comment=$_POST['Comment'];

$conn=new mysqli("$servername","$dbusername","$dbpassword","$dbname");
if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}
if(empty($fname))
{
		echo "First name cannot be left blank.";
		die();
}
if(empty($lname))
{
		echo "Last name cannot be left blank.";
		die();
}
if(empty($eid))
{
		echo "Conatct number cannot be left blank.";
		die();
}
$sql="insert into members (First_name,Last_Name,Country_Code,Contact,Email_id,Comment) values ('".$fname."','".$lname."','".$countrycode."','".$contact."','".$eid."','".$comment."')";
if($conn->query($sql)==TRUE)
{
	echo "Thankyou for your response! We will contact you soon.";
}
else
{
	echo "Error!! ". $sql ."<br>". $conn->error;
}
$conn->close();
?>