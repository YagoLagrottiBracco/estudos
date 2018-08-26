<?php

  // Instancia um novo objeto
  $dom = new DOMDocument();

  // Carrega o arquivo HTML
  $dom->loadHTMLFile('treinaweb.html');

  // Seleciona todos os elementos h2
  $titulos = $dom->getElementsByTagName('h2');

  // Itera sobre os elementos encontrados
  foreach ($titulos as $titulo) {
    // Imprime na tela
    echo '<pre>'; print_r($titulo); echo '</pre>';
  }
  
  // Itera
  $i = 0;
  echo "<br><br>while<br>";
  
  while( $titulo = $titulos->item($i++) ) {
      printf('%s <br>', $titulo->nodeValue);
  }
  
  // Itera
  $length = $titulos->length;
  echo "<br><br>for<br>";
  
  for( $i=0; $i<$length; $i++ ) {
    printf('%s <br>', $titulos->item($i)->nodeValue);
  }
  
  // Itera
  $i = 0;
  echo "<br><br>while e for<br>";
  
  while($titulo = $titulos->item($i++)) {
    // Imprime o texto do título
    printf('<h2>%s</h2>', $titulo->nodeValue);

    // Itera sobre os atributos
    foreach($titulo->attributes as $atributo) {
      // Escreve os nomes e valores dos atributos encontrados
      printf('<b>Nome:</b> %s <br> <b>Valor:</b> %s <br>', $atributo->name, $atributo->value );
    }
  }
  
  echo "<br><br><br>";
  
  // Obtém o conteúdo do arquivo
  $html = file_get_contents('treinaweb.html');

  // Remove os espaços em branco e quebras entre as tags
  $html = preg_replace("/>\s+</", "><", $html);

  // Carrega o HTML tratado
  $dom->loadHTML($html);

  // Seleciona todos os elementos ul
  $divs = $dom->getElementsByTagName('ul');

  // Retorna quantos elementos-filhos forem encontrados
  echo $divs->item(0)->childNodes->length;
  
  echo "<br><br><br>";
  
  // Carrega o documento ignorando possíveis erros (alertas sobre a má definição do documento)
  @$dom->loadHTMLFile('http://www.globo.com');

  // Inicializa o array que armazenará os links
  $links = [];

  // Itera
  foreach($dom->getElementsByTagName('a') as $link) {
      $links[] = [
          'url' => $link->getAttribute('href'),
          'text' => $link->nodeValue
      ];
  }

  // Imprime todos os links coletados
  echo '<pre>'; print_r($links); echo '</pre>';