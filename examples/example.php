<?php
ini_set('default_socket_timeout', 600);

require_once dirname(__FILE__) . '/../src/ezPedidos/EzPedidosAutoload.php';

$wsdl = array();
$wsdl[EzPedidosWsdlClass::WSDL_URL] = 'http://services03.ezcommerce.com.br/pedidows.svc?wsdl';
$wsdl[EzPedidosWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[EzPedidosWsdlClass::WSDL_TRACE] = true;
$wsdl[EzPedidosWsdlClass::WSDL_LOGIN] = 'usuario';
$wsdl[EzPedidosWsdlClass::WSDL_PASSWD] = 'senha';

$ezPedidosServicePedidos = new EzPedidosServicePedidos($wsdl);
echo '<pre>';
if($ezPedidosServicePedidos->PedidosDisponiveis())
    print_r($ezPedidosServicePedidos->getResult());
else
    print_r($ezPedidosServicePedidos->getLastError());
echo '</pre>';
exit;