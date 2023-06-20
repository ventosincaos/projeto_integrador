<?php
include_once('../config/sessao.php');
include_once("head.php");
?>

<body class="form_body">
   <header>
      <nav class="navigation">
         <a href="table.php"> Voltar </a>
      </nav>
   </header>


   <div class="lado_direito">
      <form id="create-form" action="<?= $BASE_URL ?>/../config/processamento.php" method="POST">
         <input type="hidden" name="type" value="create">
         <div class="card">
            <h1>Cadastrar </h1>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" placeholder="digite o nome" required>
               </div>
               <div class="texfield">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" id="sobrenome" name="sobrenome" placeholder="digite o sobrenome" required>
               </div>
            </div>

            <div class="texfield-group">
               <div class="texfield">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" placeholder="digite o cpf" required>
               </div>
               <div class="texfield">
                  <label for="emissor">Emissor</label>
                  <input type="text" id="emissor" name="emissor" placeholder="digite o órgão emissor" required>
               </div>
               <div class="texfield">
                  <label for="data_nascimento"> Nascimento:</label>
                  <input type="date" id="data_nascimento" name="data_nascimento" placeholder="digite o seu niver" required>
               </div>
            </div>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="fone">Telefone</label>
                  <input type="text" id="fone" name="fone" placeholder="digite o telefone" required>
               </div>
               <div class="texfield">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" name="email" placeholder="digite o email" required>
               </div>
            </div>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="admissao"> Data de admissão</label>
                  <input type="date" id="admissao" name="admissao" required>
               </div>

               <div class="texfield">
                  <label for="cargo">Cargo</label>
                  <select id="cargo" name="cargo" required>
                     <option value="" disabled selected>selecione um cargo</option>
                     <option value="1">gerente</option>
                     <option value="2">funcionario</option>
                  </select>
               </div>
            </div>

            <div class="texfield-group-">
               <div class="texfield">
                  <label for="senha">Senha</label>
                  <input type="password" id="senha" name="senha" placeholder="digite a senha" required>
               </div>
               <div class="texfield">
                  <label for="resposta">Resposta</label>
                  <input type="resposta" id="resposta" name="resposta" placeholder="explique o que é um deus" required>
               </div>
            </div>


            <div class="texfield">
               <label for="observacao">Descrição</label>
               <textarea type="text" id="observacao" name="observacao" placeholder=" Descrição do cargo" rows="3">
               </textarea>
            </div>
            <br>
            <button type="submit" class="btn">Cadastrar</button>

         </div>
      </form>
   </div>




   <?php
   include_once("footer.php");
   ?>