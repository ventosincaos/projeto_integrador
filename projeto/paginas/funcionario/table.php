<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/session_manager.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/funcionario/crud.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/funcionario/include/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/header.php';
?>

<main class="table">
    <section class="table__header">
        <h1>Funcionários</h1>
        <div class="adicionar">
            <a href="create.php"><ion-icon name="add-circle-outline"></ion-icon></a>
        </div>
    </section>
    <section class="table__body">
        <table id="contacts-table">
            <thead>
                <tr>
                    <th> nome </th>
                    <th> sobrenome </th>
                    <th> celular </th>
                    <th> email </th>
                    <th> info </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($getAll as $getAl) : ?>
                    <tr>
                        <td><?= $getAl["nome_funcionarios"] ?></td>
                        <td><?= $getAl["sobrenome_funcionarios"] ?></td>
                        <td><?= $getAl["celular_funcionarios"] ?></td>
                        <td><?= $getAl["email_funcionarios"] ?></td>
                        <td><a href="<?= $BASE_URL ?>/update.php?id=<?= $getAl["id"] ?>"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>



<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/funcionario/include/footer.php';
?>