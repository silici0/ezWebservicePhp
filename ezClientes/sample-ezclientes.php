<?php
/**
 * Test with EzClientes for 'http://services03.ezcommerce.com.br/clientews.svc?wsdl'
 * @package EzClientes
 * @date 2015-03-31
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/EzClientesAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a EzClientesWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[EzClientesWsdlClass::WSDL_URL] = 'http://services03.ezcommerce.com.br/clientews.svc?wsdl';
 * $wsdl[EzClientesWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[EzClientesWsdlClass::WSDL_TRACE] = true;
 * $wsdl[EzClientesWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[EzClientesWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new EzClientesWsdlClass($wsdl);
 */
/**
 * Examples
 */


/***************************************
 * Example for EzClientesServiceClientes
 */
$ezClientesServiceClientes = new EzClientesServiceClientes();
// sample call for EzClientesServiceClientes::ClientesDisponiveis()
if($ezClientesServiceClientes->ClientesDisponiveis())
    print_r($ezClientesServiceClientes->getResult());
else
    print_r($ezClientesServiceClientes->getLastError());

/*****************************************
 * Example for EzClientesServiceAssinantes
 */
$ezClientesServiceAssinantes = new EzClientesServiceAssinantes();
// sample call for EzClientesServiceAssinantes::AssinantesDisponiveis()
if($ezClientesServiceAssinantes->AssinantesDisponiveis())
    print_r($ezClientesServiceAssinantes->getResult());
else
    print_r($ezClientesServiceAssinantes->getLastError());

/***************************************
 * Example for EzClientesServiceConfirma
 */
$ezClientesServiceConfirma = new EzClientesServiceConfirma();
// sample call for EzClientesServiceConfirma::ConfirmaRecebimentoCliente()
if($ezClientesServiceConfirma->ConfirmaRecebimentoCliente(new EzClientesStructConfirmaRecebimentoCliente(/*** update parameters list ***/)))
    print_r($ezClientesServiceConfirma->getResult());
else
    print_r($ezClientesServiceConfirma->getLastError());
// sample call for EzClientesServiceConfirma::ConfirmaRecebimentoClienteLst()
if($ezClientesServiceConfirma->ConfirmaRecebimentoClienteLst(new EzClientesStructConfirmaRecebimentoClienteLst(/*** update parameters list ***/)))
    print_r($ezClientesServiceConfirma->getResult());
else
    print_r($ezClientesServiceConfirma->getLastError());
// sample call for EzClientesServiceConfirma::ConfirmaRecebimentoAssinante()
if($ezClientesServiceConfirma->ConfirmaRecebimentoAssinante(new EzClientesStructConfirmaRecebimentoAssinante(/*** update parameters list ***/)))
    print_r($ezClientesServiceConfirma->getResult());
else
    print_r($ezClientesServiceConfirma->getLastError());
// sample call for EzClientesServiceConfirma::ConfirmaRecebimentoAssinanteLst()
if($ezClientesServiceConfirma->ConfirmaRecebimentoAssinanteLst(new EzClientesStructConfirmaRecebimentoAssinanteLst(/*** update parameters list ***/)))
    print_r($ezClientesServiceConfirma->getResult());
else
    print_r($ezClientesServiceConfirma->getLastError());
