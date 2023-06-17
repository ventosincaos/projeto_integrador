<?php
include_once("head.php");
include_once("header.php");
 include_once("../config/processamento.php");
?>

<body class="table_body">
<div class="tableProd">


<main class="table">
<section class="table__header">
<h1>Funcionários</h1>
     <?php if(count($Allfuncionarios) > 0): ?>
          <div class="adicionar">
               <a href="<?=$BASE_URL?>/create.php">  <ion-icon class="adicionarIcone" name="add-circle-outline"></ion-icon>  </a>
            </div>
            
            </section>
<section class="table__body">
     <table>
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Nome</th>
<th scope="col">Telefone</th>
<th scope="col">Email</th>
<th scope="col">Cargo</th>
<th scope="col">Ver</th>
<th scope="col">Editar</th>
<th scope="col">Excluir</th>
</tr>
</thead>
<tbody>

<?php foreach($Allfuncionarios as $funcionarios):?>
<tr>
<td ><?=$funcionarios["id"]?></td>
<td ><?=$funcionarios["nome"]?></td>
<td ><?=$funcionarios["telefone"]?></td>
<td ><?=$funcionarios["email"]?></td> 
<td ><?=$funcionarios["cargo"]?></td> 

<td><a href="<?=$BASE_URL?>/show.php?id=<?=$funcionarios["id"]?>"><ion-icon name="book-outline"></ion-icon></a></td>
<td><a href="<?=$BASE_URL?>/edit.php?id=<?=$funcionarios["id"]?>">  <ion-icon name="create-outline"></ion-icon></a>  </td>
<td>
<!--delete-->


<form class="delete-form" action="<?=$BASE_URL?>/../config/processamento.php" method="POST">
<input type="hidden" name="type" value="delete">
<input type="hidden" name="id" value="<?=$funcionarios["id"]?>">
<button type="submit" class="delete-btn"><ion-icon name="close-outline"></ion-icon></button>
</form>
</td>
</tr>

<?php endforeach;?>
</tbody>

</table>
</section>

     <?php else:?> 
     <p id="empty-list-text">
          <div class="adicionar">
               <a href="create.php"><ion-icon name="add-circle-outline"></ion-icon></a>
            </div>
     </p> 
     <?php endif;?>
</div>
     </div>
<?php
 include_once("footer.php");
?>
