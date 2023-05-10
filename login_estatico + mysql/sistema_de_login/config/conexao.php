<?php
$user = 'root';
$pass = '@dmin32A';
$database = 'usuarios';
$host = '127.0.0.1';

echo "aqui'";

$conexao = new mysqli($host, $user, $pass, $database);
# utilizar esse comando para testar a conexão
if($conexao){
    echo "conectado com sucesso";
}
else {
    echo "Error ao conectar";
}




?>


