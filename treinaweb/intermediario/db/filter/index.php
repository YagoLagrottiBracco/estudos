<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $texto = $_POST['texto'];
        
        // $float = ['decimal' => ','];
        
        // if (filter_var($texto, FILTER_VALIDATE_FLOAT, ['iptions' => $float])) {
        //   echo "Float válido";
        // }
        
        // if (filter_var($texto, FILTER_VALIDATE_EMAIL)) {
        //   echo "Email válido";
        // }
        
        // if (filter_var($texto, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        //   echo "Numero inteiro inteiro -150 a 300.";
        // }
        
        $int = [
          'min_range' => -150,
          'max_range' => 300
        ];
        
        if (filter_var($texto, FILTER_VALIDATE_INT, ['options' => $int])) {
          echo "Numero inteiro";
        }
      }
     ?>
     <br>
     <form method="POST">
       texto: <input type="text" name="texto" value="<?=$texto?>">
       <button>Enviar</button>
     </form>
  </body>
</html>