<?php
class Produto {
    
 private $NomeDoProduto;
 private $CodigoFuncionario;
 private $CodigoDoFornecedor;
 private $CodigoCategoria;
 private $QuantidadePorUnidade;
 private $PrecoUnitaria;
 private $UnidadeEmEstoque;
 private $UnidadesPedidas;
 private $NivelDeEstoque;
 private $Descontinuado;
 private $PaísdeDestino;

 private function __construct($NomeDoProduto, $CodigoFuncionario, $CodigoDoFornecedor, $CodigoCategoria, $QuantidadePorUnidade, $PrecoUnitaria, $UnidadeEmEstoque, $Descontinuado, $PaisdeDestino)  {
    $this->NomeDoProduto = $NomeDoProduto
    $this->CodigoFuncionario = $CodigoFuncionario
    $this->CiCodigoDoFornecedore = $CodigoDoFornecedor
    $this->CodigoCategoria = $CodigoCategoria
    $this->QuantidadePorUnidade = $QuantidadePorUnidade
    $this->PrecoUnitaria = $PrecoUnitaria 
    $this->UnidadeEmEstoque = $UnidadeEmEstoque
    $this->Descontinuado = $Descontinuado
    $this->PaísdeDestino = $PaísdeDestino