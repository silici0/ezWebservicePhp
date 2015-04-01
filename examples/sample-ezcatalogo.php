<?php
/**
 * Test with EzCatalogo for 'http://services03.ezcommerce.com.br/catalogows.svc?wsdl'
 * @package EzCatalogo
 * @date 2015-03-31
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/../src/EzCatalogoAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a EzCatalogoWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[EzCatalogoWsdlClass::WSDL_URL] = 'http://services03.ezcommerce.com.br/catalogows.svc?wsdl';
 * $wsdl[EzCatalogoWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[EzCatalogoWsdlClass::WSDL_TRACE] = true;
 * $wsdl[EzCatalogoWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[EzCatalogoWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new EzCatalogoWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*************************************
 * Example for EzCatalogoServiceSalvar
 */
$ezCatalogoServiceSalvar = new EzCatalogoServiceSalvar();
// sample call for EzCatalogoServiceSalvar::SalvarMarca()
if($ezCatalogoServiceSalvar->SalvarMarca(new EzCatalogoStructSalvarMarca(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarMarcaLst()
if($ezCatalogoServiceSalvar->SalvarMarcaLst(new EzCatalogoStructSalvarMarcaLst(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarSiteCategoria()
if($ezCatalogoServiceSalvar->SalvarSiteCategoria(new EzCatalogoStructSalvarSiteCategoria(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarFornecedor()
if($ezCatalogoServiceSalvar->SalvarFornecedor(new EzCatalogoStructSalvarFornecedor(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarFornecedorLst()
if($ezCatalogoServiceSalvar->SalvarFornecedorLst(new EzCatalogoStructSalvarFornecedorLst(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarProduto()
if($ezCatalogoServiceSalvar->SalvarProduto(new EzCatalogoStructSalvarProduto(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarProdutoLst()
if($ezCatalogoServiceSalvar->SalvarProdutoLst(new EzCatalogoStructSalvarProdutoLst(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarVariacao()
if($ezCatalogoServiceSalvar->SalvarVariacao(new EzCatalogoStructSalvarVariacao(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarSubVariacao()
if($ezCatalogoServiceSalvar->SalvarSubVariacao(new EzCatalogoStructSalvarSubVariacao(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarPreco()
if($ezCatalogoServiceSalvar->SalvarPreco(new EzCatalogoStructSalvarPreco(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarPrecoLst()
if($ezCatalogoServiceSalvar->SalvarPrecoLst(new EzCatalogoStructSalvarPrecoLst(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarEstoque()
if($ezCatalogoServiceSalvar->SalvarEstoque(new EzCatalogoStructSalvarEstoque(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarEstoqueLst()
if($ezCatalogoServiceSalvar->SalvarEstoqueLst(new EzCatalogoStructSalvarEstoqueLst(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());
// sample call for EzCatalogoServiceSalvar::SalvarListaProdutos()
if($ezCatalogoServiceSalvar->SalvarListaProdutos(new EzCatalogoStructSalvarListaProdutos(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSalvar->getResult());
else
    print_r($ezCatalogoServiceSalvar->getLastError());

/**************************************
 * Example for EzCatalogoServiceExcluir
 */
$ezCatalogoServiceExcluir = new EzCatalogoServiceExcluir();
// sample call for EzCatalogoServiceExcluir::ExcluirMarca()
if($ezCatalogoServiceExcluir->ExcluirMarca(new EzCatalogoStructExcluirMarca(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());
// sample call for EzCatalogoServiceExcluir::ExcluirSiteCategoria()
if($ezCatalogoServiceExcluir->ExcluirSiteCategoria(new EzCatalogoStructExcluirSiteCategoria(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());
// sample call for EzCatalogoServiceExcluir::ExcluirFornecedor()
if($ezCatalogoServiceExcluir->ExcluirFornecedor(new EzCatalogoStructExcluirFornecedor(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());
// sample call for EzCatalogoServiceExcluir::ExcluirProduto()
if($ezCatalogoServiceExcluir->ExcluirProduto(new EzCatalogoStructExcluirProduto(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());
// sample call for EzCatalogoServiceExcluir::ExcluirVariacao()
if($ezCatalogoServiceExcluir->ExcluirVariacao(new EzCatalogoStructExcluirVariacao(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());
// sample call for EzCatalogoServiceExcluir::ExcluirSubVariacao()
if($ezCatalogoServiceExcluir->ExcluirSubVariacao(new EzCatalogoStructExcluirSubVariacao(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceExcluir->getResult());
else
    print_r($ezCatalogoServiceExcluir->getLastError());

/************************************
 * Example for EzCatalogoServiceBusca
 */
$ezCatalogoServiceBusca = new EzCatalogoServiceBusca();
// sample call for EzCatalogoServiceBusca::BuscaMenusPersonalizados()
if($ezCatalogoServiceBusca->BuscaMenusPersonalizados())
    print_r($ezCatalogoServiceBusca->getResult());
else
    print_r($ezCatalogoServiceBusca->getLastError());
// sample call for EzCatalogoServiceBusca::BuscaRelacaoMenuCategoria()
if($ezCatalogoServiceBusca->BuscaRelacaoMenuCategoria(new EzCatalogoStructBuscaRelacaoMenuCategoria(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceBusca->getResult());
else
    print_r($ezCatalogoServiceBusca->getLastError());

/***********************************
 * Example for EzCatalogoServiceSeta
 */
$ezCatalogoServiceSeta = new EzCatalogoServiceSeta();
// sample call for EzCatalogoServiceSeta::SetaRelacaoMenuSecao()
if($ezCatalogoServiceSeta->SetaRelacaoMenuSecao(new EzCatalogoStructSetaRelacaoMenuSecao(/*** update parameters list ***/)))
    print_r($ezCatalogoServiceSeta->getResult());
else
    print_r($ezCatalogoServiceSeta->getLastError());
