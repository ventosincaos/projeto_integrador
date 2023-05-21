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
                <a href="#"><ion-icon name="add-circle-outline"></ion-icon></a>
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
                        <th> Info </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        #VAI PROCURAR OS DADOS DE P (OQ ABRIO A CONEXÃO COM O BANCO) E FAZ O FAVOR DE USAR A FUNÇÃO AI
                        $dados = $tableManager->searchAllFuncionario();
                        #SE A CONTA FOR MAIOR Q 0 VAI TER UMA TABLE AUTOMATICA ESTILO VINICIUS13
                        if (count($dados) > 0) {
                            for ($i = 0; $i < count($dados); $i++) {
                                echo "<tr>";
                                #PRA CADA LINHA DE DADO VAI REPETIR PRA DAR A TABELINHA
                                foreach ($dados[$i] as $key => $value) {
                                    if ($key != "id") {
                                        echo "<td>" . $value . "</td>";
                                    }
                                }
                        ?>
                                <td> <a href="update.php"><ion-icon name="book-outline"></ion-icon></a> </td>
                        <?php
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Nenhuma pessoa cadastrada.</td></tr>";
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