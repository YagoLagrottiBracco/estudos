<?php
echo "<br>";
$erro = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado.'
];
echo "<br>";
$resultado = vsprintf("Tipo: %s. Código: %s. Descrição: %s. Percentual: 20%% <br>", $erro);
echo "<br>";
echo $resultado;
echo "<br>";
$valor1 =  4395;
$valor2 = 20.99;
$valor3 =  -4395;
$caractere = 67; // O decimal 67 da tabela ASCII equivale ao caractere C
echo "<br>";
printf('%b <br>', $valor1); // Representação binária
echo "<br>";
printf('%c <br>', $caractere); // Imprime o caractere C ( igual a função chr() )
echo "<br>";
printf('%e <br>', $valor1); // Notação científica
echo "<br>";
printf('%d <br>', $valor2); // Parte inteira do valor (o valor é truncado)
echo "<br>";
printf('%+d <br>', $valor1); // Valor inteiro positivo (força o valor a ter o sinal de +)
echo "<br>";
printf('%-d <br>', $valor3); // Valor inteiro negativo (força o valor a ter o sinal de -)
echo "<br>";
$valor = 20.8891;
printf('%f <br>', $valor);
echo "<br>";
$valor = 20.8891;
printf('%.1f <br>', $valor); // 20.9
echo "<br>";
$valor = 20.8891;
printf('%.2f <br>', $valor); // 20.89
echo "<br>";
$valor = 20.881;
printf('%.8f <br>', $valor); // 20.88100000
echo "<br>";
$valor1 = 47.1;
$valor2 = 24.1;
$resultado = $valor1 + $valor2;
echo "<br>";
// Sem formatação
echo $resultado . "<br>"; // Retorna: 71.2
echo "<br>";
// Com formatação
echo sprintf("%.2f", $resultado); // 71.20
echo "<br>";
$s = 'TreinaWeb';
echo "<br>";
printf("[%s]\n",      $s); // Impressão padrão da string
echo "<br>";
printf("[% 15s]\n",    $s); // alinhamento à direita com espaços.
echo "<br>";
printf("[% - 15s]\n",   $s); // alinhamento à esquerda com espaços.
echo "<br>";
printf( "%'*10s <br>", "Web" );   // Retorna: *******Web
echo "<br>";
printf( "%'*-10s", "Web" );       // Retorna: Web*******
echo "<br>";
printf( "%'@10s <br>", "Web" );   // Retorna: @@@@@@@Web
echo "<br>";
printf( "%'@-10s", "Web" );       // Retorna: Web@@@@@@@
echo "<br>";
$mes = 9;
$dia = 7;
$ano = 1985;
echo "<br>";
// Formata com zeros à esquerda
echo sprintf ("Data: %02d/%02d/%04d.", $mes, $dia, $ano);
echo "<br>";
$mes = 9;
$dia = 7;
$ano = 85;
echo "<br>";
// Imprime a data
echo sprintf ("Data: %02d/%02d/%04d.", $mes, $dia, $ano);
echo "<br>";
$string = 'Sou jovem e tenho %2$u anos. Sou bebê e tenho %1$u anos.';
printf($string, 2, 25);
echo "<br>";
$dados = '123 456 789';
$formato = '%d %d %d';

var_dump( sscanf($dados, $formato) );
echo "<br>";
$cpf = '346.271.751-08';
$formato = '%d.%d.%d-%d';

var_dump( sscanf($cpf, $formato) );
echo "<br>";
$serial = 'SN/4335002';
$formato = 'SN/%d';

var_dump( sscanf($serial, $formato) );
echo "<br>";
echo "<br>";
