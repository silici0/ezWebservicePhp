<?php
/**
 * File for class EzClientesStructArrayOfPedidoItem
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfPedidoItem originally named ArrayOfPedidoItem
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfPedidoItem extends EzClientesWsdlClass
{
    /**
     * The PedidoItem
     * @var EzClientesStructPedidoItem
     */
    public $PedidoItem;
    /**
     * Constructor method for ArrayOfPedidoItem
     * @see parent::__construct()
     * @param EzClientesStructPedidoItem $_pedidoItem
     * @return EzClientesStructArrayOfPedidoItem
     */
    public function __construct($_pedidoItem = NULL)
    {
        parent::__construct(array('PedidoItem'=>$_pedidoItem),false);
    }
    /**
     * Get PedidoItem value
     * @return EzClientesStructPedidoItem|null
     */
    public function getPedidoItem()
    {
        return $this->PedidoItem;
    }
    /**
     * Set PedidoItem value
     * @param EzClientesStructPedidoItem $_pedidoItem the PedidoItem
     * @return EzClientesStructPedidoItem
     */
    public function setPedidoItem($_pedidoItem)
    {
        return ($this->PedidoItem = $_pedidoItem);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructPedidoItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructPedidoItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructPedidoItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructPedidoItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructPedidoItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string PedidoItem
     */
    public function getAttributeName()
    {
        return 'PedidoItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfPedidoItem
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
