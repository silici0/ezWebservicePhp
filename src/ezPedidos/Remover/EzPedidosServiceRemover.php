<?php

namespace EzPedidosServiceRemover;
/**
 * File for class EzPedidosServiceRemover
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceRemover originally named Remover
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceRemover extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named RemoverPacotePorPacoteID
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructRemoverPacotePorPacoteID $_ezPedidosStructRemoverPacotePorPacoteID
     * @return EzPedidosStructRemoverPacotePorPacoteIDResponse
     */
    public function RemoverPacotePorPacoteID(EzPedidosStructRemoverPacotePorPacoteID $_ezPedidosStructRemoverPacotePorPacoteID)
    {
        try
        {
            return $this->setResult(new EzPedidosStructRemoverPacotePorPacoteIDResponse(self::getSoapClient()->RemoverPacotePorPacoteID($_ezPedidosStructRemoverPacotePorPacoteID)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named RemoverPacotePorCodigoBarras
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructRemoverPacotePorCodigoBarras $_ezPedidosStructRemoverPacotePorCodigoBarras
     * @return EzPedidosStructRemoverPacotePorCodigoBarrasResponse
     */
    public function RemoverPacotePorCodigoBarras(EzPedidosStructRemoverPacotePorCodigoBarras $_ezPedidosStructRemoverPacotePorCodigoBarras)
    {
        try
        {
            return $this->setResult(new EzPedidosStructRemoverPacotePorCodigoBarrasResponse(self::getSoapClient()->RemoverPacotePorCodigoBarras($_ezPedidosStructRemoverPacotePorCodigoBarras)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named RemoverPacoteEntregaPorPacoteID
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructRemoverPacoteEntregaPorPacoteID $_ezPedidosStructRemoverPacoteEntregaPorPacoteID
     * @return EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse
     */
    public function RemoverPacoteEntregaPorPacoteID(EzPedidosStructRemoverPacoteEntregaPorPacoteID $_ezPedidosStructRemoverPacoteEntregaPorPacoteID)
    {
        try
        {
            return $this->setResult(new EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse(self::getSoapClient()->RemoverPacoteEntregaPorPacoteID($_ezPedidosStructRemoverPacoteEntregaPorPacoteID)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named RemoverProdutoPacote
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructRemoverProdutoPacote $_ezPedidosStructRemoverProdutoPacote
     * @return EzPedidosStructRemoverProdutoPacoteResponse
     */
    public function RemoverProdutoPacote(EzPedidosStructRemoverProdutoPacote $_ezPedidosStructRemoverProdutoPacote)
    {
        try
        {
            return $this->setResult(new EzPedidosStructRemoverProdutoPacoteResponse(self::getSoapClient()->RemoverProdutoPacote($_ezPedidosStructRemoverProdutoPacote)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named RemoverProdutoPacoteEntrega
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructRemoverProdutoPacoteEntrega $_ezPedidosStructRemoverProdutoPacoteEntrega
     * @return EzPedidosStructRemoverProdutoPacoteEntregaResponse
     */
    public function RemoverProdutoPacoteEntrega(EzPedidosStructRemoverProdutoPacoteEntrega $_ezPedidosStructRemoverProdutoPacoteEntrega)
    {
        try
        {
            return $this->setResult(new EzPedidosStructRemoverProdutoPacoteEntregaResponse(self::getSoapClient()->RemoverProdutoPacoteEntrega($_ezPedidosStructRemoverProdutoPacoteEntrega)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse|EzPedidosStructRemoverPacotePorCodigoBarrasResponse|EzPedidosStructRemoverPacotePorPacoteIDResponse|EzPedidosStructRemoverProdutoPacoteEntregaResponse|EzPedidosStructRemoverProdutoPacoteResponse
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
