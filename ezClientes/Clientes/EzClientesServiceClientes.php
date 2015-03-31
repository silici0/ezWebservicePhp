<?php
/**
 * File for class EzClientesServiceClientes
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesServiceClientes originally named Clientes
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
class EzClientesServiceClientes extends EzClientesWsdlClass
{
    /**
     * Method to call the operation originally named ClientesDisponiveis
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructClientesDisponiveis $_ezClientesStructClientesDisponiveis
     * @return EzClientesStructClientesDisponiveisResponse
     */
    public function ClientesDisponiveis()
    {
        try
        {
            return $this->setResult(new EzClientesStructClientesDisponiveisResponse(self::getSoapClient()->ClientesDisponiveis()));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzClientesWsdlClass::getResult()
     * @return EzClientesStructClientesDisponiveisResponse
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
