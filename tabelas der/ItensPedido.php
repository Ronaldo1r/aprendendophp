<?php
class ItensPedidos {

 private $NumeroDoPedido;
 private $CodigoDoProduto;
 private $PrecoUnitario;
 private $Quantidade;
 private $Desconto;
 private $Frete;

 private function __construct($NumeroDoPedido, $CodigoDoProduto, $PrecoUnitario, $Quantidade, $Desconto, $Frete)  {
    $this->NumeroDoPedido = $NumeroDoPedido
    $this->CodigoDoProduto = $CodigoDoProduto
    $this->PrecoUnitario = $PrecoUnitario
    $this->Quantidade = $Quantidade
    $this->Desconto = $Desconto
    $this->Frete = $Frete
    