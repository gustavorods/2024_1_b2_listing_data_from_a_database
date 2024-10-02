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
        .btn-link {
            display: inline-block;
            text-decoration: none;
            background-color: red;
            color: white;
            padding: 9px 19px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

    </style>
</head>
<body>
    <fieldset>
        <legend>Alterar Livros Cadastrados</legend>

        <?php
            $txt_id = $_POST["livro-id"];
            include_once '../../livro.php';
            $p = new livro();
            $p->setCod_livro($txt_id);
            $pro_bd = $p->alterar(); 
        ?>

        <form action="" method="post" name="cliente2">
            <?php foreach ($pro_bd as $pro_mostrar): ?>
                <input type="hidden" name="txt_id" value='<?php echo $pro_mostrar[0]; ?>'>
                <b>ID:</b> <?php echo $pro_mostrar[0]; ?><br>
                
                <b>Titulo:</b>
                <input type="text" name="txt_titulo" value='<?php echo $pro_mostrar[1]; ?>'><br>
                
                <b>Categoria:</b>
                <input type="text" name="txt_categoria" value='<?php echo $pro_mostrar[2]; ?>'><br>

                <b>ISBN:</b>
                <input type="text" name="txt_ISBN" value='<?php echo $pro_mostrar[3]; ?>'><br>

                <b>Idioma:</b>
                <input type="text" name="txt_idioma" value='<?php echo $pro_mostrar[4]; ?>'><br>

                <b>Quantidade de páginas:</b>
                <input type="text" name="txt_qtnd_pag" value='<?php echo $pro_mostrar[5]; ?>'><br>

                <input type="submit" name="btn_alterar" value="Alterar">
                <a href="../../../menu_autoria.html" class="btn-link">Voltar</a>
            <?php endforeach; ?>
        </form>
    </fieldset>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btn_alterar)) {
        include_once '../../livro.php';
        $pro = new livro();
        $pro->setCategoria($txt_categoria);
        $pro->setCod_livro($txt_id);
        $pro->setIdioma($txt_idioma);
        $pro->setISBN($txt_ISBN);
        $pro->setQtdePag($txt_qtnd_pag);
        $pro->setTitulo($txt_titulo);
        echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
        header("location:consult_alt_livro.php");
    }
    ?>
    <center> <br><br><br><br>
</body>
</html>
