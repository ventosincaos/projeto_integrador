<?php
include_once('../config/sessao.php');
include_once("head.php");
include_once("../config/processamento.php");
?>

<body class="form_body">

   <header>
      <nav class="navigation">
         <a href="table.php"> Voltar </a>
      </nav>
   </header>

   <div class='lado_direito'>

      <form id="create-form" action="<?= $BASE_URL ?>/../config/processamento.php" method="POST">
         <input type="hidden" name="type" value="edit">
         <input type="hidden" name="id" value="<?= $onlyfuncionarios['id'] ?>">
         <div class="card">
            <h1>Atualizar </h1>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" placeholder="digite o nome" value="<?= $onlyfuncionarios['nome'] ?>" required>
               </div>
               <div class="texfield">
                  <label for="nome">Sobrenome</label>
                  <input type="text" id="sobrenome" name="sobrenome" placeholder="digite o nome" value="<?= $onlyfuncionarios['sobrenome'] ?>" required>
               </div>
            </div>

            <div class="texfield-group">
               <div class="texfield">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" placeholder="digite o cpf" value="<?= $onlyfuncionarios['cpf'] ?>" required>
               </div>
               <div class="texfield">
                  <label for="emissor">Emissor</label>
                  <input type="text" id="emissor" name="emissor" placeholder="digite o órgão emissor" value="<?= $onlyfuncionarios['emissor'] ?>" required>
               </div>
               <div class="texfield">
                  <label for="data_nascimento">Niver</label>
                  <input type="text" id="data_nascimento" name="data_nascimento" placeholder="digite o seu niver" value="<?= $onlyfuncionarios['data_nascimento'] ?>" required>
               </div>
            </div>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="fone">Telefone</label>
                  <input type="text" id="fone" name="fone" placeholder="digite o telefone" value="<?= $onlyfuncionarios['telefone'] ?>" required>
               </div>
               <div class="texfield">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" name="email" placeholder="digite o email" value="<?= $onlyfuncionarios['email'] ?>" required>
               </div>
            </div>

            <div class="texfield-group">
               <div class="texfield">
                  <label for="admissao"> Data de admissão</label>
                  <input type="text" id="admissao" name="admissao" value="<?= $onlyfuncionarios['admissao'] ?>" required>
               </div>

               <div class="texfield">
                  <label for="demissao"> Data de demissao:</label>
                  <input type="text" class="form-control" id="demissao" name="demissao" value="<?= $onlyfuncionarios['demissao'] ?>">
               </div>

               <div class="texfield">
                  <label for="cargo">Cargo</label>
                  <select id="cargo" name="cargo" value="<?= $onlyfuncionarios['cargo'] ?>" required>
                     <option value="<?=$onlyfuncionarios['cargo']?>" selected>selecione</option>
                     <option value="1">gerente</option>
                     <option value="2">funcionario</option>
                  </select>
               </div>
            </div>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="senha">Senha</label>
                  <input type="password" id="senha" name="senha" placeholder="digite a senha" value="<?= $onlyfuncionarios['senha'] ?>" required>
               </div>
               <div class="texfield">
                  <label for="resposta">Resposta</label>
                  <input type="resposta" id="resposta" name="resposta" placeholder="explique o que é um deus" value="<?= $onlyfuncionarios['resposta'] ?>" required>
               </div>
            </div>

            <div class="texfield">
               <label for="observacao">Observação</label>
               <input type="text" id="observacao" name="observacao" value="<?= $onlyfuncionarios['observacao'] ?>">
            </div>
            <br>
            <button type="submit" class="btn">Atualizar</button>
         </div>
      </form>
   </div>
   </div>
   <?php
   include_once("footer.php");
   ?>