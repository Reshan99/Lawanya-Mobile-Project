<?php
//session_start();
error_reporting(0);
$servername = "localhost";//localhost
$username = "root";
$password="";
$dbname = "product";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Database Not connected";
}else{
   // echo "Database Connected";
}
?>