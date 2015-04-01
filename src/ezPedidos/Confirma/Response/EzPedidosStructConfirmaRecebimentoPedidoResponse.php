<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoResponse originally named ConfirmaRecebimentoPedidoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoResponse extends EzPedidosWsdlClass
{
    /**
     * The ConfirmaRecebimentoPedidoResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoPedidoResult;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoResult
     * @return EzPedidosStructConfirmaRecebimentoPedidoResponse
     */
    public function __construct($_confirmaRecebimentoPedidoResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoPedidoResult'=>$_confirmaRecebimentoPedidoResult),false);
    }
    /**
     * Get ConfirmaRecebimentoPedidoResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoPedidoResult()
    {
        return $this->ConfirmaRecebimentoPedidoResult;
    }
    /**
     * Set ConfirmaRecebimentoPedidoResult value
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoResult the ConfirmaRecebimentoPedidoResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoPedidoResult($_confirmaRecebimentoPedidoResult)
    {
        return ($this->ConfirmaRecebimentoPedidoResult = $_confirmaRecebimentoPedidoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoResponse
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
