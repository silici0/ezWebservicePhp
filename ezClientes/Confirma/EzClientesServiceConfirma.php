<?php
/**
 * File for class EzClientesServiceConfirma
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesServiceConfirma originally named Confirma
 * @package EzClientes
 * @subpackage Services
 * @date 2015-03-31
 */
class EzClientesServiceConfirma extends EzClientesWsdlClass
{
    /**
     * Method to call the operation originally named ConfirmaRecebimentoCliente
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructConfirmaRecebimentoCliente $_ezClientesStructConfirmaRecebimentoCliente
     * @return EzClientesStructConfirmaRecebimentoClienteResponse
     */
    public function ConfirmaRecebimentoCliente(EzClientesStructConfirmaRecebimentoCliente $_ezClientesStructConfirmaRecebimentoCliente)
    {
        try
        {
            return $this->setResult(new EzClientesStructConfirmaRecebimentoClienteResponse(self::getSoapClient()->ConfirmaRecebimentoCliente($_ezClientesStructConfirmaRecebimentoCliente)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoClienteLst
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructConfirmaRecebimentoClienteLst $_ezClientesStructConfirmaRecebimentoClienteLst
     * @return EzClientesStructConfirmaRecebimentoClienteLstResponse
     */
    public function ConfirmaRecebimentoClienteLst(EzClientesStructConfirmaRecebimentoClienteLst $_ezClientesStructConfirmaRecebimentoClienteLst)
    {
        try
        {
            return $this->setResult(new EzClientesStructConfirmaRecebimentoClienteLstResponse(self::getSoapClient()->ConfirmaRecebimentoClienteLst($_ezClientesStructConfirmaRecebimentoClienteLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoAssinante
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructConfirmaRecebimentoAssinante $_ezClientesStructConfirmaRecebimentoAssinante
     * @return EzClientesStructConfirmaRecebimentoAssinanteResponse
     */
    public function ConfirmaRecebimentoAssinante(EzClientesStructConfirmaRecebimentoAssinante $_ezClientesStructConfirmaRecebimentoAssinante)
    {
        try
        {
            return $this->setResult(new EzClientesStructConfirmaRecebimentoAssinanteResponse(self::getSoapClient()->ConfirmaRecebimentoAssinante($_ezClientesStructConfirmaRecebimentoAssinante)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoAssinanteLst
     * @uses EzClientesWsdlClass::getSoapClient()
     * @uses EzClientesWsdlClass::setResult()
     * @uses EzClientesWsdlClass::saveLastError()
     * @param EzClientesStructConfirmaRecebimentoAssinanteLst $_ezClientesStructConfirmaRecebimentoAssinanteLst
     * @return EzClientesStructConfirmaRecebimentoAssinanteLstResponse
     */
    public function ConfirmaRecebimentoAssinanteLst(EzClientesStructConfirmaRecebimentoAssinanteLst $_ezClientesStructConfirmaRecebimentoAssinanteLst)
    {
        try
        {
            return $this->setResult(new EzClientesStructConfirmaRecebimentoAssinanteLstResponse(self::getSoapClient()->ConfirmaRecebimentoAssinanteLst($_ezClientesStructConfirmaRecebimentoAssinanteLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzClientesWsdlClass::getResult()
     * @return EzClientesStructConfirmaRecebimentoAssinanteLstResponse|EzClientesStructConfirmaRecebimentoAssinanteResponse|EzClientesStructConfirmaRecebimentoClienteLstResponse|EzClientesStructConfirmaRecebimentoClienteResponse
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
