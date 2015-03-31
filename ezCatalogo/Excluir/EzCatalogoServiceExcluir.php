<?php
/**
 * File for class EzCatalogoServiceExcluir
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoServiceExcluir originally named Excluir
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
class EzCatalogoServiceExcluir extends EzCatalogoWsdlClass
{
    /**
     * Method to call the operation originally named ExcluirMarca
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirMarca $_ezCatalogoStructExcluirMarca
     * @return EzCatalogoStructExcluirMarcaResponse
     */
    public function ExcluirMarca(EzCatalogoStructExcluirMarca $_ezCatalogoStructExcluirMarca)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirMarcaResponse(self::getSoapClient()->ExcluirMarca($_ezCatalogoStructExcluirMarca)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ExcluirSiteCategoria
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirSiteCategoria $_ezCatalogoStructExcluirSiteCategoria
     * @return EzCatalogoStructExcluirSiteCategoriaResponse
     */
    public function ExcluirSiteCategoria(EzCatalogoStructExcluirSiteCategoria $_ezCatalogoStructExcluirSiteCategoria)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirSiteCategoriaResponse(self::getSoapClient()->ExcluirSiteCategoria($_ezCatalogoStructExcluirSiteCategoria)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ExcluirFornecedor
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirFornecedor $_ezCatalogoStructExcluirFornecedor
     * @return EzCatalogoStructExcluirFornecedorResponse
     */
    public function ExcluirFornecedor(EzCatalogoStructExcluirFornecedor $_ezCatalogoStructExcluirFornecedor)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirFornecedorResponse(self::getSoapClient()->ExcluirFornecedor($_ezCatalogoStructExcluirFornecedor)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ExcluirProduto
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirProduto $_ezCatalogoStructExcluirProduto
     * @return EzCatalogoStructExcluirProdutoResponse
     */
    public function ExcluirProduto(EzCatalogoStructExcluirProduto $_ezCatalogoStructExcluirProduto)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirProdutoResponse(self::getSoapClient()->ExcluirProduto($_ezCatalogoStructExcluirProduto)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ExcluirVariacao
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirVariacao $_ezCatalogoStructExcluirVariacao
     * @return EzCatalogoStructExcluirVariacaoResponse
     */
    public function ExcluirVariacao(EzCatalogoStructExcluirVariacao $_ezCatalogoStructExcluirVariacao)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirVariacaoResponse(self::getSoapClient()->ExcluirVariacao($_ezCatalogoStructExcluirVariacao)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named ExcluirSubVariacao
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructExcluirSubVariacao $_ezCatalogoStructExcluirSubVariacao
     * @return EzCatalogoStructExcluirSubVariacaoResponse
     */
    public function ExcluirSubVariacao(EzCatalogoStructExcluirSubVariacao $_ezCatalogoStructExcluirSubVariacao)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructExcluirSubVariacaoResponse(self::getSoapClient()->ExcluirSubVariacao($_ezCatalogoStructExcluirSubVariacao)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzCatalogoWsdlClass::getResult()
     * @return EzCatalogoStructExcluirFornecedorResponse|EzCatalogoStructExcluirMarcaResponse|EzCatalogoStructExcluirProdutoResponse|EzCatalogoStructExcluirSiteCategoriaResponse|EzCatalogoStructExcluirSubVariacaoResponse|EzCatalogoStructExcluirVariacaoResponse
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
