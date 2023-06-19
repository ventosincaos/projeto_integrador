<header>

    <div class="flex">
        <h2 class="logo">logo</h2>
        <nav class="navigation">
            <a href="menu.php">Home</a>
            <a href="table.php">Funcionários</a> <!--Colocar o link de referencia do arquivo no lugar do #-->
            <a href="tableProduct.php">Estoques</a>
            <a href="vendas.php">Vendas</a>
            <a href="logout.php">Sair</a>
        </nav>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-right">
            <div class="form">
                <h2>Finalizar compra</h2>
                <form action="/action_page.php">
                    <label for="fname">Preço total:</label><br>
                    <input type="text" id="fname" name="fname" value="R$"><br>
                    <button type="button" value="Submit" class="Finalizar">Finalizar</button>
                </form>
                </div>
            </div>
            <div class="overlay-left"><!-- div Responsável pela parte ao lado de Finalizar compra --></div>
        </div>
    </div>

</header>
