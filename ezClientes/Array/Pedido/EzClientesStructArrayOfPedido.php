<?php
/**
 * File for class EzClientesStructArrayOfPedido
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfPedido originally named ArrayOfPedido
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfPedido extends EzClientesWsdlClass
{
    /**
     * The Pedido
     * @var EzClientesStructPedido
     */
    public $Pedido;
    /**
     * Constructor method for ArrayOfPedido
     * @see parent::__construct()
     * @param EzClientesStructPedido $_pedido
     * @return EzClientesStructArrayOfPedido
     */
    public function __construct($_pedido = NULL)
    {
        parent::__construct(array('Pedido'=>$_pedido),false);
    }
    /**
     * Get Pedido value
     * @return EzClientesStructPedido|null
     */
    public function getPedido()
    {
        return $this->Pedido;
    }
    /**
     * Set Pedido value
     * @param EzClientesStructPedido $_pedido the Pedido
     * @return EzClientesStructPedido
     */
    public function setPedido($_pedido)
    {
        return ($this->Pedido = $_pedido);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructPedido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructPedido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructPedido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructPedido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructPedido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string Pedido
     */
    public function getAttributeName()
    {
        return 'Pedido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfPedido
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
