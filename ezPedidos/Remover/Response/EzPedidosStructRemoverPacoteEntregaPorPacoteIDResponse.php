<?php
/**
 * File for class EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse originally named RemoverPacoteEntregaPorPacoteIDResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse extends EzPedidosWsdlClass
{
    /**
     * The RemoverPacoteEntregaPorPacoteIDResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RemoverPacoteEntregaPorPacoteIDResult;
    /**
     * Constructor method for RemoverPacoteEntregaPorPacoteIDResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_removerPacoteEntregaPorPacoteIDResult
     * @return EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse
     */
    public function __construct($_removerPacoteEntregaPorPacoteIDResult = NULL)
    {
        parent::__construct(array('RemoverPacoteEntregaPorPacoteIDResult'=>$_removerPacoteEntregaPorPacoteIDResult),false);
    }
    /**
     * Get RemoverPacoteEntregaPorPacoteIDResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRemoverPacoteEntregaPorPacoteIDResult()
    {
        return $this->RemoverPacoteEntregaPorPacoteIDResult;
    }
    /**
     * Set RemoverPacoteEntregaPorPacoteIDResult value
     * @param EzPedidosStructRespostaProcessamento $_removerPacoteEntregaPorPacoteIDResult the RemoverPacoteEntregaPorPacoteIDResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRemoverPacoteEntregaPorPacoteIDResult($_removerPacoteEntregaPorPacoteIDResult)
    {
        return ($this->RemoverPacoteEntregaPorPacoteIDResult = $_removerPacoteEntregaPorPacoteIDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse
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
