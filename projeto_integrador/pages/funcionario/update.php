<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/funcionario_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head_funcionario.php';
?>

<body>

    <?php
    if (!isset($_POST["bt_sub"])) {
        #$id = $_GET["id"];
        #$funcionario = $conn->readFuncionario($id);
    ?>

        <div class='Todo'>
            <?php include_once('read.php'); ?>
            <div class='lado_direito'>
                <div class="card">
                    <h1>Atualizar</h1>

                    <form method="POST" action="">
                        <!-- NOME E SOBRENOME -->
                        <div class="texfield-group-">
                            <div class="texfield">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" placeholder="Digite o nome" value="<?php echo $funcionario['nome']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" name="sobrenome" placeholder="Digite o sobrenome" value="<?php echo $funcionario['sobrenome']; ?>">
                            </div>
                        </div>

                        <!-- CPF E RG E EMISSOR -->
                        <div class="texfield-group">
                            <div class="texfield">
                                <label for="cpf">CPF</label>
                                <input type="number" name="cpf" placeholder="Digite o CPF" maxlength="11" value="<?php echo $funcionario['cpf']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="rg">RG</label>
                                <input type="number" name="rg" placeholder="Digite o RG" maxlength="7" value="<?php echo $funcionario['rg']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="emissor">Emissor</label>
                                <input type="text" name="emissor" placeholder="Digite o Órgão emissor" value="<?php echo $funcionario['emissor']; ?>">
                            </div>
                        </div>

                        <div class="texfield-group-">
                            <div class="texfield">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" name="data_nascimento" placeholder="Digite a data de nascimento" value="<?php echo $funcionario['data_nascimento']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" placeholder="Digite o e-mail" value="<?php echo $funcionario['email']; ?>">
                            </div>
                        </div>

                        <div class="texfield-group-">
                            <div class="texfield">
                                <label for="telefone">Telefone</label>
                                <input type="number" name="telefone" placeholder="Digite o telefone" value="<?php echo $funcionario['telefone']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="celular">Celular</label>
                                <input type="number" name="celular" placeholder="Digite o celular" value="<?php echo $funcionario['celular']; ?>">
                            </div>
                        </div>

                        <div class="texfield">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" placeholder="Digite o endereço" value="<?php echo $funcionario['endereco']; ?>">
                        </div>

                        <div class="texfield-group">
                            <div class="texfield">
                                <label for="data_admissao">Admissão</label>
                                <input type="date" name="data_admissao" value="<?php echo $funcionario['data_admissao']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="data_demissao">Demissão</label>
                                <input type="date" name="data_demissao" value="<?php echo $funcionario['data_demissao']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="nome_cargo">Cargo</label>
                                <select name="nome_cargo" id="cargo">
                                    <option value="Gerente" <?php echo ($funcionario['nome_cargo'] == 'Gerente') ? 'selected' : ''; ?>>Gerente</option>
                                    <option value="Atendente" <?php echo ($funcionario['nome_cargo'] == 'Atendente') ? 'selected' : ''; ?>>Atendente</option>
                                    <option value="Limpeza" <?php echo ($funcionario['nome_cargo'] == 'Limpeza') ? 'selected' : ''; ?>>Limpeza</option>
                                    <option value="Cozinheiro" <?php echo ($funcionario['nome_cargo'] == 'Cozinheiro') ? 'selected' : ''; ?>>Cozinheiro</option>
                                </select>
                            </div>
                        </div>

                        <div class="texfield-group-">
                            <div class="texfield">
                                <label for="senha">Nova senha</label>
                                <input type="password" name="senha" placeholder="Digite a senha">
                            </div>

                            <div class="texfield">
                                <label for="confirme">Confirme a senha</label>
                                <input type="password" name="confirme" placeholder="Confirme a senha">
                            </div>
                        </div>

                        <div class="texfield">
                            <label for="descricao">Descrição do cargo</label>
                            <textarea name="descricao_func" placeholder="Descrição do cargo"><?php echo $funcionario['descricao_func']; ?></textarea>
                        </div>
                        <button type="submit" name="bt_sub" class="btn">Atualizar cadastro</button>
                    </form>
                </div>
            </div>
        </div>

    <?php
    } else {
        try {
            $id = $_GET["id"];
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            $orgao_emissor = $_POST["emissor"];
            $data_nascimento = $_POST["data_nascimento"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $celular = $_POST["celular"];
            $endereco = $_POST["endereco"];
            $data_admissao = $_POST["data_admissao"];
            $data_demissao = $_POST["data_demissao"];
            $nome_cargo = $_POST["nome_cargo"];
            $descricao_func = $_POST["descricao_func"];

            $updateManager = new UpdateManager($pdo);
            $updateManager->updateFuncionario($id, $nome, $sobrenome, $cpf, $rg, $orgao_emissor, $email, $telefone, $celular, $endereco, $data_admissao, $data_demissao, $nome_cargo, $descricao_func);

            header('Location: ../index/index.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
    ?>


</body>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>