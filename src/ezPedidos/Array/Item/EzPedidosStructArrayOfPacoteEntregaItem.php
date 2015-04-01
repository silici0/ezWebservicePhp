<?php
/**
 * File for class EzPedidosStructArrayOfPacoteEntregaItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfPacoteEntregaItem originally named ArrayOfPacoteEntregaItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfPacoteEntregaItem extends EzPedidosWsdlClass
{
    /**
     * The PacoteEntregaItem
     * @var EzPedidosStructPacoteEntregaItem
     */
    public $PacoteEntregaItem;
    /**
     * Constructor method for ArrayOfPacoteEntregaItem
     * @see parent::__construct()
     * @param EzPedidosStructPacoteEntregaItem $_pacoteEntregaItem
     * @return EzPedidosStructArrayOfPacoteEntregaItem
     */
    public function __construct($_pacoteEntregaItem = NULL)
    {
        parent::__construct(array('PacoteEntregaItem'=>$_pacoteEntregaItem),false);
    }
    /**
     * Get PacoteEntregaItem value
     * @return EzPedidosStructPacoteEntregaItem|null
     */
    public function getPacoteEntregaItem()
    {
        return $this->PacoteEntregaItem;
    }
    /**
     * Set PacoteEntregaItem value
     * @param EzPedidosStructPacoteEntregaItem $_pacoteEntregaItem the PacoteEntregaItem
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function setPacoteEntregaItem($_pacoteEntregaItem)
    {
        return ($this->PacoteEntregaItem = $_pacoteEntregaItem);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string PacoteEntregaItem
     */
    public function getAttributeName()
    {
        return 'PacoteEntregaItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfPacoteEntregaItem
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
