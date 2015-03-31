<?php
/**
 * File for class EzClientesStructConfirmaRecebimentoClienteLstResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructConfirmaRecebimentoClienteLstResponse originally named ConfirmaRecebimentoClienteLstResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructConfirmaRecebimentoClienteLstResponse extends EzClientesWsdlClass
{
    /**
     * The ConfirmaRecebimentoClienteLstResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoClienteLstResult;
    /**
     * Constructor method for ConfirmaRecebimentoClienteLstResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoClienteLstResult
     * @return EzClientesStructConfirmaRecebimentoClienteLstResponse
     */
    public function __construct($_confirmaRecebimentoClienteLstResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoClienteLstResult'=>$_confirmaRecebimentoClienteLstResult),false);
    }
    /**
     * Get ConfirmaRecebimentoClienteLstResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoClienteLstResult()
    {
        return $this->ConfirmaRecebimentoClienteLstResult;
    }
    /**
     * Set ConfirmaRecebimentoClienteLstResult value
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoClienteLstResult the ConfirmaRecebimentoClienteLstResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoClienteLstResult($_confirmaRecebimentoClienteLstResult)
    {
        return ($this->ConfirmaRecebimentoClienteLstResult = $_confirmaRecebimentoClienteLstResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructConfirmaRecebimentoClienteLstResponse
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
