<?php
/**
 * File for class EzPedidosStructArrayOfMenu
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfMenu originally named ArrayOfMenu
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfMenu extends EzPedidosWsdlClass
{
    /**
     * The Menu
     * @var EzPedidosStructMenu
     */
    public $Menu;
    /**
     * Constructor method for ArrayOfMenu
     * @see parent::__construct()
     * @param EzPedidosStructMenu $_menu
     * @return EzPedidosStructArrayOfMenu
     */
    public function __construct($_menu = NULL)
    {
        parent::__construct(array('Menu'=>$_menu),false);
    }
    /**
     * Get Menu value
     * @return EzPedidosStructMenu|null
     */
    public function getMenu()
    {
        return $this->Menu;
    }
    /**
     * Set Menu value
     * @param EzPedidosStructMenu $_menu the Menu
     * @return EzPedidosStructMenu
     */
    public function setMenu($_menu)
    {
        return ($this->Menu = $_menu);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructMenu
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructMenu
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructMenu
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructMenu
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructMenu
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string Menu
     */
    public function getAttributeName()
    {
        return 'Menu';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfMenu
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
