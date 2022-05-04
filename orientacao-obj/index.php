<?php

require 'ContaBancaria.php';

$conta = new ContaBancaria();

$conta->IniciarConta(0, 'John', 215, 9879);

echo '-----------';
echo '<br/>';

echo 'Número conta: '.$conta->numeroConta;
echo '</br>';
echo 'Cliente: '.$conta->cliente;
echo '</br>';
echo 'Código cliente: '.$conta->codigoCliente;
echo '</br>';

$conta->Depositar(12000);
sleep(1);
$conta->Depositar(50);
sleep(1);
$conta->Depositar(90);
sleep(1);
$conta->Depositar(120);

echo '</br>';
echo 'Saldo após depósito(s): '.$conta->ObterSaldo();

$conta->Sacar(800);
$conta->Sacar(50);
$conta->Sacar(856);
$conta->Sacar(100);

echo '</br>';
echo 'Saldo após saque(s): '.$conta->ObterSaldo();

print_r($conta->extrato)


?>