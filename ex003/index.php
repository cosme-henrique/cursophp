<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        $v = "Cosme";
        var_dump($v); // Função interna do PHP, que podemos usar para ver dados da variavel, por exemplo o TIPO dela

        $num = 3e2; // 3 x 10(2)
        echo "O valor é $num";
        var_dump($num); // Sempre que utilizamos potencia, o tipo passa a ser float

        $num2 = (int) "300"; // Eu posso converter os tipos, isso no PHP se chama de COERÇÃO
        var_dump($num2);

        $casado = true;
        var_dump($casado);
        echo "O valor para casado é $casado"; // Se o valor for false, ele não mostrara nada. se o valor for true ele mostrara 1

        $vet = [6, 2.5, "Maria", 3, false]; // Array
        var_dump($vet);

        class Pessoa { //Objet
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>