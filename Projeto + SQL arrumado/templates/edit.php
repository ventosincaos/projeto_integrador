<?php
   
   include_once("head.php");
   ?>
<body class="form_body">
   <header>
      <nav class="navigation">
         <a href="table.php"> Voltar </a>
      </nav>
   </header>
<div class='lado_direito'>
   <form id="create-form" action="<?=$BASE_URL?>/../config/processamento.php"
      method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?=$onlyfuncionario['id']?>">
      <div class="card">
        <h1>Atualizar </h1> 
        
    <div class="texfield-group-"> 
      <div class="texfield">
         <label for="nome">Nome</label>
         <input type="text" id="nome" name="nome"
            placeholder="digite o nome" value="<?=$onlyfuncionario['nome']?>"required>
      </div>
      <div class="texfield">
         <label for="nome">Sobrenome</label>
         <input type="text"  id="sobrenome" name="sobrenome"
            placeholder="digite o nome" value="<?=$onlyfuncionario['sobrenome']?>"required>
      </div>
      </div>

      <div class="texfield-group">
      <div class="texfield">
         <label for="cpf">CPF</label>
         <input type="text" id="cpf" name="cpf"
            placeholder="digite o cpf" value="<?=$onlyfuncionario['cpf']?>" required>
      </div>
      <div class="texfield">
         <label for="emissor">Emissor</label>
         <input type="text"  id="emissor" name="emissor"
            placeholder="digite o órgão emissor" value="<?=$onlyfuncionario['emissor']?>" required>
      </div>
      <div class="texfield">
         <label for="data_nascimento">Niver</label>
         <input type="date"  id="data_nascimento" name="data_nascimento"
            placeholder="digite o seu niver" value="<?=$onlyfuncionario['data_nascimento']?>" required>
      </div>
      </div>

      <div class="texfield-group-">
      <div class="texfield">
         <label for="fone">Telefone</label>
         <input type="text" id="fone" name="fone"
            placeholder="digite o telefone" value="<?=$onlyfuncionario['telefone']?>" required>
      </div>
      <div class="texfield">
         <label for="email">E-mail</label>
         <input type="email"  id="email" name="email"
            placeholder="digite o email" value="<?=$onlyfuncionario['email']?>" required>
      </div>
      </div>

      <div class="texfield-group-">
      <div class="texfield">
         <label for="admissao"> Data de admissão</label>
         <input type="date" id="admissao" name="admissao" value="<?=$onlyfuncionario['admissao']?>"
            required>
      </div>
      <!--<div class="form-group">
         <label for="demissao"> Data de demissao:</label>
         <input type="date" class="form-control" id="admissao" name="demissao" value="<?=$onlyfuncionario['demissao']?>">
         </div>-->
      <div class="texfield">
         <label for="cargo">Cargo</label>
         <select  id="cargo" name="cargo" value="<?=$onlyfuncionario['cargo']?>" required>
             <option><?=$onlyfuncionario['cargo']?></option>
            <option>Administrador</option>
            <option>Geral</option>
            <option>Adm sistema</option>
         </select>
      </div>
      </div>

      <div class="texfield">
         <label for="senha">Senha</label>
         <input type="password"  id="senha" name="senha"
            placeholder="digite a senha" value="<?=$onlyfuncionario['senha']?>" required>
      </div>

      <div class="texfieldp">
         <label for="observacao">Observação</label>
         <input type="text" id="observacao" name="observacao"
            value="<?=$onlyfuncionario['observacao']?>" required>
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