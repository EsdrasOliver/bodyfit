<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de treino</title>
    <link rel="stylesheet" href="../styles/registeringTraining.css">
</head>
<body>
    <div class="container">
        <div class="container-form">
            <h1>Cadastro de treino</h1>
        
            <form action="../../api/login.php" method="POST">
                <label for="nome">Nome do treino</label>
                <input type="text" id="nome" name="nome" required>

                <label for="usuario">Repetição</label>
                <input type="text" id="usuario" name="usuario" required>

                <!-- <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
 -->
                <ul>
                    <li>
                        <input type="checkbox" name="dia-sem" id="segunda">
                        <label for="segunda">Segunda</label>
                    </li>
                    <li>
                        <input type="checkbox" name="dia-sem" id="terca">
                        <label for="terca">Terça</label>
                    </li>
                    <li>
                        <input type="checkbox" name="dia-sem" id="quarta">
                        <label for="quarta">Quarta</label>
                    </li>
                    <li>
                        <input type="checkbox" name="dia-sem" id="quinta">
                        <label for="quinta">Quinta</label>
                    </li>
                    <li>
                        <input type="checkbox" name="dia-sem" id="sexta">
                        <label for="sexta">Sexta</label>
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