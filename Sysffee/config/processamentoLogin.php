<?php
include_once("url.php");
include_once("conexao.php");





if (isset($_POST['email']) && isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
       
    } else if (strlen($_POST['senha']) == 0) {
        
    } else {
      // é necessário colocar o cargo como validação de login também
        $email = $_POST['email'];
        $senha = $_POST['senha'];
     //   $cargo = $_POST['cargo'];

        try {
            $sql = "SELECT * FROM funcionarios WHERE email = :email AND senha = :senha";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $onlyfuncionarios = $stmt -> fetch();
            $quantidade = $stmt->rowCount();

            if ($quantidade == 1) {
                $funcionarios = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!isset($_SESSION)) {
                    session_start();
                }
                
                $_SESSION['email'] = $onlyfuncionarios['email'];
                $_SESSION['senha'] = $onlyfuncionarios['senha'];
                
                header("Location:".$BASE_URL."/../templete/men.php"); 
        
       
            } else {
                
                //essa mensagem deveria aparecer na tela de login caso estivessem errados os dados
                echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
                <strong>Falha ao logar! E-mail ou senha incorretos</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
            }
        } catch (PDOException $e) {
            echo "Erro na execução do código SQL: " . $e->getMessage();
        }
    }
}

?>
