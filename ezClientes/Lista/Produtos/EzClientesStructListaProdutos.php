<?php
/**
 * File for class EzClientesStructListaProdutos
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructListaProdutos originally named ListaProdutos
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructListaProdutos extends EzClientesWsdlClass
{
    /**
     * The Alias
     * @var string
     */
    public $Alias;
    /**
     * The Produtos
     * @var EzClientesStructArrayOfListaProdutosLista
     */
    public $Produtos;
    /**
     * The ProdutosListaID
     * @var int
     */
    public $ProdutosListaID;
    /**
     * The Titulo
     * @var string
     */
    public $Titulo;
    /**
     * Constructor method for ListaProdutos
     * @see parent::__construct()
     * @param string $_alias
     * @param EzClientesStructArrayOfListaProdutosLista $_produtos
     * @param int $_produtosListaID
     * @param string $_titulo
     * @return EzClientesStructListaProdutos
     */
    public function __construct($_alias = NULL,$_produtos = NULL,$_produtosListaID = NULL,$_titulo = NULL)
    {
        parent::__construct(array('Alias'=>$_alias,'Produtos'=>($_produtos instanceof EzClientesStructArrayOfListaProdutosLista)?$_produtos:new EzClientesStructArrayOfListaProdutosLista($_produtos),'ProdutosListaID'=>$_produtosListaID,'Titulo'=>$_titulo),false);
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $_alias the Alias
     * @return string
     */
    public function setAlias($_alias)
    {
        return ($this->Alias = $_alias);
    }
    /**
     * Get Produtos value
     * @return EzClientesStructArrayOfListaProdutosLista|null
     */
    public function getProdutos()
    {
        return $this->Produtos;
    }
    /**
     * Set Produtos value
     * @param EzClientesStructArrayOfListaProdutosLista $_produtos the Produtos
     * @return EzClientesStructArrayOfListaProdutosLista
     */
    public function setProdutos($_produtos)
    {
        return ($this->Produtos = $_produtos);
    }
    /**
     * Get ProdutosListaID value
     * @return int|null
     */
    public function getProdutosListaID()
    {
        return $this->ProdutosListaID;
    }
    /**
     * Set ProdutosListaID value
     * @param int $_produtosListaID the ProdutosListaID
     * @return int
     */
    public function setProdutosListaID($_produtosListaID)
    {
        return ($this->ProdutosListaID = $_produtosListaID);
    }
    /**
     * Get Titulo value
     * @return string|null
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }
    /**
     * Set Titulo value
     * @param string $_titulo the Titulo
     * @return string
     */
    public function setTitulo($_titulo)
    {
        return ($this->Titulo = $_titulo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructListaProdutos
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
