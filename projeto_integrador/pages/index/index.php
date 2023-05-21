<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/menu/header.php';
?>


<div>
    <h3>Coffee</h3>
    <h3>Café</h3>
    <h3>Café</h3>
    <h3>Kaffee</h3>
    <h3>Caffè</h3>
    <h3>кофе</h3>
    <h3>コーヒー</h3>
</div>

<?php if ($_SESSION['id_cargo'] == 1) : ?>
    <!-- Elementos exclusivos para o nível de acesso 1 (Administrador) -->
    lalala
<?php endif; ?>
<?php if ($_SESSION['id_cargo'] == 2) : ?>
    <!-- Elementos exclusivos para o nível de acesso 2 (Usuário com Limitações) -->
    caralho
<?php endif; ?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>