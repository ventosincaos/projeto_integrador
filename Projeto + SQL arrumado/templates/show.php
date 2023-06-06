<?php
   include_once('head.php'); 
   ?>
<body class="form_body">
<canvas id="lamp-anim" class="lamp-anim" width="100%" height="100%">
        </canvas>
   
<header>
      <nav class="navigation">
         <a href="table.php"> Voltar </a>
      </nav>
   </header>
<div class='lado_esquerdo'> 
<input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?=$onlyfuncionario['id']?>">
<div class="perfil">
   <div class="texfield">
   
   <h3><span><?= $onlyfuncionario["nome"]?></span></h3>
   <h4><span><?= $onlyfuncionario["cargo"]?></span></h4>
   </div>
   <button class="edit"><a href="<?=$BASE_URL?>/edit.php?id=<?=$funcionario["id"]?>">Editar</a></button>
</div>

<div class="editar">
        <div class="group">
        <h3>Informações pessoais</h3>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Nome<br>
            <span><?= $onlyfuncionario["nome"]?></span>
            </h4>
          </div>
          <div class="texfield">
            <h4>Sobrenome <br>
            <span><?= $onlyfuncionario["sobrenome"]?></span>
            </h4>
            </div>
        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Telefone <br>
            <span><?= $onlyfuncionario["telefone"]?></span>
            </h4>
         </div>
         <div class="texfield">
            <h4>Email <br>
            <span><?=$onlyfuncionario["email"]?></span>
            </h4>
         </div>
        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Data da Admissão <br>
            <span><?=$onlyfuncionario["admissao"]?></span>
            </h4>
        </div>
        <div class="texfield">
            <h4>Data Nascimento <br>
            <span><?=$onlyfuncionario["data_nascimento"]?></span>
            </h4>
        </div>
        </div>
        <div class="texfield">
            <h4>Descrição <br>
            <span><?=$onlyfuncionario["observacao"]?></span>
            </h4>
        </div>
</div>
    
</div>
        
      
      
        

<?php
   include_once("footer.php");
   ?>