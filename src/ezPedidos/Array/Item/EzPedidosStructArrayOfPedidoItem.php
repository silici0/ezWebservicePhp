<?php
/**
 * File for class EzPedidosStructArrayOfPedidoItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfPedidoItem originally named ArrayOfPedidoItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfPedidoItem extends EzPedidosWsdlClass
{
    /**
     * The PedidoItem
     * @var EzPedidosStructPedidoItem
     */
    public $PedidoItem;
    /**
     * Constructor method for ArrayOfPedidoItem
     * @see parent::__construct()
     * @param EzPedidosStructPedidoItem $_pedidoItem
     * @return EzPedidosStructArrayOfPedidoItem
     */
    public function __construct($_pedidoItem = NULL)
    {
        parent::__construct(array('PedidoItem'=>$_pedidoItem),false);
    }
    /**
     * Get PedidoItem value
     * @return EzPedidosStructPedidoItem|null
     */
    public function getPedidoItem()
    {
        return $this->PedidoItem;
    }
    /**
     * Set PedidoItem value
     * @param EzPedidosStructPedidoItem $_pedidoItem the PedidoItem
     * @return EzPedidosStructPedidoItem
     */
    public function setPedidoItem($_pedidoItem)
    {
        return ($this->PedidoItem = $_pedidoItem);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructPedidoItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructPedidoItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructPedidoItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructPedidoItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructPedidoItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string PedidoItem
     */
    public function getAttributeName()
    {
        return 'PedidoItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfPedidoItem
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
