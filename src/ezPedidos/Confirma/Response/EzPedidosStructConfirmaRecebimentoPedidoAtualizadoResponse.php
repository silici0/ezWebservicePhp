<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse originally named ConfirmaRecebimentoPedidoAtualizadoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse extends EzPedidosWsdlClass
{
    /**
     * The ConfirmaRecebimentoPedidoAtualizadoResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoPedidoAtualizadoResult;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoAtualizadoResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoAtualizadoResult
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse
     */
    public function __construct($_confirmaRecebimentoPedidoAtualizadoResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoPedidoAtualizadoResult'=>$_confirmaRecebimentoPedidoAtualizadoResult),false);
    }
    /**
     * Get ConfirmaRecebimentoPedidoAtualizadoResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoPedidoAtualizadoResult()
    {
        return $this->ConfirmaRecebimentoPedidoAtualizadoResult;
    }
    /**
     * Set ConfirmaRecebimentoPedidoAtualizadoResult value
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoAtualizadoResult the ConfirmaRecebimentoPedidoAtualizadoResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoPedidoAtualizadoResult($_confirmaRecebimentoPedidoAtualizadoResult)
    {
        return ($this->ConfirmaRecebimentoPedidoAtualizadoResult = $_confirmaRecebimentoPedidoAtualizadoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse
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
