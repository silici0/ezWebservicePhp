<?php
/**
 * File for class EzCatalogoStructArrayOfanyType
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfanyType originally named ArrayOfanyType
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfanyType extends EzCatalogoWsdlClass
{
    /**
     * The anyType
     * @var anyType
     */
    public $anyType;
    /**
     * Constructor method for ArrayOfanyType
     * @see parent::__construct()
     * @param anyType $_anyType
     * @return EzCatalogoStructArrayOfanyType
     */
    public function __construct($_anyType = NULL)
    {
        parent::__construct(array('anyType'=>$_anyType),false);
    }
    /**
     * Get anyType value
     * @return anyType|null
     */
    public function getAnyType()
    {
        return $this->anyType;
    }
    /**
     * Set anyType value
     * @param anyType $_anyType the anyType
     * @return anyType
     */
    public function setAnyType($_anyType)
    {
        return ($this->anyType = $_anyType);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return anyType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return anyType
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return anyType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return anyType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return anyType
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string anyType
     */
    public function getAttributeName()
    {
        return 'anyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfanyType
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
