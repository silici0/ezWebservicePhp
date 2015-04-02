<?php

namespace EzPedidosServiceSalvar;
/**
 * File for class EzPedidosServiceSalvar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceSalvar originally named Salvar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceSalvar extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named SalvarCupomDesconto
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructSalvarCupomDesconto $_ezPedidosStructSalvarCupomDesconto
     * @return EzPedidosStructSalvarCupomDescontoResponse
     */
    public function SalvarCupomDesconto(EzPedidosStructSalvarCupomDesconto $_ezPedidosStructSalvarCupomDesconto)
    {
        try
        {
            return $this->setResult(new EzPedidosStructSalvarCupomDescontoResponse(self::getSoapClient()->SalvarCupomDesconto($_ezPedidosStructSalvarCupomDesconto)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructSalvarCupomDescontoResponse
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
