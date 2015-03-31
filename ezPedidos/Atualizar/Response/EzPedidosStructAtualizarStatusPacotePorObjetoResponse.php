<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorObjetoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorObjetoResponse originally named AtualizarStatusPacotePorObjetoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorObjetoResponse extends EzPedidosWsdlClass
{
    /**
     * The AtualizarStatusPacotePorObjetoResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AtualizarStatusPacotePorObjetoResult;
    /**
     * Constructor method for AtualizarStatusPacotePorObjetoResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorObjetoResult
     * @return EzPedidosStructAtualizarStatusPacotePorObjetoResponse
     */
    public function __construct($_atualizarStatusPacotePorObjetoResult = NULL)
    {
        parent::__construct(array('AtualizarStatusPacotePorObjetoResult'=>$_atualizarStatusPacotePorObjetoResult),false);
    }
    /**
     * Get AtualizarStatusPacotePorObjetoResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAtualizarStatusPacotePorObjetoResult()
    {
        return $this->AtualizarStatusPacotePorObjetoResult;
    }
    /**
     * Set AtualizarStatusPacotePorObjetoResult value
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorObjetoResult the AtualizarStatusPacotePorObjetoResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAtualizarStatusPacotePorObjetoResult($_atualizarStatusPacotePorObjetoResult)
    {
        return ($this->AtualizarStatusPacotePorObjetoResult = $_atualizarStatusPacotePorObjetoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPacotePorObjetoResponse
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
