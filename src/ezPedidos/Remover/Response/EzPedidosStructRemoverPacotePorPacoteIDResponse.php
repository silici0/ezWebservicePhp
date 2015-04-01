<?php
/**
 * File for class EzPedidosStructRemoverPacotePorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverPacotePorPacoteIDResponse originally named RemoverPacotePorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverPacotePorPacoteIDResponse extends EzPedidosWsdlClass
{
    /**
     * The RemoverPacotePorPacoteIDResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RemoverPacotePorPacoteIDResult;
    /**
     * Constructor method for RemoverPacotePorPacoteIDResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_removerPacotePorPacoteIDResult
     * @return EzPedidosStructRemoverPacotePorPacoteIDResponse
     */
    public function __construct($_removerPacotePorPacoteIDResult = NULL)
    {
        parent::__construct(array('RemoverPacotePorPacoteIDResult'=>$_removerPacotePorPacoteIDResult),false);
    }
    /**
     * Get RemoverPacotePorPacoteIDResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRemoverPacotePorPacoteIDResult()
    {
        return $this->RemoverPacotePorPacoteIDResult;
    }
    /**
     * Set RemoverPacotePorPacoteIDResult value
     * @param EzPedidosStructRespostaProcessamento $_removerPacotePorPacoteIDResult the RemoverPacotePorPacoteIDResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRemoverPacotePorPacoteIDResult($_removerPacotePorPacoteIDResult)
    {
        return ($this->RemoverPacotePorPacoteIDResult = $_removerPacotePorPacoteIDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverPacotePorPacoteIDResponse
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
