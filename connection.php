<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mtalhakhan_8623";

$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn){
    echo"connection";
}
else{
    echo"connection error";
}?>