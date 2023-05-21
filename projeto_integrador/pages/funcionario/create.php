<?php
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/funcionario_process.php';
include $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/pages/include/head/head_funcionario.php';
?>

<body>
<div class='Todo'>
  <?php include_once('read.php')?>
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
                        <input type="text" name="cpf" placeholder="Digite o CPF" maxlength="11">
                    </div>

                    <div class="texfield">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" placeholder="Digite o RG" maxlength="7">
                    </div>

                    <div class="texfield">
                        <label for="emissor">Emissor</label>
                        <input type="text" name="emissor" placeholder="Digite o Órgão emissor">
                    </div>
                </div> <!-- Fim da div texfiled-group -->

                <div class="texfield-group-">
                <div class="texfield">
                        <label for="data_ascimento">Data de Nascimento</label>
                        <input type="text" name="data_ascimento" placeholder="Digite o telefone">
                    </div>

                    <div class="texfield">
                             <label for="email">E-mail</label>
                             <input type="email" name="email" placeholder="Digite o e-mail">
                         </div>
                    </div> <!-- Fim da div texfiled-group- -->

                <div class="texfield-group-">
                <div class="texfield">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" placeholder="Digite o telefone">
                    </div>

                    <div class="texfield">
                             <label for="celular">Celular</label>
                             <input type="text" name="celular" placeholder="Digite o e-mail">
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

                <div class="texfield-group-">
                <div class="texfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite a senha">
                </div>

                <div class="texfield">
                    <label for="confirme">Confirme a senha</label>
                    <input type="password" name="confirme" placeholder="Confirme a senha">
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

