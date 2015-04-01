<?php
/**
 * File for class EzPedidosStructRemoverProdutoPacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverProdutoPacote originally named RemoverProdutoPacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverProdutoPacote extends EzPedidosWsdlClass
{
    /**
     * The PacoteProduto
     * @var EzPedidosStructArrayOfPacoteProduto
     */
    public $PacoteProduto;
    /**
     * Constructor method for RemoverProdutoPacote
     * @see parent::__construct()
     * @param EzPedidosStructArrayOfPacoteProduto $_pacoteProduto
     * @return EzPedidosStructRemoverProdutoPacote
     */
    public function __construct($_pacoteProduto = NULL)
    {
        parent::__construct(array('PacoteProduto'=>($_pacoteProduto instanceof EzPedidosStructArrayOfPacoteProduto)?$_pacoteProduto:new EzPedidosStructArrayOfPacoteProduto($_pacoteProduto)),false);
    }
    /**
     * Get PacoteProduto value
     * @return EzPedidosStructArrayOfPacoteProduto|null
     */
    public function getPacoteProduto()
    {
        return $this->PacoteProduto;
    }
    /**
     * Set PacoteProduto value
     * @param EzPedidosStructArrayOfPacoteProduto $_pacoteProduto the PacoteProduto
     * @return EzPedidosStructArrayOfPacoteProduto
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
     * @return EzPedidosStructRemoverProdutoPacote
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
