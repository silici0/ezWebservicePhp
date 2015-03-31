<?php
/**
 * File for class EzClientesStructConfirmaRecebimentoAssinanteResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructConfirmaRecebimentoAssinanteResponse originally named ConfirmaRecebimentoAssinanteResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructConfirmaRecebimentoAssinanteResponse extends EzClientesWsdlClass
{
    /**
     * The ConfirmaRecebimentoAssinanteResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $ConfirmaRecebimentoAssinanteResult;
    /**
     * Constructor method for ConfirmaRecebimentoAssinanteResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoAssinanteResult
     * @return EzClientesStructConfirmaRecebimentoAssinanteResponse
     */
    public function __construct($_confirmaRecebimentoAssinanteResult = NULL)
    {
        parent::__construct(array('ConfirmaRecebimentoAssinanteResult'=>$_confirmaRecebimentoAssinanteResult),false);
    }
    /**
     * Get ConfirmaRecebimentoAssinanteResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getConfirmaRecebimentoAssinanteResult()
    {
        return $this->ConfirmaRecebimentoAssinanteResult;
    }
    /**
     * Set ConfirmaRecebimentoAssinanteResult value
     * @param EzClientesStructRespostaProcessamento $_confirmaRecebimentoAssinanteResult the ConfirmaRecebimentoAssinanteResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setConfirmaRecebimentoAssinanteResult($_confirmaRecebimentoAssinanteResult)
    {
        return ($this->ConfirmaRecebimentoAssinanteResult = $_confirmaRecebimentoAssinanteResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructConfirmaRecebimentoAssinanteResponse
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
