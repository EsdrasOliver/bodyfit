<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['usuario'])) {
    // Redirecionar para a página de login
    echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
    header('Location: ./src/pages/loginForm.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
   
    <style>
        body {
            background: linear-gradient(120deg, #d8c8ff, #ffffff);
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>bem vindo ao sistema de ficha de academia bodyfit</h1>
         <h1> <p>Você esta logado, <?php echo $_SESSION['usuario']; ?>!</p> </h1>
        <h1>Página Principal</h1>
        <p>Seja bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
        <a href="./src/pages/logout.php">Sair</a>
    </div>
</body>
</html>
