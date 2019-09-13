<?php
$name=$_POST['name'];
$Add=$_POST['address'];
$Email=$_POST['email'];
$MobileNum=$_POST['mobile'];
$Specialization=$_POST['field'];
$Degree=$_POST['degree'];
$ID_Proof=$_POST['id'];
$Gender=$_POST['gender'];

$servername = "localhost";
 $dbusername = "root";
  $dbpassword = ""; 
  $dbname="doctor_info";

$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql= "INSERT INTO d_info (name, address,mail,contact,gender,degree,specialization,proof) VALUES ($name,$Add,$Email,$MobileNum,$Gender,$Degree,$field,$id);

if (mysqli_query($conn, $sql)) {
    echo "added to cart";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>