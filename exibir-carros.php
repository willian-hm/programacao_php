<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Carros</title>
    <style>
         /* Reset básico */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #1e1e1e;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            letter-spacing: 1.2px;
            color: #bbb;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: center;
            color: #eee;
        }

        th {
            background-color: #2a2a2a;
            color: #ccc;
        }

        tr:nth-child(even) {
            background-color: #1f1f1f;
        }

        tr:nth-child(odd) {
            background-color: #2a2a2a;
        }
    </style>
</head>
<body>

<?php
// Matriz de carros (nome, marca, ano)
require_once "CarroDAO.php";

$carros = CarroDAO::consultar();
?>

<table>
    <tr><th>id</th><th>Modelo</th><th>Marca</th><th>Ano</th></tr>
        <?php
        for ($i=0;$i<count($carros);$i++) {
            ?>
                <tr>
                    <td><?= $i + 1?></td>
                    <td><?=$carros[$i]["modelo"]?></td>
                    <td><?=$carros[$i]["marca"]?></td>
                    <td><?=$carros[$i]["ano"]?></td>
                </tr>
            <?php
            
        }
?>
</body>
</html>
