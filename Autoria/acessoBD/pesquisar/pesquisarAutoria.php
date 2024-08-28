<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos Cadastrados</title>
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
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <h1>Consulta de Editora Cadastrados</h1>
    <form name="cliente" method="POST" action="">
        <fieldset id="A">
            <legend>Informe o nome da editora desejada:</legend>
            <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome da editora">
            <input name="btnenviar" type="submit" value="Consultar">
            <input name="limpar" type="reset" value="Limpar">
        </fieldset>
        <fieldset id="b">
            <legend>Resultado:</legend>
            <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnenviar)) {
                include_once '../autoria.php';
                $p = new autoria();
                $p->seteditora($txtnome. '%');
                $pro_bd= $p->consultar();
                foreach($pro_bd as $pro_mostrar) {
                    ?>
                    <p><b>Código autor:</b> <?php echo $pro_mostrar[0]; ?></p>
                    <p><b>Código livro:</b> <?php echo $pro_mostrar[1]; ?></p>
                    <p><b>Data de lançamento:</b> <?php echo $pro_mostrar[2]; ?></p>
                    <p><b>Editora:</b> <?php echo $pro_mostrar[3]; ?></p>
                    <hr>
                    <?php
                }
            }
            ?>    
        </fieldset>
    </form>
    <button><a href="../../menu_autoria.html">Voltar</a></button>
</body>
</html>
