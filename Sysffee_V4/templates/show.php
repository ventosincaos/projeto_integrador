<?php
include_once('../config/sessao.php');
include_once('head.php');
include_once("../config/processamento.php");
?>


<body class="form_body">

    <div class='lado_esquerdo'>
        <input type="hidden" name="type" value="edit">


        <input type="hidden" name="id" value="<?= $onlyfuncionarios['id'] ?>">


        <div class="perfil">
            <div class="texfield">
                <button class="edit"><a href="table.php">voltar</a></button>
                <h3><span><?= $onlyfuncionarios["nome"] ?></span></h3>
                <h4>
                    <span>
                        <?php if ($onlyfuncionarios["cargo"] == 1) {
                            echo "gerente";
                        } elseif ($onlyfuncionarios["cargo"] == 2) {
                            echo "funcionário";
                        } ?>
                    </span>
                </h4>
            </div>
        </div>



        <div class="editar">
            <div class="group">
                <h3>Informações pessoais</h3>
                <div class="texfield-group-">
                    <div class="texfield">
                        <h4>Nome<br>
                            <span><?= $onlyfuncionarios["nome"] ?></span>
                        </h4>
                    </div>
                    <div class="texfield">
                        <h4>Sobrenome <br>
                            <span><?= $onlyfuncionarios["sobrenome"] ?></span>
                        </h4>
                    </div>
                </div>
                <div class="texfield-group-">
                    <div class="texfield">
                        <h4>Telefone <br>
                            <span><?= $onlyfuncionarios["telefone"] ?></span>
                        </h4>
                    </div>
                    <div class="texfield">
                        <h4>Email <br>
                            <span><?= $onlyfuncionarios["email"] ?></span>
                        </h4>
                    </div>
                </div>
                <div class="texfield">
                    <h4>Data da Admissão <br>
                        <span><?= $onlyfuncionarios["admissao"] ?></span>
                    </h4>
                </div>
                <h3>Informações Trabalhistas</h3>
                <div class="texfield-group-">
                    <div class="texfield">
                        <h4>Descrição <br>
                            <span><?= $onlyfuncionarios["observacao"] ?></span>
                        </h4>
                    </div>
                    <div class="texfield">
                        <h4>Data da Admissão <br>
                            <span><?= $onlyfuncionarios["admissao"] ?></span>
                        </h4>
                    </div>
                </div>
                <div class="texfield">
                    <h4>Data da Demissao <br>
                        <span>
                            <?php if ($onlyfuncionarios["demissao"]) : ?>
                                <?= $onlyfuncionarios["demissao"] ?>
                            <?php else : ?>
                                Essa pessoa ainda está contratada
                            <?php endif; ?>
                        </span>
                    </h4>
                </div>
            </div>

        </div>





        <?php
        include_once("footer.php");
        ?>