<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/funcionario_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head_funcionario.php';
ob_start(); // inicia o buffer de saída

?>

<body>

    <?php
    if (!isset($_GET["bt_sub"])) {
        $id_funcionario = $_GET["id"];
        $funcionario = $readManagerFuncionario->readFuncionarioID($id_funcionario);
    ?>

        <div class='Todo'>
            <?php #include_once('read.php'); ?>
            <div class='lado_direito'>
                <div class="card">
                    <h1>Atualizar</h1>

                    <form method="GET" action="">
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
                                <input type="text" name="cpf" placeholder="Digite o CPF" maxlength="14" value="<?php echo $funcionario['cpf']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="rg">RG</label>
                                <input type="text" name="rg" placeholder="Digite o RG" maxlength="7" value="<?php echo $funcionario['rg']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="emissor">Emissor</label>
                                <input type="text" name="orgao_emissor" placeholder="Digite o Órgão emissor" value="<?php echo $funcionario['orgao_emissor']; ?>">
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
                                <input type="text" name="telefone" placeholder="Digite o telefone" value="<?php echo $funcionario['telefone']; ?>">
                            </div>

                            <div class="texfield">
                                <label for="celular">Celular</label>
                                <input type="text" name="celular" placeholder="Digite o celular" value="<?php echo $funcionario['celular']; ?>">
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
                                <label for="id_cargo">Cargo</label>
                                <select name="id_cargo" id="cargo">
                                    <option value="1" <?php echo ($funcionario['id_cargo'] == '1') ? 'selected' : ''; ?>>Gerente</option>
                                    <option value="2" <?php echo ($funcionario['id_cargo'] == '2') ? 'selected' : ''; ?>>Barista</option>
                                    <option value="3" <?php echo ($funcionario['id_cargo'] == '3') ? 'selected' : ''; ?>>Atendente</option>
                                    <option value="4" <?php echo ($funcionario['id_cargo'] == '4') ? 'selected' : ''; ?>>Cozinheiro</option>
                                    <option value="5" <?php echo ($funcionario['id_cargo'] == '5') ? 'selected' : ''; ?>>Limpeza</option>
                                </select>
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
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            $cpf = $_GET["cpf"];
            $rg = $_GET["rg"];
            $orgao_emissor = $_GET["orgao_emissor"];
            $data_nascimento = $_GET["data_nascimento"];
            $email = $_GET["email"];
            $telefone = $_GET["telefone"];
            $celular = $_GET["celular"];
            $endereco = $_GET["endereco"];
            $data_admissao = $_GET["data_admissao"];
            $data_demissao = $_GET["data_demissao"];
            $id_cargo = $_GET["id_cargo"];
            $descricao_func = $_GET["descricao_func"];

            $updateManager = new updateManager($pdo);
            $updateManager->updateFuncionario($id, $nome, $sobrenome, $cpf, $rg, $orgao_emissor, $data_nascimento, $email, $telefone, $celular, $endereco, $data_admissao, $data_demissao, $id_cargo, $descricao_func);

            header('Location: ../index/index.php');
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
    ?>


</body>

<?php
ob_end_flush(); // Envia o conteúdo do buffer para o navegador e libera a memória usada pelo buffer
?>