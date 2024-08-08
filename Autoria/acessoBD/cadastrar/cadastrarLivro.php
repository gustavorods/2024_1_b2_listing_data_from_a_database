<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro de Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .button-group button.enviar {
            background-color: #28a745;
            color: #fff;
        }
        .button-group button.resetar {
            background-color: #dc3545;
            color: #fff;
        }
        .button-group button:hover {
            opacity: 0.9;
        }
        .button-group a {
            color: #fff;
            text-decoration: none;
        }
        .button-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Livro</h2>
        <form name="livro" method="POST" action="">
            <div class="form-group">
                <label for="titulo">Título do Livro:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" required>
            </div>
            <div class="form-group">
                <label for="idioma">Idioma:</label>
                <input type="text" id="idioma" name="idioma" required>
            </div>
            <div class="form-group">
                <label for="quantidade-paginas">Quantidade de Páginas:</label>
                <input type="number" id="quantidade-paginas" name="quantidadePaginas" required>
            </div>
            <div class="button-group">
                <button type="submit" class="enviar" name="btnEnviar">Enviar</button>
                <button type="reset" class="resetar">Resetar</button>
                <a href="../../menu_autoria.html">
                    <button type="button">Voltar</button>
                </a>
            </div>
        </form>
    </div>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnEnviar)) {
        include_once '../livro.php';
        $pro = new livro();
        $pro->setTitulo($titulo);
        $pro->setCategoria($categoria);
        $pro->setISBN($isbn);
        $pro->setIdioma($idioma);
        $pro->setQtdePag($quantidadePaginas);
        echo "<h3><br><br>" . $pro->salvar() . "</h3>";
    }
    ?>
</body>
</html>
