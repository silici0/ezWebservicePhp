<?php
/**
 * File for class EzClientesStructConfirmaRecebimentoClienteResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructConfirmaRecebimentoClienteResponse originally named ConfirmaRecebimentoClienteResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructConfirmaRecebimentoClienteResponse extends EzClientesWsdlClass
{
    /**
     * The ConfirmaRecebimentoClienteResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoClienteResult;
    /**
     * Constructor method for ConfirmaRecebimentoClienteResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoClienteResult
     * @return EzClientesStructConfirmaRecebimentoClienteResponse
     */
    public function __construct($_confirmaRecebimentoClienteResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoClienteResult'=>$_confirmaRecebimentoClienteResult),false);
    }
    /**
     * Get ConfirmaRecebimentoClienteResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoClienteResult()
    {
        return $this->ConfirmaRecebimentoClienteResult;
    }
    /**
     * Set ConfirmaRecebimentoClienteResult value
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoClienteResult the ConfirmaRecebimentoClienteResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoClienteResult($_confirmaRecebimentoClienteResult)
    {
        return ($this->ConfirmaRecebimentoClienteResult = $_confirmaRecebimentoClienteResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructConfirmaRecebimentoClienteResponse
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
