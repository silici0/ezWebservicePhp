<?php
/**
 * File for class EzPedidosStructArrayOfMenuRelation
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfMenuRelation originally named ArrayOfMenuRelation
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfMenuRelation extends EzPedidosWsdlClass
{
    /**
     * The MenuRelation
     * @var EzPedidosStructMenuRelation
     */
    public $MenuRelation;
    /**
     * Constructor method for ArrayOfMenuRelation
     * @see parent::__construct()
     * @param EzPedidosStructMenuRelation $_menuRelation
     * @return EzPedidosStructArrayOfMenuRelation
     */
    public function __construct($_menuRelation = NULL)
    {
        parent::__construct(array('MenuRelation'=>$_menuRelation),false);
    }
    /**
     * Get MenuRelation value
     * @return EzPedidosStructMenuRelation|null
     */
    public function getMenuRelation()
    {
        return $this->MenuRelation;
    }
    /**
     * Set MenuRelation value
     * @param EzPedidosStructMenuRelation $_menuRelation the MenuRelation
     * @return EzPedidosStructMenuRelation
     */
    public function setMenuRelation($_menuRelation)
    {
        return ($this->MenuRelation = $_menuRelation);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructMenuRelation
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructMenuRelation
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructMenuRelation
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructMenuRelation
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructMenuRelation
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string MenuRelation
     */
    public function getAttributeName()
    {
        return 'MenuRelation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfMenuRelation
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
