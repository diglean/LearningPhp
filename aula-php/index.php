<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo 'Hello world!';
    echo  '<br/>';
    date_default_timezone_set('America/Sao_Paulo');

    $tempo = time();

    echo 'O Timestamp atual é: '.$tempo;
    echo  '<br/>';

    $tempo = $tempo + (30*86400);

    echo date('d/m/Y H:i', $tempo);
    echo  '<br/>';

    $tempo2 = strtotime('+30 minutes');
    echo date('d/m/Y H:i', $tempo2);
    echo  '<br/>';

    echo date('l/F/Y Ha')

    ?>
</body>
</html>