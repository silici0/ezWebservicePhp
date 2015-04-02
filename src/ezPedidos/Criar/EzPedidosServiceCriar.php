<?php

namespace EzPedidosServiceCriar;
/**
 * File for class EzPedidosServiceCriar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceCriar originally named Criar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceCriar extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named CriarPacote
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructCriarPacote $_ezPedidosStructCriarPacote
     * @return EzPedidosStructCriarPacoteResponse
     */
    public function CriarPacote(EzPedidosStructCriarPacote $_ezPedidosStructCriarPacote)
    {
        try
        {
            return $this->setResult(new EzPedidosStructCriarPacoteResponse(self::getSoapClient()->CriarPacote($_ezPedidosStructCriarPacote)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CriarPacoteEntrega
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructCriarPacoteEntrega $_ezPedidosStructCriarPacoteEntrega
     * @return EzPedidosStructCriarPacoteEntregaResponse
     */
    public function CriarPacoteEntrega(EzPedidosStructCriarPacoteEntrega $_ezPedidosStructCriarPacoteEntrega)
    {
        try
        {
            return $this->setResult(new EzPedidosStructCriarPacoteEntregaResponse(self::getSoapClient()->CriarPacoteEntrega($_ezPedidosStructCriarPacoteEntrega)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructCriarPacoteEntregaResponse|EzPedidosStructCriarPacoteResponse
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
