<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro personal ou aluno</title>
    <link rel="stylesheet" href="../styles/registeringUsers.css">
</head>
<body>
    <div class="container">
        <div class="container-form">
            <h1>Cadastro</h1>
        
            <form action="../../api/login.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>

                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>

                <ul>
                    <li>
                        <input type="radio" name="cargo" id="aluno" value="Aluno">
                        <label for="aluno">Aluno</label>
                    </li>
                    <li>
                        <input type="radio" name="cargo" id="personal" value="Personal">
                        <label for="personal">Personal</label>
                    </li>
                </ul>

                <button type="submit">Cadastrar</button>

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