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
            $txt_autor_id = $_POST["autor-id"];
            $txt_livro_id = $_POST["livro-id"];
            include_once '../../autoria.php';
            $p = new autoria();
            $p->setcod_autor($txt_autor_id);
            $p->setcod_livro($txt_livro_id);
            $pro_bd = $p->alterar(); 
        ?>

        <form action="" method="post" name="cliente2">
            <?php foreach ($pro_bd as $pro_mostrar): ?>
                <input type="hidden" name="txt_autor_id" value='<?php echo $pro_mostrar[0]; ?>'>
                <input type="hidden" name="txt_livro_id" value='<?php echo $pro_mostrar[1]; ?>'>
                <b>ID AUTOR:</b> <?php echo $pro_mostrar[0]; ?><br>
                <b>ID LIVRO:</b> <?php echo $pro_mostrar[1]; ?><br>
                
                <b>Data de lançamento:</b>
                <input type="date" name="date_data_lancamento" value='<?php echo $pro_mostrar[2]; ?>'><br>
                
                <b>Editora:</b>
                <input type="text" name="txt_editora" value='<?php echo $pro_mostrar[3]; ?>'><br>

                <input type="submit" name="btn_alterar" value="Alterar">
                <a href="../../../menu_autoria.html" class="btn-link">Voltar</a>
            <?php endforeach; ?>
        </form>
    </fieldset>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btn_alterar)) {
        include_once '../../autoria.php';
        $pro = new autoria();
        $pro->setcod_autor($txt_autor_id);
        $pro->setcod_livro($txt_livro_id);
        $pro->setdataLancamento($date_data_lancamento);
        $pro->seteditora($txt_editora);
        echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
        header("location:consult_alt_autoria.php");
    }
    ?>
    <center> <br><br><br><br>
</body>
</html>
