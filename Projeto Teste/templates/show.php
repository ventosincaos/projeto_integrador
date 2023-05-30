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
      <input type="hidden" name="id" value="<?=$onlyContato['id']?>">
<div class="perfil">
   <div class="texfield">
   
   <h3><span><?= $onlyContato["nome"]?></span></h3>
   <h4><span><?= $onlyContato["cargo"]?></span></h4>
   </div>
   <button class="edit"><a href="<?=$BASE_URL?>/edit.php?id=<?=$contato["id"]?>">Editar</a></button>
</div>

<div class="editar">
        <div class="group">
        <h3>Informações pessoais</h3>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Nome<br>
            <span><?= $onlyContato["nome"]?></span>
            </h4>
          </div>
          <div class="texfield">
            <h4>Sobrenome <br>
            <span><?= $onlyContato["sobrenome"]?></span>
            </h4>
            </div>
        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Telefone <br>
            <span><?= $onlyContato["telefone"]?></span>
            </h4>
         </div>
         <div class="texfield">
            <h4>Email <br>
            <span><?=$onlyContato["email"]?></span>
            </h4>
         </div>
        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Data da Admissão <br>
            <span><?=$onlyContato["admissao"]?></span>
            </h4>
        </div>
        <div class="texfield">
            <h4>Data Nascimento <br>
            <span><?=$onlyContato["data_nascimento"]?></span>
            </h4>
        </div>
        </div>
        <div class="texfield">
            <h4>Descrição <br>
            <span><?=$onlyContato["observacao"]?></span>
            </h4>
        </div>
</div>
    
</div>
        
      
      
        

<?php
   include_once("footer.php");
   ?>