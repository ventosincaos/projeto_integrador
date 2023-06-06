<?php
include_once("url.php");
include_once("conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
       
    } else if (strlen($_POST['senha']) == 0) {
        
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cargo = $_POST['cargo'];

        try {
            $sql = "SELECT * FROM funcionario WHERE email = :email AND senha = :senha";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            $quantidade = $stmt->rowCount();

            if ($quantidade == 1) {
                $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $funcionario['id'];
                $_SESSION['nome'] = $funcionario['nome'];
                

                header("Location: ".$BASE_URL."/../templates/menu.php");
                exit();
            } else {
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
