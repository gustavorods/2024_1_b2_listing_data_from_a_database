<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Livro</title>
    <style>
        body {
            font-family: 'Century Gothic', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            font-size: 2em;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        fieldset {
            border: 2px solid #007bff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #e9ecef;
        }
        legend {
            font-weight: bold;
            color: #007bff;
            font-size: 1.2em;
        }
        input[type="number"], input[type="submit"], input[type="reset"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
            margin-right: 10px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #0056b3;
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
        p {
            margin: 10px 0;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>Exclusão de livros Cadastrados</h1>
        <form name="cliente" method="POST" action="">
            <fieldset id="a">
                <legend>Informe o ID do livro desejado:</legend>
                <p>Id: <input name="txtid" type="number" size="20" maxlength="5" placeholder="Id do livro"></p>
                <p class="center">
                    <input name="btnenviar" type="submit" value="Excluir">
                    <input name="limpar" type="reset" value="Limpar">
                </p>
            </fieldset>
        </form>

        <fieldset id="b">
            <legend>Resultado:</legend>
            <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar)) {
                    include_once '.././livro.php';
                    $p = new livro();
                    $p->setCod_livro($txtid);
                    echo "<h3>" . $p->exclusao() . "</h3>";
                }
            ?>
        </fieldset>
        <p class="center">
            <button><a href="../../menu_autoria.html">Voltar</a></button>
        </p>
    </div>
</body>
</html>
