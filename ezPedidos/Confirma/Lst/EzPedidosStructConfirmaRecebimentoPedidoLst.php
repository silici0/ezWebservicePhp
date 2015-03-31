<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoLst
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoLst originally named ConfirmaRecebimentoPedidoLst
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoLst extends EzPedidosWsdlClass
{
    /**
     * The arrProtocolo
     * @var EzPedidosStructArrayOfstring
     */
    public $arrProtocolo;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoLst
     * @see parent::__construct()
     * @param EzPedidosStructArrayOfstring $_arrProtocolo
     * @return EzPedidosStructConfirmaRecebimentoPedidoLst
     */
    public function __construct($_arrProtocolo = NULL)
    {
        parent::__construct(array('arrProtocolo'=>($_arrProtocolo instanceof EzPedidosStructArrayOfstring)?$_arrProtocolo:new EzPedidosStructArrayOfstring($_arrProtocolo)),false);
    }
    /**
     * Get arrProtocolo value
     * @return EzPedidosStructArrayOfstring|null
     */
    public function getArrProtocolo()
    {
        return $this->arrProtocolo;
    }
    /**
     * Set arrProtocolo value
     * @param EzPedidosStructArrayOfstring $_arrProtocolo the arrProtocolo
     * @return EzPedidosStructArrayOfstring
     */
    public function setArrProtocolo($_arrProtocolo)
    {
        return ($this->arrProtocolo = $_arrProtocolo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoLst
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
