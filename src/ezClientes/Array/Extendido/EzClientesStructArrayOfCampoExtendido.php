<?php
/**
 * File for class EzClientesStructArrayOfCampoExtendido
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfCampoExtendido originally named ArrayOfCampoExtendido
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfCampoExtendido extends EzClientesWsdlClass
{
    /**
     * The CampoExtendido
     * @var EzClientesStructCampoExtendido
     */
    public $CampoExtendido;
    /**
     * Constructor method for ArrayOfCampoExtendido
     * @see parent::__construct()
     * @param EzClientesStructCampoExtendido $_campoExtendido
     * @return EzClientesStructArrayOfCampoExtendido
     */
    public function __construct($_campoExtendido = NULL)
    {
        parent::__construct(array('CampoExtendido'=>$_campoExtendido),false);
    }
    /**
     * Get CampoExtendido value
     * @return EzClientesStructCampoExtendido|null
     */
    public function getCampoExtendido()
    {
        return $this->CampoExtendido;
    }
    /**
     * Set CampoExtendido value
     * @param EzClientesStructCampoExtendido $_campoExtendido the CampoExtendido
     * @return EzClientesStructCampoExtendido
     */
    public function setCampoExtendido($_campoExtendido)
    {
        return ($this->CampoExtendido = $_campoExtendido);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructCampoExtendido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructCampoExtendido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructCampoExtendido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructCampoExtendido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructCampoExtendido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string CampoExtendido
     */
    public function getAttributeName()
    {
        return 'CampoExtendido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfCampoExtendido
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
