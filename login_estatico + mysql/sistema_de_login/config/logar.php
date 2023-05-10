


<?php


include 'conexao.php'; 

$usuario = $conexao -> real_escape_string($_POST['usuario']);
$senha = $conexao -> real_escape_string($_POST['senha']);

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND  senha = '$senha'";
echo $query;
$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
  
  $_SESSION['login'] = true;
    header('location: ../paginas/inicio.php');
}
else{
    
   header('location: ../paginas/login.php?erro');
    

}



?>

