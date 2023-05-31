<?php
$host= "localhost";
$dbname="agenda";
$user= "root";
$pass= "";
try{
$conn= new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
//ativa o modo de erros
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
$erro= $e->getMessage();
echo $erro;
}

//precisava de alguém com windows desse CTRL + H e mudasse tanto o nome do bando de dados, quanto o nome da tabela de "contatos" para funcionários,
// mas teria que mudar todas as variaveis tanto em processamento.php, como em processamentoLogin.php, e em todas as páginas em templates.
?>
