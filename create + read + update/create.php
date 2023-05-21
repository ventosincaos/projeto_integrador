<?php include_once('header.php')?>


<body>
<div class='Todo'>

  <?php include_once('show.php')?>

     <div class='lado_direito'>
     <div class="card">
            <h1>Cadastro</h1> 
                
                <div class="texfield-group-">
                <div class="texfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o nome">
                </div>

                <div class="texfield">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" placeholder="Digite o sobrenome">
                </div>
                </div> <!-- Fim da div texfiled-group- -->

                <div class="texfield-group">
                    <div class="texfield">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" placeholder="Digite o CPF" maxlength="11">
                    </div>

                    <div class="texfield">
                        <label for="rg">RG</label>
                        <input type="number" name="rg" placeholder="Digite o RG" maxlength="7">
                    </div>

                    <div class="texfield">
                        <label for="emissor">Emissor</label>
                        <input type="text" name="emissor" placeholder="Digite o Órgão emissor">
                    </div>
                </div> <!-- Fim da div texfiled-group -->

                <div class="texfield-group-">
                <div class="texfield">
                        <label for="telefone">Telefone</label>
                        <input type="number" name="telefone" placeholder="Digite o telefone">
                    </div>

                    <div class="texfield">
                             <label for="email">E-mail</label>
                             <input type="email" name="email" placeholder="Digite o e-mail">
                         </div>
                    </div> <!-- Fim da div texfiled-group- -->

                <div class="texfield">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" placeholder="Digite o endereço">
                </div>
            
                <div class="texfield-group-">
                    <div class="texfield">
                        <label for="data_admissao">Admissão</label>
                        <input type="date" name="data_admissao">
                    </div>

                    <div class="texfield">
                        <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo">
                            <option value="Administrador">Administrador</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Atendente">Atendente</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Cozinheiro">Cozinheiro</option>
                        </select>
                    </div>
                </div> <!-- Fim da div texfiled-group- -->

                <div class="texfield">
                    <label for="descricao">Descrição do cargo</label>
                    <textarea name="descricao"  placeholder="Descrição do cargo"></textarea>
                </div>
                <button class="btn">Cadastrar</button>
    </div> <!-- Fim da div card-->
    </div> <!-- Fim da div lado_direito-->

 </div> <!-- Fim da div Todo-->

 <?php include_once('footer.php')?>