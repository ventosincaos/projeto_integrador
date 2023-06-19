<?php
   include_once('head.php');
   include_once('header.php'); 
   include_once('../config/processamentoProduto.php');
   ?>

   
<body class="form_body">
<canvas id="lamp-anim" class="lamp-anim" width="100%" height="100%">
        </canvas>
  
<div class='lado_esquerdo'> 
<input type="hidden" name="type" value="edit">
   <input type="hidden" name="type" value="edit">
   <input type="hidden" name="id" value="<?=$product['id']?>">

<div class="perfil">
   <button class="edit"><a  href="<?=$BASE_URL?>/editProduct.php?id=<?=$product["id"]?>">Editar</a> </button>
   <div class="texfield">
   
   <h3><span><?= $product["nome"]?></span></h3>
   <h4><span><?= $product["cod_product"]?></span></h4>
   </div>
  
   
</div>

<div class="editar">
        <div class="group">
        <h3>Dados do Produto</h3>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Nome do Produto<br>
            <span><?= $product["nome"]?></span>
            </h4>
          </div>
          <div class="texfield">
            <h4>Código <br>
            <span><?= $product["cod_product"]?></span>
            </h4>
            </div>

        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4>Preço <br>
            <span><?= $product["preco"]?></span>
            </h4>
         </div>
      
        </div>
        <div class="texfield-group-">
        <div class="texfield">
            <h4> Data de validade <br>
            <span><?=$product["validade"]?></span>
            </h4>
        </div>
        </div>
       
           <div class="texfield">
            <h4>Descrição <br>
            <span><?=$product["descricao"]?></span>
            </h4>
        </div>
</div>
    
</div>
        
      
      
        

<?php
   include_once("footer.php");
   ?>