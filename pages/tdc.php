<?php
 include 'd.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os dados cadastrados</title>
    <link rel="stylesheet" href="/styles/principal.css">
</head>
<body>
<header>
        <h3>
           Utilizando Arrays em PHP 
        </h3>
        <a href="/index.html">Inicio</a>
    </header>
    <div class="poster">
        <h1>
            Manipulação de Arrays em PHP
        </h1>
        <p>
            Exibindo todos os dados cadastrados.
        </p>
    </div>
    <div class="tabela">
        <table>
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Estilo preferido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dados as $linha => $item):?>
                    <tr>
                        <th escope="row"><?php echo $item['nome'] ?></th>
                        <th><?php echo $item['idade'] ?></th>
                        <th><?php echo $item['estilo'] ?></th>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>