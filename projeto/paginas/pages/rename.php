<?php include_once("header.php");
include_once("../config/crud.php");
?>
<?php
print_r($getDatas['id']);
?>

<form action="../config/crud.php" method="POST">
    <input type="hidden" name="type" value="2">
    <input type="hidden" name="id" value="<?= $getDatas['id'] ?>">
    <div>
        <label> Nome </label>

        <input type="text" name="nome" id="nome" value="<?= $getDatas['nome'] ?>">
    </div>
    <div>
        <label> sobre </label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?= $getDatas['sobrenome'] ?>">

    </div>
    <div>
        <label> cpf </label>
        <input type="text" name="cpf" id="cpf" value="<?= $getDatas['cpf'] ?>">
    </div>

    <div>
        <label> RG </label>
        <input type="text" name="rg" id="rg" value="<?= $getDatas['rg'] ?>">
    </div>
    <div>
        <label> Orgão Emissor</label>
        <input type="text" name="orgao_emissor" id="orgao_emissor" value="<?= $getDatas['orgao_emissor'] ?>">
    </div>

    <div>
        <label> E-mail </label>
        <input type="text" name="email" id="email" value="<?= $getDatas['email'] ?>">
    </div>

    <div>
        <label> Endereco: </label>
        <input type="text" name="endereco" id="endereco" value="<?= $getDatas['endereco'] ?>">
    </div>
    <div>
        <label> Telefone </label>
        <input type="text" name="telefone" id="telefone" value="<?= $getDatas['telefone'] ?>">
    </div>
    <div>
        <label> Celular </label>
        <input type="text" name="celular" id="celular" value="<?= $getDatas['celular'] ?>">
    </div>

    <div>
        <label> Data Admissao: </label>
        <input type="text" name="data_admissao" id="data_admissao" value="<?= $getDatas['data_admissao'] ?>">
    </div>
    <div>
        <label> Cargo: </label>
        <input type="text" name="cargo" id="cargo" value="<?= $getDatas['cargo'] ?>">
    </div>
    <div>
        <label> Senha: </label>
        <input type="text" name="senha" id="senha" value="<?= $getDatas['senha'] ?>">
    </div>
    <button type="submit" class="btn"> Cadastrar </button>
</form>

<?php print_r($getDatas['id']);
print_r($getDatas['nome']);
?>
<?php include_once("footer.php");
