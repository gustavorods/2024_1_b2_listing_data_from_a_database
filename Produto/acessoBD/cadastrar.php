<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <style>
        body {
            font-family: 'Century Gothic', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        legend {
            font-weight: bold;
        }
        input[type="text"], input[type="submit"], input[type="reset"] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: calc(100% - 22px);
        }
        input[type="submit"], input[type="reset"] {
            width: calc(50% - 12px);
            cursor: pointer;
            background-color: #007BFF;
            color: #fff;
            border: none;
        }
        input[type="reset"] {
            background-color: #6c757d;
        }
        button a {
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            position: fixed;
            top: 20px;
            left: 20px;
            color: white;
        }
        h3 {
            color: green;
        }
    </style>
</head>
<body>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Dados do produto</b></legend>
            <p>Nome:
                <input type="text" name="txtnome" size="40" maxlength="40" placeholder="Nome do Produto">
            </p>
            <p>
                Estoque: <input type="text" name="txtestoq" size="10" placeholder="0">
            </p>
        </fieldset>
        <fieldset id="b">
            <legend><b>Opções</b></legend>
            <input type="submit" value="Cadastrar" name="btnenviar">
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

    <button><a href="../menu_produto.html">Voltar</a></button>
</body>
</html>
