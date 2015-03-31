<?php
/**
 * File for class EzPedidosServiceConfirma
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceConfirma originally named Confirma
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceConfirma extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named ConfirmaRecebimentoPedido
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructConfirmaRecebimentoPedido $_ezPedidosStructConfirmaRecebimentoPedido
     * @return EzPedidosStructConfirmaRecebimentoPedidoResponse
     */
    public function ConfirmaRecebimentoPedido(EzPedidosStructConfirmaRecebimentoPedido $_ezPedidosStructConfirmaRecebimentoPedido)
    {
        try
        {
            return $this->setResult(new EzPedidosStructConfirmaRecebimentoPedidoResponse(self::getSoapClient()->ConfirmaRecebimentoPedido($_ezPedidosStructConfirmaRecebimentoPedido)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoPedidoAtualizado
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructConfirmaRecebimentoPedidoAtualizado $_ezPedidosStructConfirmaRecebimentoPedidoAtualizado
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse
     */
    public function ConfirmaRecebimentoPedidoAtualizado(EzPedidosStructConfirmaRecebimentoPedidoAtualizado $_ezPedidosStructConfirmaRecebimentoPedidoAtualizado)
    {
        try
        {
            return $this->setResult(new EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse(self::getSoapClient()->ConfirmaRecebimentoPedidoAtualizado($_ezPedidosStructConfirmaRecebimentoPedidoAtualizado)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoPedidoLst
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructConfirmaRecebimentoPedidoLst $_ezPedidosStructConfirmaRecebimentoPedidoLst
     * @return EzPedidosStructConfirmaRecebimentoPedidoLstResponse
     */
    public function ConfirmaRecebimentoPedidoLst(EzPedidosStructConfirmaRecebimentoPedidoLst $_ezPedidosStructConfirmaRecebimentoPedidoLst)
    {
        try
        {
            return $this->setResult(new EzPedidosStructConfirmaRecebimentoPedidoLstResponse(self::getSoapClient()->ConfirmaRecebimentoPedidoLst($_ezPedidosStructConfirmaRecebimentoPedidoLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ConfirmaRecebimentoPedidoAtualizadoLst
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLst $_ezPedidosStructConfirmaRecebimentoPedidoAtualizadoLst
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse
     */
    public function ConfirmaRecebimentoPedidoAtualizadoLst(EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLst $_ezPedidosStructConfirmaRecebimentoPedidoAtualizadoLst)
    {
        try
        {
            return $this->setResult(new EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse(self::getSoapClient()->ConfirmaRecebimentoPedidoAtualizadoLst($_ezPedidosStructConfirmaRecebimentoPedidoAtualizadoLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse|EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse|EzPedidosStructConfirmaRecebimentoPedidoLstResponse|EzPedidosStructConfirmaRecebimentoPedidoResponse
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
