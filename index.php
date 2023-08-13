<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
        header('Location: ./src/pages/loginForm.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php 
        include './components/header.php';
    ?>
    <main>
        <div>
            <h2>Boas vindas ao Bodyfit</h2>
            <p>
                Tudo aquilo que você sempre quis com o mundo do fitness.
                Um ambiente totalmente voltado para a melhor experiência na academia focado para os seus objetivos.
            </p>
            
            <p>
                Oferecemos ambiente com ótimos treinos voltados aos seus objetivos, focando na sua melhora e desempenho.
            </p>
        </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
</body>
</html>
