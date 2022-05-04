<?php
class ContaBancaria
{
    public $saldo;
    public $cliente;
    public $codigoCliente;
    public $numeroConta;
    public $extrato;

    public function IniciarConta($saldo, $cliente, $codigoCliente, $numeroConta)
    {
        $this->saldo = $saldo;
        $this->cliente = $cliente;
        $this->codigoCliente = $codigoCliente;
        $this->numeroConta = $numeroConta;
        $this->extrato = [];
    }

    public function Depositar($valor)
    {
        $this->saldo += $valor;
        $this->GerarExtrato($valor, 'depósito');
    }

    public function Sacar($valor)
    {
        $this->saldo -= $valor;
        $this->GerarExtrato($valor, 'saque');
    }

    public function ObterSaldo()
    {
        return $this->saldo;
    }

    private function GerarExtrato($valor, $movimentacao)
    {
        $this->extrato [] = $movimentacao.' de '.$valor.' em '.date('H:i:s');
    }

}