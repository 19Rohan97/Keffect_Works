<?php

$conn=mysqli_connect('localhost','root','','user-verification');

if($conn->connect_error)
{
	die('Database Error:'. $conn->connect_error);
}
 ?> 