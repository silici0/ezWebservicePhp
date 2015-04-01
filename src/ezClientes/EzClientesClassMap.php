<?php
/**
 * File for the class which returns the class map definition
 * @package EzClientes
 * @date 2015-03-31
 */
/**
 * Class which returns the class map definition by the static method EzClientesClassMap::classMap()
 * @package EzClientes
 * @date 2015-03-31
 */
class EzClientesClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AcompanhamentoStatus' => 'EzClientesStructAcompanhamentoStatus',
  'ArrayOfAssinante' => 'EzClientesStructArrayOfAssinante',
  'ArrayOfAssociacao' => 'EzClientesStructArrayOfAssociacao',
  'ArrayOfCampoExtendido' => 'EzClientesStructArrayOfCampoExtendido',
  'ArrayOfCliente' => 'EzClientesStructArrayOfCliente',
  'ArrayOfListaProdutosLista' => 'EzClientesStructArrayOfListaProdutosLista',
  'ArrayOfMenu' => 'EzClientesStructArrayOfMenu',
  'ArrayOfMenuRelation' => 'EzClientesStructArrayOfMenuRelation',
  'ArrayOfPacoteProduto' => 'EzClientesStructArrayOfPacoteProduto',
  'ArrayOfPedido' => 'EzClientesStructArrayOfPedido',
  'ArrayOfPedidoAcompanhamento' => 'EzClientesStructArrayOfPedidoAcompanhamento',
  'ArrayOfPedidoItem' => 'EzClientesStructArrayOfPedidoItem',
  'ArrayOfRespostaProcessamento' => 'EzClientesStructArrayOfRespostaProcessamento',
  'ArrayOfRespostaProcessamentoErro' => 'EzClientesStructArrayOfRespostaProcessamentoErro',
  'ArrayOfanyType' => 'EzClientesStructArrayOfanyType',
  'ArrayOfint' => 'EzClientesStructArrayOfint',
  'ArrayOfstring' => 'EzClientesStructArrayOfstring',
  'Assinante' => 'EzClientesStructAssinante',
  'AssinantesDisponiveis' => 'EzClientesStructAssinantesDisponiveis',
  'AssinantesDisponiveisResponse' => 'EzClientesStructAssinantesDisponiveisResponse',
  'Associacao' => 'EzClientesStructAssociacao',
  'CampoExtendido' => 'EzClientesStructCampoExtendido',
  'Cliente' => 'EzClientesStructCliente',
  'ClientesDisponiveis' => 'EzClientesStructClientesDisponiveis',
  'ClientesDisponiveisResponse' => 'EzClientesStructClientesDisponiveisResponse',
  'ConfirmaRecebimentoAssinante' => 'EzClientesStructConfirmaRecebimentoAssinante',
  'ConfirmaRecebimentoAssinanteLst' => 'EzClientesStructConfirmaRecebimentoAssinanteLst',
  'ConfirmaRecebimentoAssinanteLstResponse' => 'EzClientesStructConfirmaRecebimentoAssinanteLstResponse',
  'ConfirmaRecebimentoAssinanteResponse' => 'EzClientesStructConfirmaRecebimentoAssinanteResponse',
  'ConfirmaRecebimentoCliente' => 'EzClientesStructConfirmaRecebimentoCliente',
  'ConfirmaRecebimentoClienteLst' => 'EzClientesStructConfirmaRecebimentoClienteLst',
  'ConfirmaRecebimentoClienteLstResponse' => 'EzClientesStructConfirmaRecebimentoClienteLstResponse',
  'ConfirmaRecebimentoClienteResponse' => 'EzClientesStructConfirmaRecebimentoClienteResponse',
  'ConfirmacaoPagamento' => 'EzClientesStructConfirmacaoPagamento',
  'CupomDesconto' => 'EzClientesStructCupomDesconto',
  'EntidadeBase' => 'EzClientesStructEntidadeBase',
  'Estoque' => 'EzClientesStructEstoque',
  'FormaDePagamento' => 'EzClientesStructFormaDePagamento',
  'Fornecedor' => 'EzClientesStructFornecedor',
  'ListaProdutos' => 'EzClientesStructListaProdutos',
  'ListaProdutosLista' => 'EzClientesStructListaProdutosLista',
  'Marca' => 'EzClientesStructMarca',
  'Menu' => 'EzClientesStructMenu',
  'MenuRelation' => 'EzClientesStructMenuRelation',
  'Pacote' => 'EzClientesStructPacote',
  'PacoteAcompanhamentoStatus' => 'EzClientesStructPacoteAcompanhamentoStatus',
  'PacoteProduto' => 'EzClientesStructPacoteProduto',
  'Pedido' => 'EzClientesStructPedido',
  'PedidoAcompanhamento' => 'EzClientesStructPedidoAcompanhamento',
  'PedidoItem' => 'EzClientesStructPedidoItem',
  'Preco' => 'EzClientesStructPreco',
  'Produto' => 'EzClientesStructProduto',
  'RespostaProcessamento' => 'EzClientesStructRespostaProcessamento',
  'RespostaProcessamentoErro' => 'EzClientesStructRespostaProcessamentoErro',
  'SiteCategoria' => 'EzClientesStructSiteCategoria',
  'StatusPedido' => 'EzClientesStructStatusPedido',
  'Subvariacao' => 'EzClientesStructSubvariacao',
  'Variacao' => 'EzClientesStructVariacao',
);
    }
}
