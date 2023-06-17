
<?php 
      include_once('head.php'); 
    

//é preciso colocar a validação do cargo e a mensagem de alerta login ou senha erradas deveria aparecer nessa pagina, mas está em processamentoLogin.php
?>
  
  <body class="login_body">
    <canvas id="lamp-anim" class="lamp-anim" width="100%" height="100%"></canvas>

    
    <header>
        <h2 class="logo">BLACK CAT</h2>
        <nav class="navigation">
            <a href="budget.php"> Contratar </a>
        </nav>
    </header>
    <div class="wrapper">
       
       <div class="form-box login">
        <h2>ENTRAR</h2>

        <form action="<?= $BASE_URL?>/../config/processamentoLogin.php" method="POST">

            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                <input type="text" name="email" required>
                <label>email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="senha" required>
                <label>Senha</label>
            </div>
            <div class="input-box">
                
                <select name="cargo" id="">
                    <option value="default">Selecione seu cargo</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Funcionario">Geral</option>
                    <option value="Adm ">Adm sistema</option>

                </select>
            </div>
            <div class="remember-forget">
                <label ><input type="checkbox"> Lembrar-se</label>
               <!-- trocar esse esqueceu a senha para um novo embaixo do botão
                <a href="#">Esqueceu a senha</>-->
            </div>
            <button type="submit" class="btn_login">ENTRAR</button>
            <div class="login-register">
            <!--Apesar da class ter register, sua função foi mudada para recuperação de senha, sendo a página de
            registro feita em outro arquivo-->
                <p>Esqueceu a senha? <a href="#" class="register-link">Recupere</a></p>
            </div>
        </form>
       </div> 

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
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="email" required>
                <label>email</label>
            </div>
            <button type="submit" class="btn_login">Recuperar</button>
            <div class="login-register">
                <p>Acessar sua conta? <a href="#" class="login-link">Login</a></p>
            </div>
        </form>
       </div> 
    </div>
    
  <?php include_once('footer.php'); // coloquei os scripts para carregar no footer.php para que não precisamos copiar muito o  código?>

