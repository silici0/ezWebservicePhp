<?php
/**
 * File for class EzClientesStructArrayOfanyType
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfanyType originally named ArrayOfanyType
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfanyType extends EzClientesWsdlClass
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
     * @return EzClientesStructArrayOfanyType
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
     * @see EzClientesWsdlClass::current()
     * @return anyType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return anyType
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return anyType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return anyType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return anyType
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string anyType
     */
    public function getAttributeName()
    {
        return 'anyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfanyType
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
