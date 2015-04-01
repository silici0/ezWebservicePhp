<?php
/**
 * File for class EzCatalogoServiceSalvar
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoServiceSalvar originally named Salvar
 * @package EzCatalogo
 * @subpackage Services
 * @date 2015-03-31
 */
class EzCatalogoServiceSalvar extends EzCatalogoWsdlClass
{
    /**
     * Method to call the operation originally named SalvarMarca
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarMarca $_ezCatalogoStructSalvarMarca
     * @return EzCatalogoStructSalvarMarcaResponse
     */
    public function SalvarMarca(EzCatalogoStructSalvarMarca $_ezCatalogoStructSalvarMarca)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarMarcaResponse(self::getSoapClient()->SalvarMarca($_ezCatalogoStructSalvarMarca)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarMarcaLst
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarMarcaLst $_ezCatalogoStructSalvarMarcaLst
     * @return EzCatalogoStructSalvarMarcaLstResponse
     */
    public function SalvarMarcaLst(EzCatalogoStructSalvarMarcaLst $_ezCatalogoStructSalvarMarcaLst)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarMarcaLstResponse(self::getSoapClient()->SalvarMarcaLst($_ezCatalogoStructSalvarMarcaLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarSiteCategoria
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarSiteCategoria $_ezCatalogoStructSalvarSiteCategoria
     * @return EzCatalogoStructSalvarSiteCategoriaResponse
     */
    public function SalvarSiteCategoria(EzCatalogoStructSalvarSiteCategoria $_ezCatalogoStructSalvarSiteCategoria)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarSiteCategoriaResponse(self::getSoapClient()->SalvarSiteCategoria($_ezCatalogoStructSalvarSiteCategoria)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarFornecedor
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarFornecedor $_ezCatalogoStructSalvarFornecedor
     * @return EzCatalogoStructSalvarFornecedorResponse
     */
    public function SalvarFornecedor(EzCatalogoStructSalvarFornecedor $_ezCatalogoStructSalvarFornecedor)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarFornecedorResponse(self::getSoapClient()->SalvarFornecedor($_ezCatalogoStructSalvarFornecedor)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarFornecedorLst
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarFornecedorLst $_ezCatalogoStructSalvarFornecedorLst
     * @return EzCatalogoStructSalvarFornecedorLstResponse
     */
    public function SalvarFornecedorLst(EzCatalogoStructSalvarFornecedorLst $_ezCatalogoStructSalvarFornecedorLst)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarFornecedorLstResponse(self::getSoapClient()->SalvarFornecedorLst($_ezCatalogoStructSalvarFornecedorLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarProduto
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarProduto $_ezCatalogoStructSalvarProduto
     * @return EzCatalogoStructSalvarProdutoResponse
     */
    public function SalvarProduto(EzCatalogoStructSalvarProduto $_ezCatalogoStructSalvarProduto)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarProdutoResponse(self::getSoapClient()->SalvarProduto($_ezCatalogoStructSalvarProduto)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarProdutoLst
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarProdutoLst $_ezCatalogoStructSalvarProdutoLst
     * @return EzCatalogoStructSalvarProdutoLstResponse
     */
    public function SalvarProdutoLst(EzCatalogoStructSalvarProdutoLst $_ezCatalogoStructSalvarProdutoLst)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarProdutoLstResponse(self::getSoapClient()->SalvarProdutoLst($_ezCatalogoStructSalvarProdutoLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarVariacao
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarVariacao $_ezCatalogoStructSalvarVariacao
     * @return EzCatalogoStructSalvarVariacaoResponse
     */
    public function SalvarVariacao(EzCatalogoStructSalvarVariacao $_ezCatalogoStructSalvarVariacao)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarVariacaoResponse(self::getSoapClient()->SalvarVariacao($_ezCatalogoStructSalvarVariacao)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarSubVariacao
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarSubVariacao $_ezCatalogoStructSalvarSubVariacao
     * @return EzCatalogoStructSalvarSubVariacaoResponse
     */
    public function SalvarSubVariacao(EzCatalogoStructSalvarSubVariacao $_ezCatalogoStructSalvarSubVariacao)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarSubVariacaoResponse(self::getSoapClient()->SalvarSubVariacao($_ezCatalogoStructSalvarSubVariacao)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarPreco
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarPreco $_ezCatalogoStructSalvarPreco
     * @return EzCatalogoStructSalvarPrecoResponse
     */
    public function SalvarPreco(EzCatalogoStructSalvarPreco $_ezCatalogoStructSalvarPreco)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarPrecoResponse(self::getSoapClient()->SalvarPreco($_ezCatalogoStructSalvarPreco)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarPrecoLst
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarPrecoLst $_ezCatalogoStructSalvarPrecoLst
     * @return EzCatalogoStructSalvarPrecoLstResponse
     */
    public function SalvarPrecoLst(EzCatalogoStructSalvarPrecoLst $_ezCatalogoStructSalvarPrecoLst)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarPrecoLstResponse(self::getSoapClient()->SalvarPrecoLst($_ezCatalogoStructSalvarPrecoLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarEstoque
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarEstoque $_ezCatalogoStructSalvarEstoque
     * @return EzCatalogoStructSalvarEstoqueResponse
     */
    public function SalvarEstoque(EzCatalogoStructSalvarEstoque $_ezCatalogoStructSalvarEstoque)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarEstoqueResponse(self::getSoapClient()->SalvarEstoque($_ezCatalogoStructSalvarEstoque)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarEstoqueLst
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarEstoqueLst $_ezCatalogoStructSalvarEstoqueLst
     * @return EzCatalogoStructSalvarEstoqueLstResponse
     */
    public function SalvarEstoqueLst(EzCatalogoStructSalvarEstoqueLst $_ezCatalogoStructSalvarEstoqueLst)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarEstoqueLstResponse(self::getSoapClient()->SalvarEstoqueLst($_ezCatalogoStructSalvarEstoqueLst)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named SalvarListaProdutos
     * @uses EzCatalogoWsdlClass::getSoapClient()
     * @uses EzCatalogoWsdlClass::setResult()
     * @uses EzCatalogoWsdlClass::saveLastError()
     * @param EzCatalogoStructSalvarListaProdutos $_ezCatalogoStructSalvarListaProdutos
     * @return EzCatalogoStructSalvarListaProdutosResponse
     */
    public function SalvarListaProdutos(EzCatalogoStructSalvarListaProdutos $_ezCatalogoStructSalvarListaProdutos)
    {
        try
        {
            return $this->setResult(new EzCatalogoStructSalvarListaProdutosResponse(self::getSoapClient()->SalvarListaProdutos($_ezCatalogoStructSalvarListaProdutos)));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EzCatalogoWsdlClass::getResult()
     * @return EzCatalogoStructSalvarEstoqueLstResponse|EzCatalogoStructSalvarEstoqueResponse|EzCatalogoStructSalvarFornecedorLstResponse|EzCatalogoStructSalvarFornecedorResponse|EzCatalogoStructSalvarListaProdutosResponse|EzCatalogoStructSalvarMarcaLstResponse|EzCatalogoStructSalvarMarcaResponse|EzCatalogoStructSalvarPrecoLstResponse|EzCatalogoStructSalvarPrecoResponse|EzCatalogoStructSalvarProdutoLstResponse|EzCatalogoStructSalvarProdutoResponse|EzCatalogoStructSalvarSiteCategoriaResponse|EzCatalogoStructSalvarSubVariacaoResponse|EzCatalogoStructSalvarVariacaoResponse
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
