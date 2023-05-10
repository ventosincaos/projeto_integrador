

<?php
session_start();
include 'conexao.php';

if (isset($_SESSION['login'])){
        if(isset($_['pagina'])){
             $pagina = $_GET['pagina'];
        }
        else{
                $pagina = 'index';
        }
}
else{
        $pagina = 'home'; 
}

switch($pagina){
        
        case 'index': include '../paginas/cadastro.php'; break;
        case 'home': include '../paginas/login.php'; break;

}



?>



