<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../styles/loginForm.css">
</head>

<body>
    <div class="container">
        <div class="container-form">
            <h1>Login</h1>
        
            <form action="../../api/login.php" method="POST">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="senha">Senha</label>
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
    </div> 
</body>

</html>