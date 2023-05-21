<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/login_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head_login.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/menu/header_login.php';
?>

<body>
    <canvas id="lamp-anim" class="lamp-anim" width="100%" height="100%"></canvas>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form method="POST" action="">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="id_funcionario" required>
                    <label>Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
                <?php if (!empty($loginError)) : ?>
                    <span class="error-message"><?php echo $loginError; ?></span>
                <?php endif; ?>
                <div class="remember-forget">
                    <label><input type="checkbox"> Lembrar-se</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Esqueceu a senha? <a href="#" class="register-link">Recupere</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Recuperar senha</h2>
            <form action="#">
                <div class="input-box">
                    <input type="password" required>
                    <label>Usuário</label>
                </div>
                <button type="submit" class="btn">Recuperar</button>
                <div class="login-register">
                    <p>Acessar sua conta? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/footer.php';
?>