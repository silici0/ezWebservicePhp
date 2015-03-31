<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse originally named AtualizarStatusPacotePorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse extends EzPedidosWsdlClass
{
    /**
     * The AtualizarStatusPacotePorPacoteIDResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AtualizarStatusPacotePorPacoteIDResult;
    /**
     * Constructor method for AtualizarStatusPacotePorPacoteIDResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorPacoteIDResult
     * @return EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse
     */
    public function __construct($_atualizarStatusPacotePorPacoteIDResult = NULL)
    {
        parent::__construct(array('AtualizarStatusPacotePorPacoteIDResult'=>$_atualizarStatusPacotePorPacoteIDResult),false);
    }
    /**
     * Get AtualizarStatusPacotePorPacoteIDResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAtualizarStatusPacotePorPacoteIDResult()
    {
        return $this->AtualizarStatusPacotePorPacoteIDResult;
    }
    /**
     * Set AtualizarStatusPacotePorPacoteIDResult value
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorPacoteIDResult the AtualizarStatusPacotePorPacoteIDResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAtualizarStatusPacotePorPacoteIDResult($_atualizarStatusPacotePorPacoteIDResult)
    {
        return ($this->AtualizarStatusPacotePorPacoteIDResult = $_atualizarStatusPacotePorPacoteIDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse
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
