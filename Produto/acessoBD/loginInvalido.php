<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Inválido</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa; /* Cor de fundo verde-azulada */
            color: #004d40; /* Texto em verde escuro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 400px;
        }
        h1 {
            font-size: 28px;
            color: #00796b; /* Verde-azulado para o título */
            margin-bottom: 10px;
        }
        p {
            margin: 20px 0;
            color: #00796b; /* Verde-azulado para o texto do parágrafo */
            font-size: 16px;
        }
        .button {
            background-color: #009688; /* Verde-azulado para o botão */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .button:hover {
            background-color: #00796b; /* Verde-azulado mais escuro para hover */
            transform: translateY(-2px);
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Login Inválido</h1>
    <p>Ocorreu um erro ao tentar fazer login. Verifique suas credenciais e tente novamente.</p>
    <a href="login.php" class="button">Tentar Novamente</a>
</div>

</body>
</html>
