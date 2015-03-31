<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse originally named AtualizarStatusPacotePorCodigoBarrasResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse extends EzPedidosWsdlClass
{
    /**
     * The AtualizarStatusPacotePorCodigoBarrasResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $AtualizarStatusPacotePorCodigoBarrasResult;
    /**
     * Constructor method for AtualizarStatusPacotePorCodigoBarrasResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorCodigoBarrasResult
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse
     */
    public function __construct($_atualizarStatusPacotePorCodigoBarrasResult = NULL)
    {
        parent::__construct(array('AtualizarStatusPacotePorCodigoBarrasResult'=>$_atualizarStatusPacotePorCodigoBarrasResult),false);
    }
    /**
     * Get AtualizarStatusPacotePorCodigoBarrasResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getAtualizarStatusPacotePorCodigoBarrasResult()
    {
        return $this->AtualizarStatusPacotePorCodigoBarrasResult;
    }
    /**
     * Set AtualizarStatusPacotePorCodigoBarrasResult value
     * @param EzPedidosStructRespostaProcessamento $_atualizarStatusPacotePorCodigoBarrasResult the AtualizarStatusPacotePorCodigoBarrasResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setAtualizarStatusPacotePorCodigoBarrasResult($_atualizarStatusPacotePorCodigoBarrasResult)
    {
        return ($this->AtualizarStatusPacotePorCodigoBarrasResult = $_atualizarStatusPacotePorCodigoBarrasResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse
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
