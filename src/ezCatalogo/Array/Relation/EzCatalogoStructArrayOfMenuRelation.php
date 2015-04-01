<?php
/**
 * File for class EzCatalogoStructArrayOfMenuRelation
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfMenuRelation originally named ArrayOfMenuRelation
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfMenuRelation extends EzCatalogoWsdlClass
{
    /**
     * The MenuRelation
     * @var EzCatalogoStructMenuRelation
     */
    public $MenuRelation;
    /**
     * Constructor method for ArrayOfMenuRelation
     * @see parent::__construct()
     * @param EzCatalogoStructMenuRelation $_menuRelation
     * @return EzCatalogoStructArrayOfMenuRelation
     */
    public function __construct($_menuRelation = NULL)
    {
        parent::__construct(array('MenuRelation'=>$_menuRelation),false);
    }
    /**
     * Get MenuRelation value
     * @return EzCatalogoStructMenuRelation|null
     */
    public function getMenuRelation()
    {
        return $this->MenuRelation;
    }
    /**
     * Set MenuRelation value
     * @param EzCatalogoStructMenuRelation $_menuRelation the MenuRelation
     * @return EzCatalogoStructMenuRelation
     */
    public function setMenuRelation($_menuRelation)
    {
        return ($this->MenuRelation = $_menuRelation);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructMenuRelation
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructMenuRelation
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructMenuRelation
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructMenuRelation
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructMenuRelation
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string MenuRelation
     */
    public function getAttributeName()
    {
        return 'MenuRelation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfMenuRelation
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
