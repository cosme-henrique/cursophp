<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Manipulação de strings PHP</h1>
    <?php 
        //double quote (" ")
        $nome = "Cosme";
        $sobrenome = "Henrique";
        echo "$nome $sobrenome \u{1F3DF}";

        //single quoted (' ')
        $pessoa = 'Clara';
        echo 'Pessoa é $pessoa';

        //nem sempre double quote irá interpretar no caso das CONST e algumas funções não funciona
        const ESTADO = "RJ";
        echo "Moro no ESTADO"; // ERRADO
        echo "Moro no ".ESTADO;

        //escape sequences
        $nome = "Cosme";
        $apelido = "Pikachu";
        echo "$nome \"$apelido\""; //Fazendo assim o apelido irá ficar entre aspas duplas

        //Heredoc
        $curso = "PHP";
        $ano = date('Y');
        echo <<< TESTE
                    Estou estudando 
                        $curso no de $ano \u{1F3DF}
                 TESTE;
    ?>
</body>
</html>