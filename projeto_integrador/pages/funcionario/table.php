<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/funcionario_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/menu/header.php';
?>

<body>

    <main class="table" style="margin-top: 65px;">
        <section class="table__header">
            <h1>Funcionários</h1>
            <div class="adicionar">
                <a href="create.php"><ion-icon name="add-circle-outline"></ion-icon></a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> nome </th>
                        <th> sobrenome </th>
                        <th> email </th>
                        <th> celular </th>
                        <?php if ($_SESSION['id_cargo'] == 1) : ?>
                            <th> Info </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $dados = $tableManagerFuncionario->searchAllFuncionario();
                        if (count($dados) > 0) {
                            foreach ($dados as $funcionario) {
                                echo "<tr>";
                                echo "<td>" . $funcionario['nome'] . "</td>";
                                echo "<td>" . $funcionario['sobrenome'] . "</td>";
                                echo "<td>" . $funcionario['email'] . "</td>";
                                echo "<td>" . $funcionario['celular'] . "</td>";

                                // Verifica o nível de acesso do usuário
                                if ($_SESSION['id_cargo'] == 1) {
                                    echo "<td><a href=\"/projeto_integrador/pages/funcionario/update.php?id=" . $funcionario['id_funcionario'] . "\"><ion-icon name=\"book-outline\"></ion-icon></a></td>";
                                }

                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Nenhuma pessoa cadastrada.</td></tr>";
                        }
                        ?>

                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>