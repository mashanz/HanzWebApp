<?php
$con=mysqli_connect("localhost","root","","android");
$sql="INSERT INTO table1 (Username, Password, Role) VALUES ('user', 'user','normal user')";
if (mysqli_query($con,$sql))
{
   echo "Values have been inserted successfully";
}
?>