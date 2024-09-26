<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        fieldset {
            border: 2px solid #007BFF;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
        }
        legend {
            font-weight: bold;
            color: #007BFF;
        }
        input[type="text"] {
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 16px);
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        b {
            display: inline-block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Alterar Produtos Cadastrados</legend>

        <?php
            $txt_id = $_POST["product-id"];
            include_once 'Produto.php';
            $p = new produtos();
            $p->setId($txt_id);
            $pro_bd = $p->alterar(); 
        ?>

        <form action="" method="post" name="cliente2">
            <?php foreach ($pro_bd as $pro_mostrar): ?>
                <input type="hidden" name="txtid" value='<?php echo $pro_mostrar[0]; ?>'>
                <b>ID:</b> <?php echo $pro_mostrar[0]; ?><br>
                
                <b>Nome:</b>
                <input type="text" name="txtnome" value='<?php echo $pro_mostrar[1]; ?>'><br>
                
                <b>Estoque:</b>
                <input type="text" name="txtestoq" value='<?php echo $pro_mostrar[2]; ?>'><br>
                
                <input type="submit" name="btn_alterar" value="Alterar">
            <?php endforeach; ?>
        </form>
    </fieldset>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btn_alterar)) {
        include_once 'Produto.php';
        $pro = new produtos();
        $pro->setNome($txtnome);
        $pro->setEstoque($txtestoq);
        $pro->setId($txtid);
        echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
        header("location:consult_alt.php");
    }
    ?>
    <center> <br><br><br><br>
    <button><a href="../menu_produto.html"> Voltar </a></button>
</body>
</html>
