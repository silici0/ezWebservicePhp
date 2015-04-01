<?php
/**
 * File for class EzCatalogoStructArrayOfMenu
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfMenu originally named ArrayOfMenu
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfMenu extends EzCatalogoWsdlClass
{
    /**
     * The Menu
     * @var EzCatalogoStructMenu
     */
    public $Menu;
    /**
     * Constructor method for ArrayOfMenu
     * @see parent::__construct()
     * @param EzCatalogoStructMenu $_menu
     * @return EzCatalogoStructArrayOfMenu
     */
    public function __construct($_menu = NULL)
    {
        parent::__construct(array('Menu'=>$_menu),false);
    }
    /**
     * Get Menu value
     * @return EzCatalogoStructMenu|null
     */
    public function getMenu()
    {
        return $this->Menu;
    }
    /**
     * Set Menu value
     * @param EzCatalogoStructMenu $_menu the Menu
     * @return EzCatalogoStructMenu
     */
    public function setMenu($_menu)
    {
        return ($this->Menu = $_menu);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructMenu
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructMenu
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructMenu
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructMenu
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructMenu
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Menu
     */
    public function getAttributeName()
    {
        return 'Menu';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfMenu
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
