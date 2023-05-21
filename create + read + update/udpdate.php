<?php include_once('header.php')?>


        <div class='Todo'>
            <?php include_once('show.php')?>
     <div class='lado_direito'>
     <div class="card">
     <h1>Atualizar    
            <a href="#"><ion-icon name="book-outline"></ion-icon></a>
            <a href=""><ion-icon name="trash-outline"></ion-icon></a>
            </h1> 
                
                <div class="texfield-group-">
                <div class="texfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o nome">
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
                        <label for="emissor">Órg emissor</label>
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
            
                <div class="texfield-group">
                    <div class="texfield">
                        <label for="data_admissao">Admissão</label>
                        <input type="date" name="data_admissao">
                    </div>

                    <div class="texfield">
                        <label for="data_demissao">Demissão</label>
                        <input type="date" name="data_demissao">
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
                    <textarea name="descricao"  placeholder="Descrição do cargo"></textarea>
                </div>
                <button class="btn">Cadastrar</button>
            </div>
      
     </div>

 </div>
 <?php include_once('footer.php')?>