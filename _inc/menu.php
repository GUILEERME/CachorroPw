<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navegação</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* CSS do Menu */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5F5DC; /* Cor de fundo neutra */
            margin: 0;
        }

        /* Estilo do menu */
        nav {
            background-color: #A7D8FF; /* Azul claro */
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Links do menu */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 30px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            color: #2C6E49; /* Verde escuro */
            font-weight: 600;
            font-size: 18px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        /* Efeito de hover */
        nav ul li a:hover {
            color: #FFB74D; /* Laranja claro */
            transform: translateY(-3px);
        }

        /* Estilo de logotipo, se necessário */
        .logo {
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            color: #2C6E49; /* Verde escuro */
        }
        .logo a {
            text-decoration: none;
        }
        .logo a:visited {
            color: #2C6E49; /* Mantém a cor original */
            text-decoration: none; /* Sem sublinhado após clique */
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><a href="index.php">Doggo</a></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li> <a href="racas.php"> Raças</a> </li>
            <li><a href="racoes.php">Rações</a></li>
        </ul>
    </nav>

</body>
</html>
