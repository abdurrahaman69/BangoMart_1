<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "impulse101";


$con = mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_error()){
        echo "failed to connect";
        exit();
}
echo "connection success!";
        
 ?>      