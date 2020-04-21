<?php declare(strict_types = 1);

namespace Alura\Arrays;

class Calculadora
{
    public function calculaMedia(array $notas): ?string
    {
        if (self::verificaQuantidade($notas) === false) exit();
        
        $media = array_sum($notas) / sizeof($notas);

        return "<p>Sua nota média é de: {$media}.</p>";
    }

    public function exibeNotas(array $notas): ?string
    {
        if (self::verificaQuantidade($notas) === false) exit();

        $retorno = '';

        foreach ($notas as $chave => $valor) {
            $retorno .= "<p>A nota de {$chave} é: {$valor}.</p>";
        }

        return $retorno;
    }

    public function exibeMenorNota(array $notas): ?string
    {
        if (self::verificaQuantidade($notas) === false) exit();

        sort($notas);

        return "A menor nota é de: {$notas[0]}.";
    }

    public function exibeNomes(string $nomes, string $delimitador): ?string
    {
        if (empty($nomes)){
            echo "<p>Não foi possível executar o comando.</p>";
            exit();
        }

        $nomes = explode($delimitador, $nomes);
        
        sort($nomes);

        $retorno = '';

        foreach ($nomes as $nome) {
            echo "<p>O nome é: {$nome}</p>";
        }

        return implode($delimitador, $nomes);
    }

    private function verificaQuantidade(array $notas): bool
    {
        if (sizeof($notas) <= 0) {
            echo "<p>Não foi possível executar o calculo.</p>";
            return false;
        }

        return true;
    }

    public static function removerNota(int $elemento, array &$array): string
    {
        $posicao = array_search($elemento, $array, true);
        
        if ($posicao === false && !is_int($posicao)) return "<p>Não foi possível remover.</p>";
        
        unset($array[$posicao]);
        return "<p>Removido com sucesso.</p>";
    }

    public static function exibirDiferenca(array $notas, array $diferenca): ?array
    {
        return array_diff($notas, $diferenca);
    }

    public static function unirMateriasNotas(array $materias, array $notas): ?array
    {
        return array_combine($materias, $notas);
    }

    public static function verificaMateriaExiste(string $elemento, array $materias): string
    {
        if (array_key_exists($elemento, $materias)) {
            return "A nota da matéria de {$elemento} é: {$materias[$elemento]}.";
        }

        return "A matéria não existe.";
    }
}
