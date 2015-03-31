<?php
/**
 * File for class EzClientesStructAssinantesDisponiveisResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructAssinantesDisponiveisResponse originally named AssinantesDisponiveisResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructAssinantesDisponiveisResponse extends EzClientesWsdlClass
{
    /**
     * The AssinantesDisponiveisResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $AssinantesDisponiveisResult;
    /**
     * Constructor method for AssinantesDisponiveisResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_assinantesDisponiveisResult
     * @return EzClientesStructAssinantesDisponiveisResponse
     */
    public function __construct($_assinantesDisponiveisResult = NULL)
    {
        parent::__construct(array('AssinantesDisponiveisResult'=>$_assinantesDisponiveisResult),false);
    }
    /**
     * Get AssinantesDisponiveisResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getAssinantesDisponiveisResult()
    {
        return $this->AssinantesDisponiveisResult;
    }
    /**
     * Set AssinantesDisponiveisResult value
     * @param EzClientesStructRespostaProcessamento $_assinantesDisponiveisResult the AssinantesDisponiveisResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setAssinantesDisponiveisResult($_assinantesDisponiveisResult)
    {
        return ($this->AssinantesDisponiveisResult = $_assinantesDisponiveisResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructAssinantesDisponiveisResponse
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
