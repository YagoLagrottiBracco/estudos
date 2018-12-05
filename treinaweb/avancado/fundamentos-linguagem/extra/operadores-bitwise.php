<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tabela Bitwise</title>
    </head>
    <body>
        <h1>Os operadores Bit a Bit disponíveis no <strong>PHP</strong> são:</h1>
        <table border="1">
            <tr>
                <th><strong>Exemplo</strong></th>
                <th><strong>Nome do operador</strong></th>
                <th><strong>Resultado</strong></th>
            </tr>
            <tr>
                <td>$a <strong>&</strong> $b</td>
                <td><strong>E</strong></td>
                <td>Os bits que estão ativos (1/TRUE) tanto em <strong>$a</strong> quanto em <strong>$b</strong> são ativados.</td>
            </tr>
            <tr>
                <td>$a <strong>|</strong> $b</td>
                <td><strong>OU</strong></td>
                <td>Os bits que estão ativos em <strong>$a</strong> ou em <strong>$b</strong> são ativados.</td>
            </tr>
            <tr>
                <td>$a <strong>^</strong> $b</td>
                <td><strong>XOR</strong></td>
                <td>Os bits que estão ativos em <strong>$a</strong> ou em <strong>$b</strong>, mas não em ambos, são ativos.</td>
            </tr>
            <tr>
                <td><strong>~</strong> $a</td>
                <td><strong>NÃO</strong></td>
                <td>Os bits que estão ativos em <strong>$a</strong> não são ativados, e vice-versa.</td>
            </tr>
            <tr>
                <td>$a <strong><<</strong> $b</td>
                <td><strong>Deslocamento à esquerda</strong></td>
                <td>Deslocamento de bits para a esquerda.</td>
            </tr>
            <tr>
                <td>$a <strong>>></strong> $b</td>
                <td><strong>Deslocamento à direita</strong></td>
                <td>Deslocamento de bits para a direita.</td>
            </tr>
        </table>
    </body>
</html>


<?php
    //BITWISE AND
    // 12 = 00001100
    //  9 = 00001001
    // Resultado da comparação: 00001000
    var_dump(11 & 5); // Resultado binário: 00000001 = Decimal 1 (Int)

    // v = Decimal ASCII 118 = Binário: 1110110
    // k = Decimal ASCII 107 = Binário: 1101011
    // Resultado binário da comparação: 1100010 = Que é equivalente ao decimal 98

    var_dump( "v" & "k" ); // Resultado 'b'

    //BITWISE OR
    // 11 = 00001011
    //  5 = 00000101
    // Resultado da comparação: 00001111

    var_dump( 11 | 5 ); // Resultado binário: 00001111 = Decimal 15

    //BITWISE XOR
    // 11 = 00001011
    //  5 = 00000101
    // Resultado da comparação: 00001110

    var_dump( 11 ^ 5 ); // Resultado binário: 00001110 = Decimal 14

    //BITWISE NOT
    //SE O VALOR É POSITIVO, ELE INCREMENTA (++) E INVERTE O SINAL PARA NEGATIVO
    //SE O VALOR É NEGATIVO, ELE DECREMENTA (--) E INVERTE O SINAL PARA POSITIVO

    var_dump( ~11 ); // Int -12
    var_dump( ~-11 ); // Int 10
    var_dump( ~10 ); // Int -11

    //BITWISE DESLOCAMENTO

    $valor = 75; // Equivalente binário: 01001011

    var_dump( $valor >> 0 ); // 75 = 01001011
    var_dump( $valor >> 1 ); // 37 = 00100101
    var_dump( $valor >> 2 ); // 18 = 00010010
    var_dump( $valor >> 3 ); // 9  = 00001001
    var_dump( $valor >> 4 ); // 4  = 00000100
    var_dump( $valor >> 5 ); // 2  = 00000010
    $a = 75;
    $b = 1;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / 2 ) ); // "Equivalente"

    $a = 75;
    $b = 2;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / 2 / 2 )); // "Equivalente"

    $a = 75;
    $b = 3;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / 2 / 2 / 2 )); // "Equivalente"

    $a = 75;
    $b = 4;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / 2 / 2 / 2 / 2 )); // "Equivalente"

    $a = 75;
    $b = 5;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / 2 / 2 / 2 / 2 / 2 )); // "Equivalente"

    $a = 75;
    $b = 4;

    var_dump( $a >> $b ); // Operação binária
    var_dump(floor( $a / pow(2, $b) )); // "Equivalente"

    $a = 3; // 00000011
    $b = 2;

    var_dump( $a << $b ); // Resultado dos dois deslocamentos: 00001100 = 12

    echo '<br>PARA VER EXEMPLOS, <a href="exemplos-bitwise.php">CLIQUE AQUI</a>'
?>