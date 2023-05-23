<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/login/login_manager.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/login/include/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/login/include/header.php';
?>

<canvas id="lamp-anim" class="lamp-anim" width="100%" height="100%">
</canvas>
<div class="wrapper">
    <!--<div class="span icon-close"><ion-icon name="close"></ion-icon></div>-->
    <div class="form-box login">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                <input type="text" name="user_login" id="user_login" required>
                <label>Usuário</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="senha_login" id="senha_login" required>
                <label>Senha</label>
            </div>
            <!--
            <div class="remember-forget">
                <label><input type="checkbox"> Lembrar-se</label>
                 trocar esse esqueceu a senha para um novo embaixo do botão
                <a href="#">Esqueceu a senha</>
            </div>
            -->
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
                <!--Apesar da class ter register, sua função foi mudada para recuperação de senha, sendo a página de
            registro feita em outro arquivo-->
                <p>Esqueceu a senha? <a href="#" class="register-link">Recupere</a></p>
            </div>
        </form>
    </div>

    <div class="form-box register">
        <h2>Recuperar senha</h2>
        <form action="">
            <!-- a recuperação de senha será feita apenas pelo número de cadastro do usuário
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>-->
            <div class="input-box">
                <!-- <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>-->
                <input type="password" required>
                <label>Usuário</label>
            </div>
            <button type="submit" class="btn">Recuperar</button>
            <div class="login-register">
                <p>Acessar sua conta? <a href="login.php" class="login-link">Login</a></p>
            </div>
        </form>
    </div>

</div>
<footer>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto/paginas/login/include/footer.php';
?>