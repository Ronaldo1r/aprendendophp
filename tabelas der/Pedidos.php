<?php
class Pedidos {

 private $NumeroPedido
 private $CodigoCliente;
 private $CodigoFuncionario;
 private $DataDoPedido;
 private $DataDeEntrega;
 private $DataDeEnvio;
 private $Frete;
 private $NomeDestinatario;
 private $EnderecoDestinatario$;
 private $CidadeDeDestino;
 private $CEPdeDestino;
 private $PaísdeDestino;

 private function __construct($NumeroPedido, $CodigoCiente, $CodigoFuncionario, $DataDoPedido, $DataDeEntrega, $DataDeEnvio, $Frete, $NomeDestinatario, $EnderecoDestinatario, $CidadeDeDestino, $CEPdeDestino, $PaisdeDestino) {
 
    $this->NumeroPedido = $NumeroPedido
    $this->CodigoCliente = $CodigoCliente
    $this->CodigoFuncionario = $CodigoFuncionario
    $this->DataDoPedido = $DataDoPedido
    $this->DataDeEntrega = $DataDeEntrega
    $this->DataDeEnvio = $DataDeEnvio
    $this->Frete = $Frete 
    $this->NomeDestinatario = $NomeDestinatario
    $this->EnderecoDestinatario = $EnderecoDestinatario
    $this->CidadeDeDestino = $CidadeDeDestino
    $this->CEPdeDestino = $CEPdeDestino
    $this->PaísdeDestino = $PaísdeDestino