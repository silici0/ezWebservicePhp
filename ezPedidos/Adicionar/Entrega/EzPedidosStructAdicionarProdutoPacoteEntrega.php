<?php
/**
 * File for class EzPedidosStructAdicionarProdutoPacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAdicionarProdutoPacoteEntrega originally named AdicionarProdutoPacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAdicionarProdutoPacoteEntrega extends EzPedidosWsdlClass
{
    /**
     * The PacoteProduto
     * @var EzPedidosStructArrayOfPacoteEntregaItem
     */
    public $PacoteProduto;
    /**
     * Constructor method for AdicionarProdutoPacoteEntrega
     * @see parent::__construct()
     * @param EzPedidosStructArrayOfPacoteEntregaItem $_pacoteProduto
     * @return EzPedidosStructAdicionarProdutoPacoteEntrega
     */
    public function __construct($_pacoteProduto = NULL)
    {
        parent::__construct(array('PacoteProduto'=>($_pacoteProduto instanceof EzPedidosStructArrayOfPacoteEntregaItem)?$_pacoteProduto:new EzPedidosStructArrayOfPacoteEntregaItem($_pacoteProduto)),false);
    }
    /**
     * Get PacoteProduto value
     * @return EzPedidosStructArrayOfPacoteEntregaItem|null
     */
    public function getPacoteProduto()
    {
        return $this->PacoteProduto;
    }
    /**
     * Set PacoteProduto value
     * @param EzPedidosStructArrayOfPacoteEntregaItem $_pacoteProduto the PacoteProduto
     * @return EzPedidosStructArrayOfPacoteEntregaItem
     */
    public function setPacoteProduto($_pacoteProduto)
    {
        return ($this->PacoteProduto = $_pacoteProduto);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAdicionarProdutoPacoteEntrega
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
