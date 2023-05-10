<?php 
include_once('head.php');
?>


  <form action="../config/" method="POST">

<br>
<div class="nome">
 <input type="text" id="nome" maxlength="40" name="nome" placeholder="Nome:" required>
</div>
<br>
<div class="sobre_nome">

  <input type="text" maxlength="40" placeholder="Entre com seu segundo nome" name="sobre_nome"  placeholder="Sobre_nome" id="sobre_nome" required>
</div>
<br>
<div class="email">
     <input type="email" maxlength="40" name="email" id="email" placeholder="E-mail:" required>
</div>
<br>
<div class="telefone">
  
    <input type="tel" name="telefone" maxlength="40" id="telefone" placeholder="Telefone:" required>
</div>
<br>
<div class="nascimento">

  <input type="date" name="nascimento" id="nascimento" maxlength="40" placeholder="Nascimento" required> 
</div>
<div class="sexualidade">
<label for="sexo"> Sexo: </label>
<br>
  <label for="masculino"> Masculino </label>
 <input type="radio" name="sexo" id="sexo" required>   
   <label for="feminino"> Feminino </label>
  <input type="radio" name="sexo" id="sexo" required>
</div>

<div class="cep">

  <input type="text" maxlength="10" name="cep" id="cep" placeholder="CEP:" required>

</div>
<br>
<div class="endereco">

<input type="text" name="endereco" maxlength="20"  id="endereco" placeholder="Endereço:" required>

</div>
<br>
<div class="senha">

<input type="password" name="senha" id="senha" maxlength="20" placeholder="Senha:" required>
</div>
<br>
<input type="submit" name="Enviar" value="Enviar">
</form>




<?php 
include_once('footer.php');
?>