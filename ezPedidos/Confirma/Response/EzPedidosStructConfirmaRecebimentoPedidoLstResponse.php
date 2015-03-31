<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoLstResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoLstResponse originally named ConfirmaRecebimentoPedidoLstResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoLstResponse extends EzPedidosWsdlClass
{
    /**
     * The ConfirmaRecebimentoPedidoLstResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoPedidoLstResult;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoLstResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoLstResult
     * @return EzPedidosStructConfirmaRecebimentoPedidoLstResponse
     */
    public function __construct($_confirmaRecebimentoPedidoLstResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoPedidoLstResult'=>$_confirmaRecebimentoPedidoLstResult),false);
    }
    /**
     * Get ConfirmaRecebimentoPedidoLstResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoPedidoLstResult()
    {
        return $this->ConfirmaRecebimentoPedidoLstResult;
    }
    /**
     * Set ConfirmaRecebimentoPedidoLstResult value
     * @param EzPedidosStructRespostaProcessamento $_confirmaRecebimentoPedidoLstResult the ConfirmaRecebimentoPedidoLstResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoPedidoLstResult($_confirmaRecebimentoPedidoLstResult)
    {
        return ($this->ConfirmaRecebimentoPedidoLstResult = $_confirmaRecebimentoPedidoLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoLstResponse
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
