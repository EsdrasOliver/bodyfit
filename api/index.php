<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
<?php
    $nomes = array("Mateus", "Jhonnata", "Edras", "Caio");

    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    ?>
</div>
</body>
</html>