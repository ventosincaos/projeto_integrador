<?php include_once("header.php"); 
    include_once("../config/crud.php");
?>


<div class="form-controls">
<table class="table" id="contacts-table">

<thead class="bg-dark">

<h2> STAFFS </h2>

<tr>
<th scope="col" class="text-white">ID</th>
<th scope="col" class="text-white">Nome</th>
<th scope="col" class="text-white">RG:</th>
<th scope="col" class="text-white">Cargo:</th>
</tr>
</thead>
<tbody>


    

<?php foreach($getAll as $getAl):?>
 <tr>

<td scope="row"><?=$getAl["id"]?></td>
<td scope="row"><?=$getAl["nome"]?></td>
<td scope="row"><?=$getAl["rg"]?></td>
<td scope="row"><?=$getAl["cargo"]?></td>

<td class="actions">
<a href="<?=$BASE_URL?>/cursos.php?id=<?=$getAl["id"]?>"><i class="show"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M9.636 13.5a.5.5 0 0 1-.5.5H2.5A1.5 1.5 0 0 1 1 12.5v-10A1.5 1.5 0 0 1 2.5 1h10A1.5 1.5 0 0 1 14 2.5v6.636a.5.5 0 0 1-1 0V2.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M5 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H6.707l8.147 8.146a.5.5 0 0 1-.708.708L6 6.707V10.5a.5.5 0 0 1-1 0v-5z"/>
</svg></i></a>   
<a href="<?=$BASE_URL?>/editar.php?id=<?=$getAl["id"]?>"><i class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
  <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
</svg></i></a>


<form class="delete-form" action="<?=$BASE_URL?>/../config/crud.php" method="POST">
<input type="hidden" name="type" value="deletar">
<input type="hidden" name="id" value="<?=$getAl["id"]?>">
<button type="submit" class="delete"> <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></i>
</button> 
</form>


</td>

</tr>
<?php endforeach;?>
</tbody>
</table>
</div>






<?php include_once("footer.php"); ?>