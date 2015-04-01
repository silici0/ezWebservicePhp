<?php
/**
 * File for class EzPedidosStructArrayOfAssinante
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfAssinante originally named ArrayOfAssinante
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfAssinante extends EzPedidosWsdlClass
{
    /**
     * The Assinante
     * @var EzPedidosStructAssinante
     */
    public $Assinante;
    /**
     * Constructor method for ArrayOfAssinante
     * @see parent::__construct()
     * @param EzPedidosStructAssinante $_assinante
     * @return EzPedidosStructArrayOfAssinante
     */
    public function __construct($_assinante = NULL)
    {
        parent::__construct(array('Assinante'=>$_assinante),false);
    }
    /**
     * Get Assinante value
     * @return EzPedidosStructAssinante|null
     */
    public function getAssinante()
    {
        return $this->Assinante;
    }
    /**
     * Set Assinante value
     * @param EzPedidosStructAssinante $_assinante the Assinante
     * @return EzPedidosStructAssinante
     */
    public function setAssinante($_assinante)
    {
        return ($this->Assinante = $_assinante);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructAssinante
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructAssinante
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructAssinante
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructAssinante
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructAssinante
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string Assinante
     */
    public function getAttributeName()
    {
        return 'Assinante';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfAssinante
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
