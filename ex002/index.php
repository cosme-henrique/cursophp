<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); //Esse comando seta a timezone para aonde eu quizer, nesse caso e Brazil São Paulo.
        echo "Hoje é dia " . date("d/M/Y"); //A função date() retorna uma data. d = Dia, M = Mês, Y = Ano.
        echo " e a hora atual é " . date("G:i:s T"); //A função date() retorna hora tambem. G = Hora, i = Minuto, s = Segundo, T = Timezone.
    ?>
</body>
</html>