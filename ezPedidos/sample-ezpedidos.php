<?php
/**
 * Test with EzPedidos for 'http://services03.ezcommerce.com.br/pedidows.svc?wsdl'
 * @package EzPedidos
 * @date 2015-03-31
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/EzPedidosAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a EzPedidosWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[EzPedidosWsdlClass::WSDL_URL] = 'http://services03.ezcommerce.com.br/pedidows.svc?wsdl';
 * $wsdl[EzPedidosWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[EzPedidosWsdlClass::WSDL_TRACE] = true;
 * $wsdl[EzPedidosWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[EzPedidosWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new EzPedidosWsdlClass($wsdl);
 */
/**
 * Examples
 */

$wsdl = array();
$wsdl[EzPedidosWsdlClass::WSDL_URL] = 'http://services03.ezcommerce.com.br/pedidows.svc?wsdl';
$wsdl[EzPedidosWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[EzPedidosWsdlClass::WSDL_TRACE] = true;
$wsdl[EzPedidosWsdlClass::WSDL_LOGIN] = 'svclaris';
$wsdl[EzPedidosWsdlClass::WSDL_PASSWD] = '$vcl4r1$';

$wsdlObject = new EzPedidosWsdlClass($wsdl);

$ezPedidosServicePedidos = new EzPedidosServicePedidos();
echo '<pre>';
if($ezPedidosServicePedidos->PedidosDisponiveis())
    print_r($ezPedidosServicePedidos->getResult());
else
    print_r($ezPedidosServicePedidos->getLastError());
echo '</pre>';
exit;
/*************************************
 * Example for EzPedidosServicePedidos
 */
$ezPedidosServicePedidos = new EzPedidosServicePedidos();
// sample call for EzPedidosServicePedidos::PedidosDisponiveisComFiltro()
if($ezPedidosServicePedidos->PedidosDisponiveisComFiltro(new EzPedidosStructPedidosDisponiveisComFiltro(/*** update parameters list ***/)))
    print_r($ezPedidosServicePedidos->getResult());
else
    print_r($ezPedidosServicePedidos->getLastError());
// sample call for EzPedidosServicePedidos::PedidosDisponiveis()
if($ezPedidosServicePedidos->PedidosDisponiveis())
    print_r($ezPedidosServicePedidos->getResult());
else
    print_r($ezPedidosServicePedidos->getLastError());
// sample call for EzPedidosServicePedidos::PedidosAtualizados()
if($ezPedidosServicePedidos->PedidosAtualizados())
    print_r($ezPedidosServicePedidos->getResult());
else
    print_r($ezPedidosServicePedidos->getLastError());

/**************************************
 * Example for EzPedidosServiceConfirma
 */
$ezPedidosServiceConfirma = new EzPedidosServiceConfirma();
// sample call for EzPedidosServiceConfirma::ConfirmaRecebimentoPedido()
if($ezPedidosServiceConfirma->ConfirmaRecebimentoPedido(new EzPedidosStructConfirmaRecebimentoPedido(/*** update parameters list ***/)))
    print_r($ezPedidosServiceConfirma->getResult());
else
    print_r($ezPedidosServiceConfirma->getLastError());
// sample call for EzPedidosServiceConfirma::ConfirmaRecebimentoPedidoAtualizado()
if($ezPedidosServiceConfirma->ConfirmaRecebimentoPedidoAtualizado(new EzPedidosStructConfirmaRecebimentoPedidoAtualizado(/*** update parameters list ***/)))
    print_r($ezPedidosServiceConfirma->getResult());
else
    print_r($ezPedidosServiceConfirma->getLastError());
// sample call for EzPedidosServiceConfirma::ConfirmaRecebimentoPedidoLst()
if($ezPedidosServiceConfirma->ConfirmaRecebimentoPedidoLst(new EzPedidosStructConfirmaRecebimentoPedidoLst(/*** update parameters list ***/)))
    print_r($ezPedidosServiceConfirma->getResult());
else
    print_r($ezPedidosServiceConfirma->getLastError());
// sample call for EzPedidosServiceConfirma::ConfirmaRecebimentoPedidoAtualizadoLst()
if($ezPedidosServiceConfirma->ConfirmaRecebimentoPedidoAtualizadoLst(new EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLst(/*** update parameters list ***/)))
    print_r($ezPedidosServiceConfirma->getResult());
else
    print_r($ezPedidosServiceConfirma->getLastError());

/***************************************
 * Example for EzPedidosServiceAtualizar
 */
$ezPedidosServiceAtualizar = new EzPedidosServiceAtualizar();
// sample call for EzPedidosServiceAtualizar::AtualizarStatusPedido()
if($ezPedidosServiceAtualizar->AtualizarStatusPedido(new EzPedidosStructAtualizarStatusPedido(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAtualizar->getResult());
else
    print_r($ezPedidosServiceAtualizar->getLastError());
// sample call for EzPedidosServiceAtualizar::AtualizarStatusPacotePorPacoteID()
if($ezPedidosServiceAtualizar->AtualizarStatusPacotePorPacoteID(new EzPedidosStructAtualizarStatusPacotePorPacoteID(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAtualizar->getResult());
else
    print_r($ezPedidosServiceAtualizar->getLastError());
// sample call for EzPedidosServiceAtualizar::AtualizarStatusPacotePorCodigoBarras()
if($ezPedidosServiceAtualizar->AtualizarStatusPacotePorCodigoBarras(new EzPedidosStructAtualizarStatusPacotePorCodigoBarras(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAtualizar->getResult());
else
    print_r($ezPedidosServiceAtualizar->getLastError());
// sample call for EzPedidosServiceAtualizar::AtualizarStatusPacotePorObjeto()
if($ezPedidosServiceAtualizar->AtualizarStatusPacotePorObjeto(new EzPedidosStructAtualizarStatusPacotePorObjeto(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAtualizar->getResult());
else
    print_r($ezPedidosServiceAtualizar->getLastError());

/***********************************
 * Example for EzPedidosServiceCriar
 */
$ezPedidosServiceCriar = new EzPedidosServiceCriar();
// sample call for EzPedidosServiceCriar::CriarPacote()
if($ezPedidosServiceCriar->CriarPacote(new EzPedidosStructCriarPacote(/*** update parameters list ***/)))
    print_r($ezPedidosServiceCriar->getResult());
else
    print_r($ezPedidosServiceCriar->getLastError());
// sample call for EzPedidosServiceCriar::CriarPacoteEntrega()
if($ezPedidosServiceCriar->CriarPacoteEntrega(new EzPedidosStructCriarPacoteEntrega(/*** update parameters list ***/)))
    print_r($ezPedidosServiceCriar->getResult());
else
    print_r($ezPedidosServiceCriar->getLastError());

/*************************************
 * Example for EzPedidosServiceRemover
 */
$ezPedidosServiceRemover = new EzPedidosServiceRemover();
// sample call for EzPedidosServiceRemover::RemoverPacotePorPacoteID()
if($ezPedidosServiceRemover->RemoverPacotePorPacoteID(new EzPedidosStructRemoverPacotePorPacoteID(/*** update parameters list ***/)))
    print_r($ezPedidosServiceRemover->getResult());
else
    print_r($ezPedidosServiceRemover->getLastError());
// sample call for EzPedidosServiceRemover::RemoverPacotePorCodigoBarras()
if($ezPedidosServiceRemover->RemoverPacotePorCodigoBarras(new EzPedidosStructRemoverPacotePorCodigoBarras(/*** update parameters list ***/)))
    print_r($ezPedidosServiceRemover->getResult());
else
    print_r($ezPedidosServiceRemover->getLastError());
// sample call for EzPedidosServiceRemover::RemoverPacoteEntregaPorPacoteID()
if($ezPedidosServiceRemover->RemoverPacoteEntregaPorPacoteID(new EzPedidosStructRemoverPacoteEntregaPorPacoteID(/*** update parameters list ***/)))
    print_r($ezPedidosServiceRemover->getResult());
else
    print_r($ezPedidosServiceRemover->getLastError());
// sample call for EzPedidosServiceRemover::RemoverProdutoPacote()
if($ezPedidosServiceRemover->RemoverProdutoPacote(new EzPedidosStructRemoverProdutoPacote(/*** update parameters list ***/)))
    print_r($ezPedidosServiceRemover->getResult());
else
    print_r($ezPedidosServiceRemover->getLastError());
// sample call for EzPedidosServiceRemover::RemoverProdutoPacoteEntrega()
if($ezPedidosServiceRemover->RemoverProdutoPacoteEntrega(new EzPedidosStructRemoverProdutoPacoteEntrega(/*** update parameters list ***/)))
    print_r($ezPedidosServiceRemover->getResult());
else
    print_r($ezPedidosServiceRemover->getLastError());

/***************************************
 * Example for EzPedidosServiceAdicionar
 */
$ezPedidosServiceAdicionar = new EzPedidosServiceAdicionar();
// sample call for EzPedidosServiceAdicionar::AdicionarProdutoPacote()
if($ezPedidosServiceAdicionar->AdicionarProdutoPacote(new EzPedidosStructAdicionarProdutoPacote(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAdicionar->getResult());
else
    print_r($ezPedidosServiceAdicionar->getLastError());
// sample call for EzPedidosServiceAdicionar::AdicionarProdutoPacoteEntrega()
if($ezPedidosServiceAdicionar->AdicionarProdutoPacoteEntrega(new EzPedidosStructAdicionarProdutoPacoteEntrega(/*** update parameters list ***/)))
    print_r($ezPedidosServiceAdicionar->getResult());
else
    print_r($ezPedidosServiceAdicionar->getLastError());

/************************************
 * Example for EzPedidosServiceSalvar
 */
$ezPedidosServiceSalvar = new EzPedidosServiceSalvar();
// sample call for EzPedidosServiceSalvar::SalvarCupomDesconto()
if($ezPedidosServiceSalvar->SalvarCupomDesconto(new EzPedidosStructSalvarCupomDesconto(/*** update parameters list ***/)))
    print_r($ezPedidosServiceSalvar->getResult());
else
    print_r($ezPedidosServiceSalvar->getLastError());
