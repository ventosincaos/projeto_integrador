<?php
 include_once("header.php");
?>

<main class="table">
        <section class="table__header">
            <h1>Funcionários</h1>
            <div class="adicionar">
               <a href="create.php"><ion-icon name="add-circle-outline"></ion-icon></a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Nome </th>
                        <th> Cargo </th>
                        <th> Telefone </th>
                        <th> Email </th>
                        <th>Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Pessoa</td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon  class="read" name="book-outline"></ion-icon></a> </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td><img src="images/Jeet Saru.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read"  name="book-outline"></ion-icon></a> </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td><img src="images/Sonal Gharti.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    <tr>
                        <td> 5</td>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    </tr>
                    <tr>
                        <td> 6</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    <tr>
                        <td> 7</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Pessoa </td>
                        <td> Cozinheiro </td>
                        <td> (61)99999-9999 </td>
                        <td>teste@gmail.com</td>
                        <td> <a href="show.php"><ion-icon class="read" name="book-outline"></ion-icon></a> </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>



<?php
 include_once("footer.php");
?>
