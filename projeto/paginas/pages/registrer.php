    <?php include_once("header.php");?>

    <form action="../config/crud.php" method="POST">
            <input type="hidden" name="type" value="1">
        <div>
            <label> Nome </label>
                
                <input type="text" name="nome" id="nome">
        </div>
        <div>
                <label> sobre </label>
                    <input type="text" name="sobrenome" id="sobrenome">

        </div>        
                    <div>
                <label> cpf </label>
                    <input type="text" name="cpf" id="cpf">
                    </div>

                <div>
                <label> RG </label>
                    <input type="text" name="rg" id="rg">
                    </div>
                  <div>
                <label> Orgão Emissor</label>
                    <input type="text" name="orgao_emissor" id="orgao_emissor">
                    </div>

                    <div>
                <label> E-mail </label>
                    <input type="text" name="email" id="email">
                    </div>

                     <div>
                <label> Endereco: </label>
                    <input type="text" name="endereco" id="endereco">
                    </div>
                 <div>
                <label> Telefone </label>
                    <input type="text" name="telefone" id="telefone">
                    </div>
                     <div>
                <label> Celular </label>
                    <input type="text" name="celular" id="celular">
                    </div>

                     <div>
                <label> Data Admissao: </label>
                    <input type="text" name="data_admissao" id="data_admissao">
                    </div>
                      <div>
                <label> Cargo: </label>
                    <input type="text" name="cargo" id="cargo">
                    </div>   
                         <div>
                <label> Senha: </label>
                    <input type="text" name="senha" id="senha">
                    </div>
                        <button type="submit" class="btn"> Cadastrar </button> 
     </form>   


    <?php include_once("footer.php"); ?>