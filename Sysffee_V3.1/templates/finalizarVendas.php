
<?php include_once('head.php');?>


<?php if(!empty($product['id'])){ ?>
<header>

  <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
        <div class="overlay-right">
<p> </p>
            
            <div class="form">
                <h2>Finalizar compras</h2>
                <form action="../config/processamentoProduto.php">
                    <label for="fname">Preço total:</label><br>
                    <input type="text" id="fname" name="fname" value="R$<?=$product['preco']?>" ><br>
                    <button type="button" value="Submit" class="Finalizar">Finalizar</button>
                </form>
            </div>
        </div>
       
       
       
        <div class="overlay-left">
          
     
        
        
           <fieldset class="field">
            <BR>
        <div class="card-image1">
               <img src="<?=$arquivos['path']?>" class="card-img1">
       </div>
        
       

        <fieldset class="field1">

        <div class="card-content">
       <h2 class="name1"><?php echo $product['nome'];?> </h2>
        </div>
</fieldset>
</fieldset>

        
    

    
    
    </div>

</header>

<?php } ?>