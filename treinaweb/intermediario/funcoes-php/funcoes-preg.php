<?php
//INICIO PREG_MATCH
$nome = 'jonny_PHP2014';
$regex = '/^[a-zA-Z0-9_]{5,20}$/';

if (preg_match($regex, $nome)) {
    echo "Nome de usuário válido.";
}

echo '<br><br><br><br><br><br><br><br><br><br><img src="../../../material-de-apoio/entendendo-expressao.png"></img><br><br><br><br><br><br><br><br><br><br>';

$nome = 'TreinaWeb Cursos';
$regex = '/(\w+)\s(\w+)/i';

if (preg_match($regex, $nome, $array)) {
    print_r($array . "<br>");
}

$data = '2014-06-07';
$regex = '/(\d{4})-(\d{2})-(\d{2})/';

if (preg_match($regex, $data, $resultado)) {
    echo "Dia: " . $resultado["3"] . "<br>";
    echo "Mês: " . $resultado["2"] . "<br>";
    echo "Ano: " . $resultado["1"] . "<br>";
}

$nome = 'TreinaWeb Cursos';
$regex = '/(?P<nome>\w+)\s(?P<sobrenome>\w+)/i';

if (preg_match($regex, $nome, $array)) {
    print_r($array . "<br>");
}

$telefone = '(99) 99999-9999';
$regex = '/^(\d{2}|\(\d{2}\))[ ]?\d{4,5}[ -]?\d{4}$/';

if(preg_match($regex, $telefone)) {
    echo "Passou.</br>";
}

$email = 'contato@treinaweb.com.br';
$regex = '/^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.][a-z0-9]{2,3})*[.][a-z]{2,3}$/i';

if(preg_match($regex, $email)) {
    echo "Passou.</br>";
}

$hora = '12:59';
$regex = '/^[[:digit:]]{2}:[[:digit:]]{2}$/';

if(preg_match($regex, $hora)) {
    echo "Passou.</br>";
}
//FIM PREG_MATCH

//COMEÇO PREG_REPLACE
$string = 'Os cachorros são engraçados!';
$expressao = '/cachorros/';
$substituir = "<b>gatos</b>";

// Imprime
echo preg_replace($expressao, $substituir, $string);

$string = '12:30';
$expressao = '/^([\d]{2}):([\d]{2})$/';
$substituir = "<span style='color:blue'>$1</span>:<span style='color:green'>$2</span>";

// Imprime
echo preg_replace($expressao, $substituir, $string);

$post = <<<'TEXT'
Olá, [b]pessoal[/b]! [br][br]

Para iniciar o serviço do [i]MongoDB[/i] no Windows acesse: [br][br]

[img]\images\win-services.png[/img] [br][br]

No próximo artigo veremos estes tópicos:
[br]

[ul]
[li]Criar uma base de dados[/li]
[li]Criar tabelas[/li]
[li]Consultar dados[/li]
[/ul]

Até a próxima!
TEXT;

// Expressões que casam os trechos que serão substituídos
$expressoes = [
    "/\[br]/",
    "/\[b](.*?)\[\/b]/",
    "/\[i](.*?)\[\/i]/",
    "/\[img](.*?)\[\/img]/",
    "/\[ul\]([\s\S]*?)\[\/ul\]/",
    "/\[li](.*?)\[\/li]/",
];

// Novo conteúdo
$substituir = [
    "<br />",
    "<b>$1</b>",
    "<i>$1</i>",
    "<img src=\"$1\" />",
    "<ul>$1</ul>",
    "<li>$1</li>"
];

// Imprime o HTML resultante
echo preg_replace($expressoes, $substituir, $post);

$string = 'dog dog dog dog dog dog';
$expressao = '/dog/';
$substituir = "cat";

// Imprime
echo preg_replace($expressao, $substituir, $string, 3);

$string = 'dog dog bird bird fish fish fish';
$expressao = '/dog/';
$substituir = "cat";

// Imprime
echo preg_replace($expressao, $substituir, $string, 4, $contador);

echo "<br>Número de substituições realizadas: {$contador}";

header('Content-Type: text/html; charset=utf-8');

$string = 'dog dog bird bird fish fish fish';
$expressao = '/dog/';
$substituir = "cat";

// Imprime
echo preg_replace($expressao, $substituir, $string, 4, $contador);

echo "<br>Número de substituições realizadas: {$contador}<br><br><br><br><br><br><br><br><br><br>";


//video aula 01
$nomes = [
  '_Ana', 'Pedro_', '_Carla', 'Fabio_'
];

$filtro = preg_grep('#_$#', $nomes);

$texto = <<<TEXT
nome: Carlos <br>
data-nasc: 11/12/1988 <br>
data-cad: 20/02/2015 <br>
TEXT;

preg_match_all('#(?P<chave>.+): (?P<valor>.+) #', $texto, $match, PREG_SET_ORDER);

var_dump($match);

$texto_novo = preg_replace_callback('#(\d{2})/(\d{2})/(\d+)#', function($match) {
  return "{$match[3]}-{$match[2]}-{$match[1]}";
}, $texto);

echo $texto_novo;
