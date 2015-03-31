<?php
/**
 * File for class EzPedidosStructArrayOfstring
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfstring originally named ArrayOfstring
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfstring extends EzPedidosWsdlClass
{
    /**
     * The string
     * @var string
     */
    public $string;
    /**
     * Constructor method for ArrayOfstring
     * @see parent::__construct()
     * @param string $_string
     * @return EzPedidosStructArrayOfstring
     */
    public function __construct($_string = NULL)
    {
        parent::__construct(array('string'=>$_string),false);
    }
    /**
     * Get string value
     * @return string|null
     */
    public function getString()
    {
        return $this->string;
    }
    /**
     * Set string value
     * @param string $_string the string
     * @return string
     */
    public function setString($_string)
    {
        return ($this->string = $_string);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return string
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return string
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string string
     */
    public function getAttributeName()
    {
        return 'string';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfstring
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
