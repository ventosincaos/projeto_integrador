<?php 
 $host = "127.0.0.1";
 $pass = "@dmin32A";
 $user = "root";
 $dbname ="exemplo";
 
 
try{
 $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "conection is sucess";

}
catch(PDOException $e){
$erro = $e-> getMessage();

echo $erro; 

}



?>