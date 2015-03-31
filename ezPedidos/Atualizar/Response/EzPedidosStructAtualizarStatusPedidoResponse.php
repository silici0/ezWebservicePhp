<?php
/**
 * File for class EzPedidosStructAtualizarStatusPedidoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPedidoResponse originally named AtualizarStatusPedidoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPedidoResponse extends EzPedidosWsdlClass
{
    /**
     * The AtualizarStatusPedidoResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AtualizarStatusPedidoResult;
    /**
     * Constructor method for AtualizarStatusPedidoResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPedidoResult
     * @return EzPedidosStructAtualizarStatusPedidoResponse
     */
    public function __construct($_atualizarStatusPedidoResult = NULL)
    {
        parent::__construct(array('AtualizarStatusPedidoResult'=>$_atualizarStatusPedidoResult),false);
    }
    /**
     * Get AtualizarStatusPedidoResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAtualizarStatusPedidoResult()
    {
        return $this->AtualizarStatusPedidoResult;
    }
    /**
     * Set AtualizarStatusPedidoResult value
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPedidoResult the AtualizarStatusPedidoResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAtualizarStatusPedidoResult($_atualizarStatusPedidoResult)
    {
        return ($this->AtualizarStatusPedidoResult = $_atualizarStatusPedidoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPedidoResponse
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
