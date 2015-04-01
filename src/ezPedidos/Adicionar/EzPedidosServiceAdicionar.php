<?php
/**
 * File for class EzPedidosServiceAdicionar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosServiceAdicionar originally named Adicionar
 * @package EzPedidos
 * @subpackage Services
 * @date 2015-03-31
 */
class EzPedidosServiceAdicionar extends EzPedidosWsdlClass
{
    /**
     * Method to call the operation originally named AdicionarProdutoPacote
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAdicionarProdutoPacote $_ezPedidosStructAdicionarProdutoPacote
     * @return EzPedidosStructAdicionarProdutoPacoteResponse
     */
    public function AdicionarProdutoPacote(EzPedidosStructAdicionarProdutoPacote $_ezPedidosStructAdicionarProdutoPacote)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAdicionarProdutoPacoteResponse(self::getSoapClient()->AdicionarProdutoPacote($_ezPedidosStructAdicionarProdutoPacote)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named AdicionarProdutoPacoteEntrega
     * @uses EzPedidosWsdlClass::getSoapClient()
     * @uses EzPedidosWsdlClass::setResult()
     * @uses EzPedidosWsdlClass::saveLastError()
     * @param EzPedidosStructAdicionarProdutoPacoteEntrega $_ezPedidosStructAdicionarProdutoPacoteEntrega
     * @return EzPedidosStructAdicionarProdutoPacoteEntregaResponse
     */
    public function AdicionarProdutoPacoteEntrega(EzPedidosStructAdicionarProdutoPacoteEntrega $_ezPedidosStructAdicionarProdutoPacoteEntrega)
    {
        try
        {
            return $this->setResult(new EzPedidosStructAdicionarProdutoPacoteEntregaResponse(self::getSoapClient()->AdicionarProdutoPacoteEntrega($_ezPedidosStructAdicionarProdutoPacoteEntrega)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzPedidosWsdlClass::getResult()
     * @return EzPedidosStructAdicionarProdutoPacoteEntregaResponse|EzPedidosStructAdicionarProdutoPacoteResponse
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
