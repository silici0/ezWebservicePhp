<?php

namespace EzPedidosServicePedidos;
/**
 * File for class EzPedidosServicePedidos
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServicePedidos originally named Pedidos
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServicePedidos extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named PedidosDisponiveisComFiltro
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructPedidosDisponiveisComFiltro $_ezPedidosStructPedidosDisponiveisComFiltro
     * @return EzPedidosStructPedidosDisponiveisComFiltroResponse
     */
    public function PedidosDisponiveisComFiltro(EzPedidosStructPedidosDisponiveisComFiltro $_ezPedidosStructPedidosDisponiveisComFiltro)
    {
        try
        {
            return $this->setResult(new EzPedidosStructPedidosDisponiveisComFiltroResponse(self::getSoapClient()->PedidosDisponiveisComFiltro($_ezPedidosStructPedidosDisponiveisComFiltro)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named PedidosDisponiveis
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructPedidosDisponiveis $_ezPedidosStructPedidosDisponiveis
     * @return EzPedidosStructPedidosDisponiveisResponse
     */
    public function PedidosDisponiveis()
    {
        try
        {
            return $this->setResult(new EzPedidosStructPedidosDisponiveisResponse(self::getSoapClient()->PedidosDisponiveis()));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named PedidosAtualizados
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructPedidosAtualizados $_ezPedidosStructPedidosAtualizados
     * @return EzPedidosStructPedidosAtualizadosResponse
     */
    public function PedidosAtualizados()
    {
        try
        {
            return $this->setResult(new EzPedidosStructPedidosAtualizadosResponse(self::getSoapClient()->PedidosAtualizados()));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructPedidosAtualizadosResponse|EzPedidosStructPedidosDisponiveisComFiltroResponse|EzPedidosStructPedidosDisponiveisResponse
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
