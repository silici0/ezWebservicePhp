<?php
/**
 * File for class EzPedidosStructArrayOfCampoExtendido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfCampoExtendido originally named ArrayOfCampoExtendido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfCampoExtendido extends EzPedidosWsdlClass
{
    /**
     * The CampoExtendido
     * @var EzPedidosStructCampoExtendido
     */
    public $CampoExtendido;
    /**
     * Constructor method for ArrayOfCampoExtendido
     * @see parent::__construct()
     * @param EzPedidosStructCampoExtendido $_campoExtendido
     * @return EzPedidosStructArrayOfCampoExtendido
     */
    public function __construct($_campoExtendido = NULL)
    {
        parent::__construct(array('CampoExtendido'=>$_campoExtendido),false);
    }
    /**
     * Get CampoExtendido value
     * @return EzPedidosStructCampoExtendido|null
     */
    public function getCampoExtendido()
    {
        return $this->CampoExtendido;
    }
    /**
     * Set CampoExtendido value
     * @param EzPedidosStructCampoExtendido $_campoExtendido the CampoExtendido
     * @return EzPedidosStructCampoExtendido
     */
    public function setCampoExtendido($_campoExtendido)
    {
        return ($this->CampoExtendido = $_campoExtendido);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructCampoExtendido
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructCampoExtendido
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructCampoExtendido
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructCampoExtendido
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructCampoExtendido
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string CampoExtendido
     */
    public function getAttributeName()
    {
        return 'CampoExtendido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfCampoExtendido
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
