<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/login_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/header.php';
?>

<div class="form-box register">
    <h2>Recuperar senha</h2>
    <form action="#">
        <!-- a recuperação de senha será feita apenas pelo número de cadastro do usuário
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>-->
        <div class="input-box">
            /<!--<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>-->
            <input type="password" required>
            <label>Número de cadastro</label>
        </div>
        <button type="submit" class="btn">Recuperar</button>
        <div class="login-register">
            <p>Acessar sua conta? <a href="#" class="login-link">Login</a></p>

        </div>


    </form>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>