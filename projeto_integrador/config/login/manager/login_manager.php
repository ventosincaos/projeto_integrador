<?php

class loginManager {
    private $pdo;
    private $loginError;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Função para verificar o login
    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idFuncionario = $_POST['id_funcionario'];
            $senha = $_POST['senha'];

            // Consulta para verificar as credenciais do usuário
            $sql = "SELECT f.id_funcionario, f.id_cargo
                    FROM funcionario f
                    INNER JOIN cargo c ON f.id_cargo = c.id_cargo
                    WHERE f.id_funcionario = :id_funcionario AND f.senha = :senha";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id_funcionario', $idFuncionario);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['id_funcionario'] = $user['id_funcionario'];
                $_SESSION['id_cargo'] = $user['id_cargo'];

                // Redirecionar com base no nível de acesso
                if ($user['id_cargo'] == 1) {
                    header('Location: ../../pages/index/index.php');
                    exit();
                } elseif ($user['id_cargo'] >= 2) {
                    header('Location: ../../pages/index/index.php');
                    exit();
                }
            } if (!$user) {
                $includePath = realpath(__DIR__ . '/../../../config/login/manager/invalid_login.php');
                if ($includePath !== false) {
                    $loginError = file_get_contents($includePath);
                    if ($loginError !== false) {
                        // Utilize a variável $loginError como desejar
                        echo $loginError;
                    } else {
                        echo 'Erro ao ler o conteúdo do arquivo.';
                    }
                } else {
                    echo 'Erro: Caminho absoluto do arquivo não encontrado.';
                }
            }                     
        }
    }

    public function getLoginError()
    {
        return $this->loginError;
    }
}

