<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário de Carro</title>
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
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            letter-spacing: 1.2px;
            color: #bbb;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        label {
            font-size: 1.1rem;
            margin-bottom: 6px;
            color: #ccc;
        }

        select {
            padding: 12px 15px;
            background-color: #2a2a2a;
            margin-top: 10px;
            width: 100%;
            border-radius: 5px;
            color: #eee;
            font-size: 1rem;
        }

        select:focus {
            outline: none;
            border-color: #888;
            background-color: #333;
        }


        input[type="text"],
        input[type="number"] {
            padding: 12px 15px;
            background-color: #2a2a2a;
            border: 1.5px solid #444;
            margin-top: 10px;
            width: 100%;
            border-radius: 5px;
            color: #eee;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #888;
            background-color: #333;
        }

        input[type="submit"] {
            background-color: #444;
            color: #eee;
            padding: 14px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de Carro</h2>
        <form action="cadastro-carro.php">
            <div>
                <label for="modelo">Modelo:</label><br>
                <input type="text" id="modelo" name="modelo" placeholder="Ex: Corolla" required />
            </div>
            <div>
                <label for="marca">Marca do carro</label>
                <select id="marca" name="marca">
                    <option value="">Selecione uma marca</option>
                    <option value="toyota">Toyota</option>
                    <option value="honda">Honda</option>
                    <option value="ford">Ford</option>
                    <option value="chevrolet">Chevrolet</option>
                    <option value="bmw">BMW</option>
                    <option value="audi">Audi</option>
                    <option value="mercedes">Mercedes-Benz</option>
                    <option value="volkswagen">Volkswagen</option>
                </select>
            </div>
            <div>
                <label for="ano">Ano:</label><br>
                <input type="text" id="ano" name="ano" placeholder="Ex: 2020" required />
            </div>
            <input type="submit" value="Enviar" />

        </form>
    </div>
</body>

</html>