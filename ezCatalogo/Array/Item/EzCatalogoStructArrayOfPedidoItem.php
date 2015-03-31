<?php
/**
 * File for class EzCatalogoStructArrayOfPedidoItem
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfPedidoItem originally named ArrayOfPedidoItem
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfPedidoItem extends EzCatalogoWsdlClass
{
    /**
     * The PedidoItem
     * @var EzCatalogoStructPedidoItem
     */
    public $PedidoItem;
    /**
     * Constructor method for ArrayOfPedidoItem
     * @see parent::__construct()
     * @param EzCatalogoStructPedidoItem $_pedidoItem
     * @return EzCatalogoStructArrayOfPedidoItem
     */
    public function __construct($_pedidoItem = NULL)
    {
        parent::__construct(array('PedidoItem'=>$_pedidoItem),false);
    }
    /**
     * Get PedidoItem value
     * @return EzCatalogoStructPedidoItem|null
     */
    public function getPedidoItem()
    {
        return $this->PedidoItem;
    }
    /**
     * Set PedidoItem value
     * @param EzCatalogoStructPedidoItem $_pedidoItem the PedidoItem
     * @return EzCatalogoStructPedidoItem
     */
    public function setPedidoItem($_pedidoItem)
    {
        return ($this->PedidoItem = $_pedidoItem);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructPedidoItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructPedidoItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructPedidoItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructPedidoItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructPedidoItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string PedidoItem
     */
    public function getAttributeName()
    {
        return 'PedidoItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfPedidoItem
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
