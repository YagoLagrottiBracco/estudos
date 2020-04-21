<?php

use exception\SaldoInsuficienteException;

class ContaCorrente
{
	private $titular;
	public  $agencia;
	private $numero;
	private $saldo;
	public static $totalDeContas;
	public static $taxaOperacao;
	public $totalSaquesNaoPermitidos;
	public static $operacaoNaoRealizada;

	public function __construct($titular,$agencia,$numero,$saldo)
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->numero = $numero;
		$this->saldo = $saldo;
	
		self::$totalDeContas++;

		try {
			if (self::$totalDeContas < 1)
				throw new Exception("Não é possível realizar divisão por zero.");
			
			self::$taxaOperacao = (30 / self::$totalDeContas);
		} catch (Exception $erro) {
			echo $erro->getMessage();
			exit;
		}
	}

	public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo,$valor)
	{
		$this->$atributo = $valor;
	}

	public function transferir($valor, ContaCorrente $contaCorrente)
	{
		Validacao::verificaNumerico($valor);
		Validacao::verificaValorNegativo($valor);

		$this->sacar($valor);
		$contaCorrente->depositar($valor);

		return $this;
	}

	public function getTitular()
	{
		return $this->titular;
	}

	public function sacar($valor)
	{
		Validacao::verificaNumerico($valor);
		Validacao::verificaValorNegativo($valor);

		if ($valor > $this->saldo) throw new SaldoInsuficienteException("Saldo insuficiente", $valor, $this->saldo);

		$this->saldo = $this->saldo - $valor;
		return $this;
	}

	public function depositar($valor)
	{
		try {
			$arquivo = new LeitorArquivo('logTransferencia.txt');

			$arquivo->abrirArquivo();
			$arquivo->escreverArquivo();
			
			Validacao::verificaNumerico($valor);

			$this->saldo = $this->saldo + $valor;

			return $this;
		} catch (Exception $erro) {
			self::$operacaoNaoRealizada++;
			throw new exception\OperacaoNaoRealizadaException("Operação não realizada.", 44, $erro);
		} finally {
			$arquivo->fecharArquivo();
		}
	}

	public function setNumero($numero)
	{
		return $this->numero = $numero;
	}

	private function formataSaldo()
	{
		return "R$ ".number_format($this->saldo,2,",",".");
	}

	public function getSaldo()
	{
		return $this->formataSaldo();
	}

	public function __toString()
	{
		return $this->saldo;
	}
}
