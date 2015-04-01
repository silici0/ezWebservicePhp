<?php
/**
 * File for class EzClientesStructArrayOfMenuRelation
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfMenuRelation originally named ArrayOfMenuRelation
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfMenuRelation extends EzClientesWsdlClass
{
    /**
     * The MenuRelation
     * @var EzClientesStructMenuRelation
     */
    public $MenuRelation;
    /**
     * Constructor method for ArrayOfMenuRelation
     * @see parent::__construct()
     * @param EzClientesStructMenuRelation $_menuRelation
     * @return EzClientesStructArrayOfMenuRelation
     */
    public function __construct($_menuRelation = NULL)
    {
        parent::__construct(array('MenuRelation'=>$_menuRelation),false);
    }
    /**
     * Get MenuRelation value
     * @return EzClientesStructMenuRelation|null
     */
    public function getMenuRelation()
    {
        return $this->MenuRelation;
    }
    /**
     * Set MenuRelation value
     * @param EzClientesStructMenuRelation $_menuRelation the MenuRelation
     * @return EzClientesStructMenuRelation
     */
    public function setMenuRelation($_menuRelation)
    {
        return ($this->MenuRelation = $_menuRelation);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructMenuRelation
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructMenuRelation
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructMenuRelation
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructMenuRelation
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructMenuRelation
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string MenuRelation
     */
    public function getAttributeName()
    {
        return 'MenuRelation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfMenuRelation
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
