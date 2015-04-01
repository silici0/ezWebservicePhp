<?php
/**
 * File for class EzClientesStructArrayOfMenu
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfMenu originally named ArrayOfMenu
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfMenu extends EzClientesWsdlClass
{
    /**
     * The Menu
     * @var EzClientesStructMenu
     */
    public $Menu;
    /**
     * Constructor method for ArrayOfMenu
     * @see parent::__construct()
     * @param EzClientesStructMenu $_menu
     * @return EzClientesStructArrayOfMenu
     */
    public function __construct($_menu = NULL)
    {
        parent::__construct(array('Menu'=>$_menu),false);
    }
    /**
     * Get Menu value
     * @return EzClientesStructMenu|null
     */
    public function getMenu()
    {
        return $this->Menu;
    }
    /**
     * Set Menu value
     * @param EzClientesStructMenu $_menu the Menu
     * @return EzClientesStructMenu
     */
    public function setMenu($_menu)
    {
        return ($this->Menu = $_menu);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructMenu
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructMenu
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructMenu
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructMenu
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructMenu
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string Menu
     */
    public function getAttributeName()
    {
        return 'Menu';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfMenu
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
