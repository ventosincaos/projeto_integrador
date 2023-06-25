<?php
include_once("../config/url.php");
include_once("../config/conexao.php");


$id; 

if(!empty($_GET)){
    $id= $_GET["id"];
    }
    
    if(!empty($id))
    {
    $query= "SELECT * FROM funcionarios WHERE id= :id";
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $onlyfuncionarios = $stmt->fetch();// retorna apenas a linha referente ao id
    
    }
    

    else
    {
    $query= "SELECT * FROM funcionarios";
    $stmt= $conn->prepare($query);
    $stmt->execute();
    $Allfuncionarios=[];
    $Allfuncionarios= $stmt->fetchAll();// retorna todas as linhas para a variavel
   
}

$data = $_POST;   // define as variaveis do formulario que usam POST  

if(!empty($data)){
if($data["type"] === "create")
{
try{

$nome= $data["nome"];
$sobrenome= $data["sobrenome"];
$cpf= $data["cpf"];
$emissor= $data["emissor"];
$data_nascimento= $data["data_nascimento"];
$telefone= $data["fone"];
$email= $data["email"];
$admissao= $data["admissao"];
$cargo= $data["cargo"];
$senha= $data["senha"];
$resposta = $data["resposta"];
$observacao = $data["observacao"];

$query= "INSERT INTO funcionarios (nome, sobrenome, cpf, emissor, data_nascimento, telefone, email, admissao,  cargo, senha, resposta, observacao) VALUES (:nome, :sobrenome, :cpf, :emissor, :data_nascimento, :telefone,
:email, :admissao,  :cargo, :senha, :resposta, :observacao)";
$stmt= $conn->prepare($query);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":cpf", $cpf);
$stmt->bindParam(":emissor", $emissor);
$stmt->bindParam(":data_nascimento", $data_nascimento);   
$stmt->bindParam(":telefone", $telefone);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":admissao", $admissao);
$stmt->bindParam(":cargo", $cargo);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":resposta", $resposta);
$stmt->bindParam(":observacao", $observacao);
$stmt->execute();


} catch(PDOException $e){
    $erro= $e->getMessage();
    echo $erro;
    }
     header("Location:".$BASE_URL."/../templates/table.php"); 
  
    }
    else if($data["type"]==="edit")
{
try{
$nome= $data["nome"];
$sobrenome= $data["sobrenome"];
$cpf= $data["cpf"];
$emissor= $data["emissor"];
$data_nascimento= $data["data_nascimento"];
$telefone= $data["fone"];
$email= $data["email"];
$admissao= $data["admissao"];
$demissao= $data["demissao"];
$cargo= $data["cargo"];
$senha= $data["senha"];
$resposta = $data["resposta"];
$observacao = $data["observacao"];
$idPost= $data["id"];

    $query= "UPDATE funcionarios SET
    nome=:nome,
    sobrenome=:sobrenome,
    cpf=:cpf,
    emissor=:emissor,
    data_nascimento=:data_nascimento,
    telefone=:telefone,
    email=:email,
    admissao=:admissao,
    demissao=:demissao,
    cargo=:cargo,
    senha=:senha,
    resposta=:resposta,
    observacao=:observacao
    WHERE id=:idPost";
$stmt= $conn->prepare($query);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":cpf", $cpf);
$stmt->bindParam(":emissor", $emissor);
$stmt->bindParam(":data_nascimento", $data_nascimento);  
$stmt->bindParam(":telefone", $telefone);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":admissao", $admissao);
$stmt->bindParam(":demissao", $demissao);
$stmt->bindParam(":cargo", $cargo);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":resposta", $resposta);
$stmt->bindParam(":observacao", $observacao);
$stmt->bindParam(":idPost", $idPost);
$stmt->execute();
} catch(PDOException $e){
$erro= $e->getMessage();
echo $erro;
}

 header("Location:".$BASE_URL."/../templates/table.php"); 
}//end else if adicionar funcionario

else if($data["type"]==="delete")
{
try{
    
$idDelete= $data["id"];

$query= "DELETE FROM funcionarios WHERE id=:idDelete";
$stmt= $conn->prepare($query);
$stmt->bindParam(":idDelete", $idDelete);
$stmt->execute();
} catch(PDOException $e){
$erro= $e->getMessage();
echo $erro;
}
   header("Location:".$BASE_URL."/../templates/table.php");
}//end if delete
   
}//end post
