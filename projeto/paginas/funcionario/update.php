<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/session_manager.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/funcionario/crud.php';
#include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/funcionario/include/head.php';
?>

<div class='Todo'>
    <?php include_once('show.php') ?>
    <?php
    print_r($getDatas['id_funcionarios']);
    ?>
    <div class='lado_direito'>
        <div class="card">
            <h1>Atualizar</h1>

            <form action="../../config/funcionario/crud.php" method="POST">
                <input type="hidden" name="type" value="2">
                <input type="hidden" name="id_funcionarios" value="<?= $getDatas['id_funcionarios'] ?>">

                <label>
                    <h3> Informações Pessoais </h3>
                </label>
                <div class="texfield-group-">
                    <div class="texfield">
                        <label for="nome_funcionarios">Nome</label>
                        <input type="text" name="nome_funcionarios" placeholder="Digite o nome" value="<?= $getDatas['nome_funcionarios'] ?>">
                    </div>

                    <div class="texfield">
                        <label for="sobrenome_funcionarios">Sobrenome</label>
                        <input type="text" name="sobrenome_funcionarios" placeholder="Digite o sobrenome" value="<?= $getDatas['sobrenome_funcionarios'] ?>">
                    </div>
                </div>

                <div class="texfield-group-">
                    <div class="texfield">
                        <label for="data_nascimento_funcionarios">Data de Nascimento</label>
                        <input type="text" name="data_nascimento_funcionarios" placeholder="Digite a data de nascimento" maxlength="10" value="<?= $getDatas['data_nascimento_funcionarios'] ?>">
                    </div>

                    <div class="texfield">
                        <label for="cpf_funcionarios">CPF</label>
                        <input type="text" name="cpf_funcionarios" placeholder="Digite o CPF" maxlength="14" value="<?= $getDatas['cpf_funcionarios'] ?>">
                    </div>
                </div>

                <div class="texfield-group-">
                    <div class="texfield">
                        <label for="celular_funcionarios">Celular</label>
                        <input type="text" name="celular_funcionarios" placeholder="Digite o celular" value="<?= $getDatas['celular_funcionarios'] ?>">
                    </div>

                    <div class="texfield">
                        <label for="email_funcionarios">E-mail</label>
                        <input type="email" name="email_funcionarios" placeholder="Digite o e-mail" value="<?= $getDatas['email_funcionarios'] ?>">
                    </div>
                </div>

                <label>
                    <h3> Informações contratuais </h3>
                </label>

                <div class="texfield-group">
                    <div class="texfield">
                        <label for="data_admissao_funcionarios">Admissão</label>
                        <input type="text" name="data_admissao_funcionarios" placeholder="dd/mm/aaaa" value="<?= $getDatas['data_admissao_funcionarios'] ?>">
                    </div>

                    <div class="texfield">
                        <label for="data_demissao_funcionarios">Demissão</label>
                        <input type="text" name="data_demissao_funcionarios" placeholder="dd/mm/aaaa" value="<?= $getDatas['data_demissao_funcionarios'] ?>">
                    </div>

                    <div class="texfield">
                        <label for="id_cargo_funcionarios">Cargo</label>
                        <select name="id_cargo_funcionarios" id="cargo">
                            <option value="1" <?php echo ($getDatas['id_cargo_funcionarios'] == '1') ? 'selected' : ''; ?>>Gerente</option>
                            <option value="2" <?php echo ($getDatas['id_cargo_funcionarios'] == '2') ? 'selected' : ''; ?>>Barista</option>
                            <option value="3" <?php echo ($getDatas['id_cargo_funcionarios'] == '3') ? 'selected' : ''; ?>>Atendente</option>
                            <option value="4" <?php echo ($getDatas['id_cargo_funcionarios'] == '4') ? 'selected' : ''; ?>>Cozinheiro</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn">Atualizar</button>

            </form>
            <?php print_r($getDatas['id_funcionarios']);
            print_r($getDatas['nome_funcionarios']);
            ?>
        </div>

    </div>

</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/funcionario/include/footer.php';
?>