<?php
/**
 * File for class EzClientesStructArrayOfint
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfint originally named ArrayOfint
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfint extends EzClientesWsdlClass
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
     * @return EzClientesStructArrayOfint
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
     * @see EzClientesWsdlClass::current()
     * @return int
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return int
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return int
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return int
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return int
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string int
     */
    public function getAttributeName()
    {
        return 'int';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfint
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
