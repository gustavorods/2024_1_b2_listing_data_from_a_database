<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <form name="cliente" method="POST" action = "">
        <fieldset id="a">
            <legend><b>Dados do produto</b></legend>
            <p>Nome:
                <input type="text" name="txtnome" size="40" maxlength="40" placeholder="Nome do Produto">
            </p>
            <p>
                Estoque: <input type="text" name="txtestoq" size="10" placeholder="0">
            </p>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Opções</b></legend>
            <br>
            <input type="submit" value="Cadastrar" name="btnenviar"> &nbsp;&nbsp;
            <input type="reset" value="Limpar" name="Limpar">
        </fieldset>
    </form>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar)) {
        include_once 'Produto.php';
        $pro=new produtos();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }
    ?>
    <br>
    <center>
        <button><a href="../menu_produto.html"> Voltar </a></button>
    </center>
</body>
</html>