<?php
/**
 * File for class EzClientesStructArrayOfAssinante
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfAssinante originally named ArrayOfAssinante
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfAssinante extends EzClientesWsdlClass
{
    /**
     * The Assinante
     * @var EzClientesStructAssinante
     */
    public $Assinante;
    /**
     * Constructor method for ArrayOfAssinante
     * @see parent::__construct()
     * @param EzClientesStructAssinante $_assinante
     * @return EzClientesStructArrayOfAssinante
     */
    public function __construct($_assinante = NULL)
    {
        parent::__construct(array('Assinante'=>$_assinante),false);
    }
    /**
     * Get Assinante value
     * @return EzClientesStructAssinante|null
     */
    public function getAssinante()
    {
        return $this->Assinante;
    }
    /**
     * Set Assinante value
     * @param EzClientesStructAssinante $_assinante the Assinante
     * @return EzClientesStructAssinante
     */
    public function setAssinante($_assinante)
    {
        return ($this->Assinante = $_assinante);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructAssinante
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructAssinante
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructAssinante
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructAssinante
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructAssinante
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string Assinante
     */
    public function getAttributeName()
    {
        return 'Assinante';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfAssinante
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
