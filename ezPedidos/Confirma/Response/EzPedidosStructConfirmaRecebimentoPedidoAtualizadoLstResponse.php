<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse originally named ConfirmaRecebimentoPedidoAtualizadoLstResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse extends EzPedidosWsdlClass
{
    /**
     * The ConfirmaRecebimentoPedidoAtualizadoLstResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoPedidoAtualizadoLstResult;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoAtualizadoLstResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoAtualizadoLstResult
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse
     */
    public function __construct($_confirmaRecebimentoPedidoAtualizadoLstResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoPedidoAtualizadoLstResult'=>$_confirmaRecebimentoPedidoAtualizadoLstResult),false);
    }
    /**
     * Get ConfirmaRecebimentoPedidoAtualizadoLstResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoPedidoAtualizadoLstResult()
    {
        return $this->ConfirmaRecebimentoPedidoAtualizadoLstResult;
    }
    /**
     * Set ConfirmaRecebimentoPedidoAtualizadoLstResult value
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoAtualizadoLstResult the ConfirmaRecebimentoPedidoAtualizadoLstResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoPedidoAtualizadoLstResult($_confirmaRecebimentoPedidoAtualizadoLstResult)
    {
        return ($this->ConfirmaRecebimentoPedidoAtualizadoLstResult = $_confirmaRecebimentoPedidoAtualizadoLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse
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
