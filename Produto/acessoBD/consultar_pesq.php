<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <font face="Century Gothic" size="6"><b>Consulta de Produtos Cadastrados</b></font>
        <font size="4"><br>
        <font face="Century Gothic" size="3"></font><br>
        <font size="4"></font>

        <form name="cliente" method="POST" action="">
            <fieldset id="A">
                <legend><b>Informe o Nome do produto desejado:</b></legend>
                <br> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto">
                <br><br><center>
                <input name="btnenviar" type="submit" value="Consultar">
                <input name="limpar" type="reset" value="Limpar">
            </fieldset>
            <br>
            <fieldset id="b">
                <legend><b>Resultado:</b></legend>
                <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar)) {
                    include_once 'Produto.php';
                    $p = new produtos();
                    $p->setNome($txtnome. '%');
                    $pro_bd= $p->consultar();
                    foreach($pro_bd as $pro_mostrar) {
                        ?>
                        <br>
                        <br> <b> 
                            <?php echo "ID: " . $pro_mostrar[0]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                        </b>
                        <br> <b> 
                            <?php echo "Nome: " . $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                        </b>
                        <br> <b> 
                            <?php echo "Estoque: " . $pro_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                        </b>
                        <?php
                    }
                }
            ?>    
            </fieldset>
        </form>
    </center> 
    <br>
    <br>
    <br>
    <br>
    <button>
        <a href="../menu_produto.html"> Voltar </a>
    </button>
</body>
</html>