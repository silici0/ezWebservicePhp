<?php
/**
 * File for class EzCatalogoStructArrayOfAssinante
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfAssinante originally named ArrayOfAssinante
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfAssinante extends EzCatalogoWsdlClass
{
    /**
     * The Assinante
     * @var EzCatalogoStructAssinante
     */
    public $Assinante;
    /**
     * Constructor method for ArrayOfAssinante
     * @see parent::__construct()
     * @param EzCatalogoStructAssinante $_assinante
     * @return EzCatalogoStructArrayOfAssinante
     */
    public function __construct($_assinante = NULL)
    {
        parent::__construct(array('Assinante'=>$_assinante),false);
    }
    /**
     * Get Assinante value
     * @return EzCatalogoStructAssinante|null
     */
    public function getAssinante()
    {
        return $this->Assinante;
    }
    /**
     * Set Assinante value
     * @param EzCatalogoStructAssinante $_assinante the Assinante
     * @return EzCatalogoStructAssinante
     */
    public function setAssinante($_assinante)
    {
        return ($this->Assinante = $_assinante);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructAssinante
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructAssinante
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructAssinante
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructAssinante
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructAssinante
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Assinante
     */
    public function getAttributeName()
    {
        return 'Assinante';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfAssinante
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
