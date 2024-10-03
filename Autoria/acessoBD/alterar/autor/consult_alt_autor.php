<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Produtos Cadastrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn-clear {
            background-color: #f44336;
        }

        .btn-clear:hover {
            background-color: #e53935;
        }

        .btn-back {
            background-color: #2196F3;
        }

        .btn-back:hover {
            background-color: #1976d2;
        }

        .btn-link {
            display: inline-block;
            text-decoration: none;
            background-color: #2196F3;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-link:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alteração de Autores Cadastrados</h1>
        <form action="./alterar_autor.php" method="POST" name="cliente">
            <label for="autor-id">Informe o ID do autor desejado:</label>
            <input type="text" id="autor-id" name="autor-id" placeholder="Digite o ID do autor" required>

            <div class="buttons">
                <button type="submit">Enviar</button>
                <button type="reset" class="btn-clear">Limpar</button>
                <a href="../../../menu_autoria.html" class="btn-link">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>
