<?php
/**
 * File for class EzClientesStructConfirmaRecebimentoAssinanteLstResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructConfirmaRecebimentoAssinanteLstResponse originally named ConfirmaRecebimentoAssinanteLstResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructConfirmaRecebimentoAssinanteLstResponse extends EzClientesWsdlClass
{
    /**
     * The ConfirmaRecebimentoAssinanteLstResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoAssinanteLstResult;
    /**
     * Constructor method for ConfirmaRecebimentoAssinanteLstResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoAssinanteLstResult
     * @return EzClientesStructConfirmaRecebimentoAssinanteLstResponse
     */
    public function __construct($_confirmaRecebimentoAssinanteLstResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoAssinanteLstResult'=>$_confirmaRecebimentoAssinanteLstResult),false);
    }
    /**
     * Get ConfirmaRecebimentoAssinanteLstResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoAssinanteLstResult()
    {
        return $this->ConfirmaRecebimentoAssinanteLstResult;
    }
    /**
     * Set ConfirmaRecebimentoAssinanteLstResult value
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoAssinanteLstResult the ConfirmaRecebimentoAssinanteLstResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoAssinanteLstResult($_confirmaRecebimentoAssinanteLstResult)
    {
        return ($this->ConfirmaRecebimentoAssinanteLstResult = $_confirmaRecebimentoAssinanteLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructConfirmaRecebimentoAssinanteLstResponse
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
