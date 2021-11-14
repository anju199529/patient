<?php
$connection = mysqli_connect('localhost','root');
if($connection)
{
    echo "connection is ecstablish!";
}
else

{
    echo"Error Connection Failed";
}
mysqli_select_db($connection, 'patientdetails');
$Id=$_POST['id'];
$Name=$_POST['name'];
$Dob=$_POST['dob'];
$Gender=$_POST['gender'];
$Contact=$_POST['contact'];
$Email=$_POST['email'];

$data= "INSERT INTO user(id,name,dob,gender,contact,email) 
VALUES('$Id','$Name','$Dob','$Gender','$Contact','$Email')";

mysqli_query($connection,$data);
header('location:submitsuccessful.php');


?>
