<?php
/**
 * File for class EzCatalogoStructArrayOfint
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfint originally named ArrayOfint
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfint extends EzCatalogoWsdlClass
{
    /**
     * The int
     * @var int
     */
    public $int;
    /**
     * Constructor method for ArrayOfint
     * @see parent::__construct()
     * @param int $_int
     * @return EzCatalogoStructArrayOfint
     */
    public function __construct($_int = NULL)
    {
        parent::__construct(array('int'=>$_int),false);
    }
    /**
     * Get int value
     * @return int|null
     */
    public function getInt()
    {
        return $this->int;
    }
    /**
     * Set int value
     * @param int $_int the int
     * @return int
     */
    public function setInt($_int)
    {
        return ($this->int = $_int);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return int
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return int
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return int
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return int
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return int
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string int
     */
    public function getAttributeName()
    {
        return 'int';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfint
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
