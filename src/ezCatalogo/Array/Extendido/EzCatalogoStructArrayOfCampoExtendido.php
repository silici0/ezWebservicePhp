<?php
/**
 * File for class EzCatalogoStructArrayOfCampoExtendido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfCampoExtendido originally named ArrayOfCampoExtendido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfCampoExtendido extends EzCatalogoWsdlClass
{
    /**
     * The CampoExtendido
     * @var EzCatalogoStructCampoExtendido
     */
    public $CampoExtendido;
    /**
     * Constructor method for ArrayOfCampoExtendido
     * @see parent::__construct()
     * @param EzCatalogoStructCampoExtendido $_campoExtendido
     * @return EzCatalogoStructArrayOfCampoExtendido
     */
    public function __construct($_campoExtendido = NULL)
    {
        parent::__construct(array('CampoExtendido'=>$_campoExtendido),false);
    }
    /**
     * Get CampoExtendido value
     * @return EzCatalogoStructCampoExtendido|null
     */
    public function getCampoExtendido()
    {
        return $this->CampoExtendido;
    }
    /**
     * Set CampoExtendido value
     * @param EzCatalogoStructCampoExtendido $_campoExtendido the CampoExtendido
     * @return EzCatalogoStructCampoExtendido
     */
    public function setCampoExtendido($_campoExtendido)
    {
        return ($this->CampoExtendido = $_campoExtendido);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructCampoExtendido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructCampoExtendido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructCampoExtendido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructCampoExtendido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructCampoExtendido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string CampoExtendido
     */
    public function getAttributeName()
    {
        return 'CampoExtendido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfCampoExtendido
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
