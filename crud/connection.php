<?php
error_reporting(0);
$severname = "localhost";
$username  = "root";
$password  = "";
$dbname    = "employee_management";

$conn = mysqli_connect($severname, $username,$password,$dbname);

if($conn)
{
    //echo "Connection ok";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>