<?php
$host= "127.0.0.1";
$dbname= "cafeteria";
$user= "root";
$pass="@dmin32A";
try{
$conn= new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
//ativa o modo de erros
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
$erro= $e->getMessage();
echo $erro;
}
