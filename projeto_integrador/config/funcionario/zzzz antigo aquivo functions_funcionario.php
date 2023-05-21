<?php

class aluno
{
    private $pdo;

    public function __construct($dbname, $host, $user, $senha)
    {
        try {
            #CONECTA COM O BANCO DE DADOS
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
        } catch (PDOException $e) {
            echo "error: com banco de dados" . $e->getMessage();
        } catch (Exception $e) {
            echo "error generico" . $e->getMessage();
        }
    }

    public function lerAluno($id)
    {
        #busca aluno por id 
        $sql = 'SELECT nome, cpf, dt_nasc, endereco, semestre, dt_inicio, curso FROM aluno WHERE id = :id';

        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $p = $statement->fetch(PDO::FETCH_ASSOC);
        return $p;
    }

    public function buscarDados()
    {
        #se estiver conectado ao pdo
        if ($this->pdo) {
            #vai buscar todos os alunos e organizar por ordem alfabetica
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM aluno ORDER BY nome");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else {
            echo "Erro na conexão com o banco de dados";
        }
    }

    public function excluirAluno($id)
    {
        #vai excluir aluno por id
        $cmd = $this->pdo->prepare('DELETE FROM aluno WHERE id=:id');
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    #-------> o conn está relacionado ao proprio danco de dados e leva o objeto pdo pra ele
    #PDO = conexão de objeto do banco
    #conn = conexão com banco
    public function updateAluno($id, $nome, $cpf, $dt_nasc, $endereco, $semestre, $dt_inicio, $curso, $conn)
    {
        #tenta dar update
        try {
            $sql = 'UPDATE aluno ' .
                'SET nome = :nome,' .
                ' cpf = :cpf,' .
                ' dt_nasc = :dt_nasc,' . # ano - mes - dia
                ' endereco = :endereco,' .
                ' semestre = :semestre,' .
                ' dt_inicio = :dt_inicio,' . # ano - mes - dia
                ' curso = :curso ' .
                ' WHERE `id` = :id';
            #VINCULA OS DADOS PASSADOS O : É DO SQL MSM E O $ É SÓ PRA DEFINIR OQ VAI PRO :
            #ESTILO UM: "SMT! COM + UM T -> ASSIMILA ISSO PRA MIM (':EU_VOU_PRO_SERASA', $EU_SOU_O_VALOR_Q_MANDAM_PRO_SERASA)
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':dt_nasc', $dt_nasc);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':semestre', $semestre);
            $stmt->bindParam(':dt_inicio', $dt_inicio);
            $stmt->bindParam(':curso', $curso);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            #se enviaram tudo pro statement stmt
            if ($stmt->rowCount() > 0) {
                #registro feito com sucesso
                echo "<p>Registro atualizado com sucesso</p>";
                #volta pro form
                header('Location: form-crd.php');
            } else {
                echo 'erro';
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
