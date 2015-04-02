<?php

namespace EzPedidosServiceAtualizar;
/**
 * File for class EzPedidosServiceAtualizar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceAtualizar originally named Atualizar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceAtualizar extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named AtualizarStatusPedido
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAtualizarStatusPedido $_ezPedidosStructAtualizarStatusPedido
     * @return EzPedidosStructAtualizarStatusPedidoResponse
     */
    public function AtualizarStatusPedido(EzPedidosStructAtualizarStatusPedido $_ezPedidosStructAtualizarStatusPedido)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAtualizarStatusPedidoResponse(self::getSoapClient()->AtualizarStatusPedido($_ezPedidosStructAtualizarStatusPedido)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AtualizarStatusPacotePorPacoteID
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAtualizarStatusPacotePorPacoteID $_ezPedidosStructAtualizarStatusPacotePorPacoteID
     * @return EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse
     */
    public function AtualizarStatusPacotePorPacoteID(EzPedidosStructAtualizarStatusPacotePorPacoteID $_ezPedidosStructAtualizarStatusPacotePorPacoteID)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse(self::getSoapClient()->AtualizarStatusPacotePorPacoteID($_ezPedidosStructAtualizarStatusPacotePorPacoteID)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AtualizarStatusPacotePorCodigoBarras
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAtualizarStatusPacotePorCodigoBarras $_ezPedidosStructAtualizarStatusPacotePorCodigoBarras
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse
     */
    public function AtualizarStatusPacotePorCodigoBarras(EzPedidosStructAtualizarStatusPacotePorCodigoBarras $_ezPedidosStructAtualizarStatusPacotePorCodigoBarras)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse(self::getSoapClient()->AtualizarStatusPacotePorCodigoBarras($_ezPedidosStructAtualizarStatusPacotePorCodigoBarras)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AtualizarStatusPacotePorObjeto
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAtualizarStatusPacotePorObjeto $_ezPedidosStructAtualizarStatusPacotePorObjeto
     * @return EzPedidosStructAtualizarStatusPacotePorObjetoResponse
     */
    public function AtualizarStatusPacotePorObjeto(EzPedidosStructAtualizarStatusPacotePorObjeto $_ezPedidosStructAtualizarStatusPacotePorObjeto)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAtualizarStatusPacotePorObjetoResponse(self::getSoapClient()->AtualizarStatusPacotePorObjeto($_ezPedidosStructAtualizarStatusPacotePorObjeto)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse|EzPedidosStructAtualizarStatusPacotePorObjetoResponse|EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse|EzPedidosStructAtualizarStatusPedidoResponse
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
