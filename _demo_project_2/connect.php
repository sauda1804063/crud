<?php
$host="localhost";
$user="root";
$pass="";
$db="crudoperation";

$con = mysqli_connect($host,$user,$pass,$db);

if($con)
{
    echo ""; 
}
else 
{
    echo "DB Not Connected";
}

?>