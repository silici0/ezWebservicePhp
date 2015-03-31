<?php
/**
 * File for class EzPedidosStructArrayOfPedido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfPedido originally named ArrayOfPedido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfPedido extends EzPedidosWsdlClass
{
    /**
     * The Pedido
     * @var EzPedidosStructPedido
     */
    public $Pedido;
    /**
     * Constructor method for ArrayOfPedido
     * @see parent::__construct()
     * @param EzPedidosStructPedido $_pedido
     * @return EzPedidosStructArrayOfPedido
     */
    public function __construct($_pedido = NULL)
    {
        parent::__construct(array('Pedido'=>$_pedido),false);
    }
    /**
     * Get Pedido value
     * @return EzPedidosStructPedido|null
     */
    public function getPedido()
    {
        return $this->Pedido;
    }
    /**
     * Set Pedido value
     * @param EzPedidosStructPedido $_pedido the Pedido
     * @return EzPedidosStructPedido
     */
    public function setPedido($_pedido)
    {
        return ($this->Pedido = $_pedido);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructPedido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructPedido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructPedido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructPedido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructPedido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string Pedido
     */
    public function getAttributeName()
    {
        return 'Pedido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfPedido
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
