<?php

class TesteReferencia{

  /**
   * Método responsável por alterar informações de um objeto
   * @method alterarObjetoSemReferencia
   * @param  stdClass                     $objeto (sem referência)
   */
  public static function alterarObjetoSemReferencia($objeto){
    $objeto->nome = 'Yago';
    $objeto->cidade = 'Araçatuba';
  }

  /**
   * Método responsável por alterar informações de um array
   * @method alterarArraySemReferencia
   * @param  array                     $array  (sem referência)
   */
  public static function alterarArraySemReferencia($array){
    $array['nome']   = 'Yago';
    $array['cidade'] = 'Araçatuba';
  }

  /**
   * Método responsável por alterar informações de um array
   * @method alterarArrayComReferencia
   * @param  array                     $array  (com referência)
   */
  public static function alterarArrayComReferencia(&$array){
    $array['nome']   = 'Yago';
    $array['cidade'] = 'Araçatuba';
  }

}

//OBJETO BASE
$objeto = new stdClass;
$objeto->nome   = 'William Costa';
$objeto->cidade = 'Birigui';
echo "<pre>"; print_r($objeto); echo "</pre>";

//INVOCAÇÃO DO MÉTODO DE ALTERAÇÃO
TesteReferencia::alterarObjetoSemReferencia($objeto);
echo '<pre>TesteReferencia::alterarObjetoSemReferencia($objeto)<br><br>'; print_r($objeto); echo "</pre>";

echo '<hr>';

//ARRAY BASE
$array = ['nome'   => 'William Costa',
          'cidade' => 'Birigui'];
echo "<pre>"; print_r($array); echo "</pre>";

//INVOCAÇÃO DO MÉTODO DE ALTERAÇÃO SEM REFERÊNCIA
TesteReferencia::alterarArraySemReferencia($array);
echo '<pre>TesteReferencia::alterarArraySemReferencia($array)<br><br>'; print_r($array); echo "</pre>";

//INVOCAÇÃO DO MÉTODO DE ALTERAÇÃO COM REFERÊNCIA
TesteReferencia::alterarArrayComReferencia($array);
echo '<pre>TesteReferencia::alterarArrayComReferencia(&$array)<br><br>'; print_r($array); echo "</pre>";
