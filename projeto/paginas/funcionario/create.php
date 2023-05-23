<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/session_manager.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/funcionario/crud.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/header.php';
?>

<body>
    <div class='Todo'>

        <?php include_once('show.php') ?>

        <div class='lado_direito'>
            <div class="card">
                <h1>Cadastro</h1>

                <form action="../../config/funcionario/crud.php" method="POST">
                    <input type="hidden" name="type" value="1">

                    <label>
                        <h3> Informações Pessoais </h3>
                    </label>
                    <div class="texfield-group-">
                        <div class="texfield">
                            <label for="nome_funcionarios">Nome</label>
                            <input type="text" name="nome_funcionarios" placeholder="Digite o nome">
                        </div>

                        <div class="texfield">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" name="sobrenome_funcionarios" placeholder="Digite o sobrenome">
                        </div>
                    </div> <!-- Fim da div texfiled-group- -->

                    <div class="texfield-group-">
                        <div class="texfield">
                            <label for="data_nascimento_funcionarios">Data de Nascimento</label>
                            <input type="text" name="data_nascimento_funcionarios" placeholder="Digite a data de nascimento" maxlength="10">
                        </div>

                        <div class="texfield">
                            <label for="cpf_funcionarios">CPF</label>
                            <input type="text" name="cpf_funcionarios" placeholder="Digite o CPF" maxlength="14">
                        </div>
                    </div> <!-- Fim da div texfiled-group -->

                    <div class="texfield-group-">
                        <div class="texfield">
                            <label for="celular_funcionarios">Celular</label>
                            <input type="text" name="celular_funcionarios" placeholder="Digite o celular">
                        </div>

                        <div class="texfield">
                            <label for="email_funcionarios">E-mail</label>
                            <input type="email" name="email_funcionarios" placeholder="Digite o e-mail">
                        </div>
                    </div> <!-- Fim da div texfiled-group- -->

                    <label>
                        <h3> Informações contratuais </h3>
                    </label>

                    <div class="texfield-group">
                        <div class="texfield">
                            <label for="data_admissao_funcionarios">Admissão</label>
                            <input type="text" name="data_admissao_funcionarios" placeholder="dd/mm/aaaa" maxlength="10">
                        </div>

                        <div class="texfield">
                            <label for="data_demissao_funcionarios">Demissão</label>
                            <input type="text" name="data_demissao_funcionarios" placeholder="dd/mm/aaaa" maxlength="10">
                        </div>

                        <div class="texfield">
                            <label for="id_cargo_funcionarios">Cargo</label>
                            <select name="id_cargo_funcionarios" id="cargo">
                                <option value="1"> Gerente </option>
                                <option value="2"> Barista </option>
                                <option value="3"> Atendente </option>
                                <option value="4"> Cozinheiro </option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn">Cadastrar</button>
                </form>
            </div> <!-- Fim da div card-->
        </div> <!-- Fim da div lado_direito-->

    </div> <!-- Fim da div Todo-->

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/funcionario/include/footer.php';
    ?>