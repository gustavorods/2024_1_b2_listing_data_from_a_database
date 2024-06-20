<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relação de Produtos Cadastrados</title>
    <style>
        body {
            font-family: Century Gothic, sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        #cabecalho {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        #tabela {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #tabela th,
        #tabela td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tabela th {
            background-color: #f0f0f0;
        }

        #botao-menu {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="cabecalho">
            <h1>Itens tabela "Autoria"</h1>
        </div>

        <table id="tabela">
            <tr>
                <th>código autor</th>
                <th>código livro</th>
                <th>Data de lançamento</th>
                <th>Editora</th>
            </tr>

            <?php
            include_once 'autoria.php';

            $p = new autoria();
            $pro_bd = $p->listar();

            foreach ($pro_bd as $pro_mostrar) {
                ?>    
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td1>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                    <td><?php echo $pro_mostrar[3]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>

        <a href="../menu_autoria.html" id="botao-menu">Voltar ao Menu</a>
    </div>
</body>
</html>
