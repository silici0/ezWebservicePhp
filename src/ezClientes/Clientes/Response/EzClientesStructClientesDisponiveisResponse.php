<?php
/**
 * File for class EzClientesStructClientesDisponiveisResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructClientesDisponiveisResponse originally named ClientesDisponiveisResponse
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructClientesDisponiveisResponse extends EzClientesWsdlClass
{
    /**
     * The ClientesDisponiveisResult
     * @var EzClientesStructRespostaProcessamento
     */
    public $ClientesDisponiveisResult;
    /**
     * Constructor method for ClientesDisponiveisResponse
     * @see parent::__construct()
     * @param EzClientesStructRespostaProcessamento $_clientesDisponiveisResult
     * @return EzClientesStructClientesDisponiveisResponse
     */
    public function __construct($_clientesDisponiveisResult = NULL)
    {
        parent::__construct(array('ClientesDisponiveisResult'=>$_clientesDisponiveisResult),false);
    }
    /**
     * Get ClientesDisponiveisResult value
     * @return EzClientesStructRespostaProcessamento|null
     */
    public function getClientesDisponiveisResult()
    {
        return $this->ClientesDisponiveisResult;
    }
    /**
     * Set ClientesDisponiveisResult value
     * @param EzClientesStructRespostaProcessamento $_clientesDisponiveisResult the ClientesDisponiveisResult
     * @return EzClientesStructRespostaProcessamento
     */
    public function setClientesDisponiveisResult($_clientesDisponiveisResult)
    {
        return ($this->ClientesDisponiveisResult = $_clientesDisponiveisResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructClientesDisponiveisResponse
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
