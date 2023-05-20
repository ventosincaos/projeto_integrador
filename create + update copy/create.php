<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class='Todo'>
<div class='lado_esquerdo'>
  <div class="perfil">
      <h4><img src="Sarita Limbu.jpg" alt="">Nome teste <span>Cargo</span></h4>
      
    <button class="edit"><a href="#">Editar</a></button>
  </div>
        <div class="editar">
        <div class="group">
        <h3>Informações pessoais</h3>
        <h4>Nome <span>Nome teste</span></h4>
        <h4>Sobrenome <span>Sobrenome teste</span></h4>
        <h4>Telefone <span>(66)66666-6666</span></h4>
        <h4>Email <span>satan666@gmail.com</span></h4>
        <h4>Data da Admissão <span>30/02/2023</span></h4>
      
   <button class="edit-button"><a href="#">Editar</a></button>
    <button class="delete-button"><a href="#">Apagar</a></button>
  </div>
</div>



    </div>

     <div class='lado_direito'>
     <div class="card">
            <h1>Cadastro</h1> 
                
                <div class="texfield-group-">
                <div class="texfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o nome completo">
                </div>

                <div class="texfield">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" placeholder="Digite o sobrenome">
                </div>
                </div>

                <div class="texfield-group">
                    <div class="texfield">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" placeholder="Digite o CPF" maxlength="11">
                    </div>

                    <div class="texfield">
                        <label for="rg">RG</label>
                        <input type="number" name="rg" placeholder="Digite o RG" maxlength="7">
                    </div>

                    <div class="texfield">
                        <label for="emissor">Emissor</label>
                        <input type="text" name="emissor" placeholder="Digite o Órgão emissor">
                    </div>
                </div>

                <div class="texfield-group-">
                <div class="texfield">
                        <label for="telefone">Telefone</label>
                        <input type="number" name="telefone" placeholder="Digite o telefone">
                    </div>

                    <div class="texfield">
                             <label for="email">E-mail</label>
                             <input type="email" name="email" placeholder="Digite o e-mail">
                         </div>
                    </div>

                <div class="texfield">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" placeholder="Digite o endereço">
                </div>
            
                <div class="texfield-group-">
                    <div class="texfield">
                        <label for="data_admissao">Admissão</label>
                        <input type="date" name="data_admissao">
                    </div>

                    <div class="texfield">
                        <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo">
                            <option value="Administrador">Administrador</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Atendente">Atendente</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Cozinheiro">Cozinheiro</option>
                        </select>
                    </div>
                </div>

                <div class="texfield">
                    <label for="descricao">Descrição do cargo</label>
                    <textarea name="descricao" row="10" cols="30" placeholder="Descrição do cargo"></textarea>
                </div>
                <button class="btn">Cadastrar</button>
            </div>
      
     </div>

 </div>
</body>
</html>