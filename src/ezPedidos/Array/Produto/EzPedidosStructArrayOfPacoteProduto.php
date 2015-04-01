<?php
/**
 * File for class EzPedidosStructArrayOfPacoteProduto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfPacoteProduto originally named ArrayOfPacoteProduto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfPacoteProduto extends EzPedidosWsdlClass
{
    /**
     * The PacoteProduto
     * @var EzPedidosStructPacoteProduto
     */
    public $PacoteProduto;
    /**
     * Constructor method for ArrayOfPacoteProduto
     * @see parent::__construct()
     * @param EzPedidosStructPacoteProduto $_pacoteProduto
     * @return EzPedidosStructArrayOfPacoteProduto
     */
    public function __construct($_pacoteProduto = NULL)
    {
        parent::__construct(array('PacoteProduto'=>$_pacoteProduto),false);
    }
    /**
     * Get PacoteProduto value
     * @return EzPedidosStructPacoteProduto|null
     */
    public function getPacoteProduto()
    {
        return $this->PacoteProduto;
    }
    /**
     * Set PacoteProduto value
     * @param EzPedidosStructPacoteProduto $_pacoteProduto the PacoteProduto
     * @return EzPedidosStructPacoteProduto
     */
    public function setPacoteProduto($_pacoteProduto)
    {
        return ($this->PacoteProduto = $_pacoteProduto);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructPacoteProduto
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructPacoteProduto
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructPacoteProduto
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructPacoteProduto
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructPacoteProduto
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string PacoteProduto
     */
    public function getAttributeName()
    {
        return 'PacoteProduto';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfPacoteProduto
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
