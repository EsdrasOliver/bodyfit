<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <?php 
        include './components/header.php';
    ?>
    <main>
        <div>
            <h2>Serviços</h2>

            <a id="ancora" href="#treinos">Acesso aos treinos</a>
            <a id="ancora" href="#progresso">Acompanhamento de progresso</a>
            <a id="ancora" href="#dicas">Dicas de treinos</a>

            <p>Oferecemos aos nossos cliente uma experiência de treinamento da melhor forma, podendo desde de ter acesso a ótimos equipamentos e acompanhamento profissional.</p>
            <p>Dentre os serviços que oferecemos estão:</p>

            <ul>
                <li>Acesso aos treinos</li>
                <li>Acompanhamento de progresso</li>
                <li>Dicas de treinos</li>
            </ul> 
            
            <hr>
            <div class="text-ancora">
                <h2 id="treinos">Acesso aos treinos</h2>
                <p>Oferecemos informações sobre como anda seus treinos e etapas.</p>
                
                <h2 id="progresso">Acompanhamento de progresso</h2>
                <p>Analisamos o progresso e como anda sua evolução.</p>
            
                <h2 id="dicas">Dicas de treinos.</h2>
                <p>Reservamos um acompanhamento de um profissonal para auxiliar em seus treinos.</p>
                <p>Com dicas de treino de um profissional para bater as suas metas.</p>
            </div>
        </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
</body>
</html>