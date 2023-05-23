<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/funcionario/conn.php';

$data = $_POST;

print_r($data);

switch ($data['type']) {
    case 1:
        try {



            $nome_funcionarios = $data['nome_funcionarios'];
            $sobrenome_funcionarios = $data['sobrenome_funcionarios'];
            $data_nascimento_funcionarios = $data['data_nascimento_funcionarios'];
            $cpf_funcionarios = $data["cpf_funcionarios"];
            $celular_funcionarios = $data['celular_funcionarios'];
            $email_funcionarios = $data['email_funcionarios'];
            $data_admissao_funcionarios = $data['data_admissao_funcionarios'];
            $data_demissao_funcionarios = $data['data_demissao_funcionarios'];
            $id_cargo_funcionarios = $data['id_cargo_funcionarios'];

            $query = "INSERT INTO 
                funcionarios
                (nome_funcionarios,
                sobrenome_funcionarios,
                data_nascimento_funcionarios, 
                cpf_funcionarios,
                celular_funcionarios,
                email_funcionarios,
                data_admissao_funcionarios,
                data_demissao_funcionarios,
                id_cargo_funcionarios) VALUES(
                :nome_funcionarios, 
                :sobrenome_funcionarios, 
                :data_nascimento_funcionarios,
                :cpf_funcionarios, 
                :celular_funcionarios, 
                :email_funcionarios, 
                :data_admissao_funcionarios, 
                :data_demissao_funcionarios, 
                :id_cargo_funcionarios)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome_funcionarios", $nome_funcionarios);
            $stmt->bindParam(":sobrenome_funcionarios", $sobrenome_funcionarios);
            $stmt->bindParam(":data_nascimento_funcionarios", $data_nascimento_funcionarios);
            $stmt->bindParam(":cpf_funcionarios", $cpf_funcionarios);
            $stmt->bindParam(":celular_funcionarios", $celular_funcionarios);
            $stmt->bindParam(":email_funcionarios", $email_funcionarios);
            $stmt->bindParam(":data_admissao_funcionarios", $data_admissao_funcionarios);
            $stmt->bindParam(":data_demissao_funcionarios", $data_demissao_funcionarios);
            $stmt->bindParam(":id_cargo_funcionarios", $id_cargo_funcionarios);
            $stmt->execute();

            echo "cadastrado";

        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $error;
        }
        break;

    case 2:

        #$data['type'] = 2;

        
        #print_r($data);

        try {
            $idPost = $data['id_funcionarios'];
            $nome_funcionarios = $data['nome_funcionarios'];
            $sobrenome_funcionarios = $data['sobrenome_funcionarios'];
            $data_nascimento_funcionarios = $data['data_nascimento_funcionarios'];
            $cpf_funcionarios = $data["cpf_funcionarios"];
            $email_funcionarios = $data['email_funcionarios'];
            $data_admissao_funcionarios = $data['data_admissao_funcionarios'];
            $data_demissao_funcionarios = $data['data_demissao_funcionarios'];
            $id_cargo_funcionarios = $data['id_cargo_funcionarios'];

            $query = "UPDATE teste_empresa.funcionarios SET
            nome_funcionarios=:nome_funcionarios,
            sobrenome_funcionarios=:sobrenome_funcionarios,
            data_nascimento_funcionarios=:data_nascimento_funcionarios,
            cpf_funcionarios=:cpf_funcionarios,
            email_funcionarios =:email_funcionarios,
            data_admissao_funcionarios =:data_admissao_funcionarios,
            data_demissao_funcionarios = :data_demissao_funcionarios,
            id_cargo_funcionarios = :id_cargo_funcionarios
            WHERE id_funcionarios = :id_funcionarios";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":idPost", $idPost);
            $stmt->bindParam(":nome_funcionarios", $nome_funcionarios);
            $stmt->bindParam(":sobrenome_funcionarios", $sobrenome_funcionarios);
            $stmt->bindParam(":cpf_funcionarios", $cpf_funcionarios);
            $stmt->bindParam(":email_funcionarios", $email_funcionarios);
            $stmt->bindParam(":data_admissao_funcionarios", $data_admissao_funcionarios);
            $stmt->bindParam(":data_demissao_funcionarios", $data_demissao_funcionarios);
            $stmt->bindParam(":id_cargo_funcionarios", $id_cargo_funcionarios);

            $stmt->execute();

            echo "deu certo";
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }


    case 3:
        try {
            $idDelete = $data["id_funcionarios"];
            $query = "DELETE FROM teste_empresa.funcionarios WHERE id_funcionarios=:idDelete";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":idDelete", $idDelete);
            $stmt->execute();
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }

    default:


        $query = "SELECT * FROM teste_empresa.funcionarios";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $getDatas = $stmt->fetch();


        $query = "SELECT * FROM teste_empresa.funcionarios";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $getAll = [];
        $getAll = $stmt->fetchAll(); // retorna todas as linhas para a variavel


        break;
}
