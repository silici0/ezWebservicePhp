<?php
/**
 * File for class EzClientesServiceAssinantes
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesServiceAssinantes originally named Assinantes
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
class EzClientesServiceAssinantes extends EzClientesWsdlClass
{
    /**
     * Method to call the operation originally named AssinantesDisponiveis
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructAssinantesDisponiveis $_ezClientesStructAssinantesDisponiveis
     * @return EzClientesStructAssinantesDisponiveisResponse
     */
    public function AssinantesDisponiveis()
    {
        try
        {
            return $this->setResult(new EzClientesStructAssinantesDisponiveisResponse(self::getSoapClient()->AssinantesDisponiveis()));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzClientesWsdlClass::getResult()
     * @return EzClientesStructAssinantesDisponiveisResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
