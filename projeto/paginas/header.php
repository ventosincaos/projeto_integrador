    <header>
    <h2 class="logo">
        <img src="/projeto/img/logo3.png">    
        <?php if ($_SESSION['funcao_usuario'] == 1) : ?>
            <!-- Elementos exclusivos para o nível de acesso 1 (Administrador) -->
            bem vindo, admin
        <?php endif; ?>
        <?php if ($_SESSION['funcao_usuario'] >= 2) : ?>
            <!-- Elementos exclusivos para o nível de acesso 1 (Administrador) -->
            bem vindo, funcionario
        <?php endif; ?>
        </h2>
        <nav class="navigation">
            <a href="/projeto/paginas/index/index.php">Home</a>
            <a href="/projeto/paginas/funcionario/table.php">Funcionários</a> <!--Colocar o link de referencia do arquivo no lugar do #-->
            <a href="/projeto/paginas/manutencao.php">Estoques</a>
            <a href="/projeto/paginas/manutencao.php">Vendas</a>
            <a href="/projeto/paginas/login/login.php?logout=true">sair</a>
        </nav>
    </header>