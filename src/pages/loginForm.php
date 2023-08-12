<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
          text-align: left;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: green;
            width: 100%;
            height: 2.5rem;
            color: white;
            border: solid green 2px;
            border-radius: 10px;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 0.2rem;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
       
        <form action="../../api/login.php" method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Entrar</button>
            <?php if (isset($_SESSION['login_erro'])): ?>
            <p class="error">
                <?php echo $_SESSION['login_erro']; ?>
            </p>
            <?php unset($_SESSION['login_erro']); ?>
        <?php endif; ?>
        </form>
    </div>
</body>

</html>