<?php
/**
 * File for class EzCatalogoServiceBusca
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoServiceBusca originally named Busca
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
class EzCatalogoServiceBusca extends EzCatalogoWsdlClass
{
    /**
     * Method to call the operation originally named BuscaMenusPersonalizados
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructBuscaMenusPersonalizados $_ezCatalogoStructBuscaMenusPersonalizados
     * @return EzCatalogoStructBuscaMenusPersonalizadosResponse
     */
    public function BuscaMenusPersonalizados()
    {
        try
        {
            return $this->setResult(new EzCatalogoStructBuscaMenusPersonalizadosResponse(self::getSoapClient()->BuscaMenusPersonalizados()));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named BuscaRelacaoMenuCategoria
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructBuscaRelacaoMenuCategoria $_ezCatalogoStructBuscaRelacaoMenuCategoria
     * @return EzCatalogoStructBuscaRelacaoMenuCategoriaResponse
     */
    public function BuscaRelacaoMenuCategoria(EzCatalogoStructBuscaRelacaoMenuCategoria $_ezCatalogoStructBuscaRelacaoMenuCategoria)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructBuscaRelacaoMenuCategoriaResponse(self::getSoapClient()->BuscaRelacaoMenuCategoria($_ezCatalogoStructBuscaRelacaoMenuCategoria)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzCatalogoWsdlClass::getResult()
     * @return EzCatalogoStructBuscaMenusPersonalizadosResponse|EzCatalogoStructBuscaRelacaoMenuCategoriaResponse
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
