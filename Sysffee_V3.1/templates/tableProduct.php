<?php
include_once('../config/sessao.php');
include_once("head.php");
include_once("header.php");
include_once("../config/processamentoProduto.php")

?>

<body class="table_body">

     <div class="tableProd">
          <main class="table">
               <section class="table__header">
                    <h1>Produtos do Estoque</h1>
                    <?php if (count($AllProduct) > 0) : ?>
                         <?php if ($_SESSION['cargo'] == 1) : ?>
                              <div class="adicionar">
                                   <a href="<?= $BASE_URL ?>/createProduct.php"> <ion-icon class="adicionarIcone" name="add-circle-outline"></ion-icon> </a>
                              </div>
                         <?php endif; ?>
               </section>

               <section class="table__body">
                    <table>
                         <thead>
                              <tr>
                                   <th scope="col">Id</th>
                                   <th scope="col">nome</th>
                                   <th scope="col">Código</th>
                                   <th scope="col">Quantidade</th>
                                   <th scope="col">Ver</th>
                                   <th scope="col">Editar</th>
                                   <?php if ($_SESSION['cargo'] == 1) : ?>
                                        <th scope="col">Excluir</th>
                                   <?php endif; ?>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach ($AllProduct as $product) : ?>
                                   <tr>

                                        <td><?= $product["id"] ?></td>
                                        <td><?= $product["nome"] ?></td>

                                        <td><?= $product["cod_product"] ?></td>
                                        <td class="tdQuantidade"><?= $product["quantidade"] ?></td>


                                        <td><a href="<?= $BASE_URL ?>/showProduct.php?id=<?= $product["id"] ?>"><ion-icon name="book-outline"></ion-icon></a></td>
                                        <td><a href="<?= $BASE_URL ?>/editProduct.php?id=<?= $product["id"] ?>"><ion-icon name="create-outline"></ion-icon></a></td>
                                        <?php if ($_SESSION['cargo'] == 1) : ?>
                                             <td>
                                                  <!--delete-->

                                                  <form class="delete-form" action="<?= $BASE_URL ?>/../config/processamentoProduto.php" method="POST">
                                                       <input type="hidden" name="type" value="delete">
                                                       <input type="hidden" name="id" value="<?= $product["id"] ?>">
                                                       <button type="submit" class="delete-btn"><ion-icon name="close-outline"></ion-icon></button>
                                                  </form>
                                             </td>
                                        <?php endif; ?>
                                   </tr>
                              <?php endforeach; ?>
                         </tbody>

                    </table>
               </section>

          <?php else : ?>
               <p id="empty-list-text">
               <div class="adicionar1">
                    <a class="adicionar1" href="createProduct.php"><ion-icon class="adicionar1" name="add-circle-outline"></ion-icon></a>
               </div>
               </p>
          <?php endif; ?>
     </div>
     </div>
     <?php
     include_once("footer.php");
     ?>