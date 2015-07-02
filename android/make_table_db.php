<?php
$con=mysqli_connect("localhost","root","");
$sql="CREATE DATABASE android";
if (mysqli_query($con,$sql))
{
   echo "Database my_db created successfully";
}
?>