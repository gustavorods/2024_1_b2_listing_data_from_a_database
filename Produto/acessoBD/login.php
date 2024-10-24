<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tela de Login</title>
    
    <script>
        function validarSenha(input) {
            if (/[^0-9]/.test(input.value)) {
                alert("A senha deve conter apenas números!");
                input.value = input.value.replace(/[^0-9]/g, '');
            }
            if (input.value.length > 8) {
                alert("A senha não pode ter mais de 8 caracteres!");
                input.value = input.value.substring(0, 8);
            }
        }
    </script>

    <style>
        body {
            background-color: #e0f7fa; /* Fundo verde-azulado */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }

        h1 {
            margin-bottom: 1.5rem;
            color: #00796b; /* Verde-azulado para o título */
        }

        .input-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #004d40; /* Verde escuro para os rótulos */
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #00796b; /* Verde-azulado para foco */
            outline: none;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #009688; /* Verde-azulado para o botão */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #00796b; /* Verde-azulado mais escuro para hover */
        }

        p {
            margin-top: 1rem;
        }

        a {
            color: #00796b; /* Verde-azulado para links */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo de volta!</h1>
        <form name="usuario" method="POST" action="">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" name="txtnome" required>
            </div>
            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" name="txtsenha" maxlength="8" oninput="validarSenha(this)" required>
            </div>
            <button type="submit" name="btnentrar">Entrar</button>
            
            <?php
                extract($_POST, EXTR_OVERWRITE);
                if (isset($btnentrar)) {
                    include_once 'usuario.php';
                    $usuario = new usuario();
                    $usuario->setUsuario($txtnome);
                    $usuario->setSenha($txtsenha);
                    $pro_bd = $usuario->logar();

                    $existe = false;
                    foreach ($pro_bd as $pro_mostrar) {
                        $existe = true;
                        echo "<br><b>Bem Vindo! " . htmlspecialchars($pro_mostrar[0]) . "</b><br><br>";
                        echo '<input type="button" name="btnmenu"> <a href="../menu_produto.html">Entrar</a>';
                    }
                    if (!$existe) {
                        header("location:loginInvalido.php");
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
