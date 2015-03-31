<?php
/**
 * File for the class which returns the class map definition
 * @package EzPedidos
 * @date 2015-03-31
 */
/**
 * Class which returns the class map definition by the static method EzPedidosClassMap::classMap()
 * @package EzPedidos
 * @date 2015-03-31
 */
class EzPedidosClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AcompanhamentoStatus' => 'EzPedidosStructAcompanhamentoStatus',
  'AdicionarProdutoPacote' => 'EzPedidosStructAdicionarProdutoPacote',
  'AdicionarProdutoPacoteEntrega' => 'EzPedidosStructAdicionarProdutoPacoteEntrega',
  'AdicionarProdutoPacoteEntregaResponse' => 'EzPedidosStructAdicionarProdutoPacoteEntregaResponse',
  'AdicionarProdutoPacoteResponse' => 'EzPedidosStructAdicionarProdutoPacoteResponse',
  'ArrayOfAssinante' => 'EzPedidosStructArrayOfAssinante',
  'ArrayOfAssociacao' => 'EzPedidosStructArrayOfAssociacao',
  'ArrayOfCampoExtendido' => 'EzPedidosStructArrayOfCampoExtendido',
  'ArrayOfCliente' => 'EzPedidosStructArrayOfCliente',
  'ArrayOfListaProdutosLista' => 'EzPedidosStructArrayOfListaProdutosLista',
  'ArrayOfMenu' => 'EzPedidosStructArrayOfMenu',
  'ArrayOfMenuRelation' => 'EzPedidosStructArrayOfMenuRelation',
  'ArrayOfPacoteEntregaItem' => 'EzPedidosStructArrayOfPacoteEntregaItem',
  'ArrayOfPacoteProduto' => 'EzPedidosStructArrayOfPacoteProduto',
  'ArrayOfPedido' => 'EzPedidosStructArrayOfPedido',
  'ArrayOfPedidoAcompanhamento' => 'EzPedidosStructArrayOfPedidoAcompanhamento',
  'ArrayOfPedidoItem' => 'EzPedidosStructArrayOfPedidoItem',
  'ArrayOfRespostaProcessamento' => 'EzPedidosStructArrayOfRespostaProcessamento',
  'ArrayOfRespostaProcessamentoErro' => 'EzPedidosStructArrayOfRespostaProcessamentoErro',
  'ArrayOfanyType' => 'EzPedidosStructArrayOfanyType',
  'ArrayOfint' => 'EzPedidosStructArrayOfint',
  'ArrayOfstring' => 'EzPedidosStructArrayOfstring',
  'Assinante' => 'EzPedidosStructAssinante',
  'Associacao' => 'EzPedidosStructAssociacao',
  'AtualizarStatusPacotePorCodigoBarras' => 'EzPedidosStructAtualizarStatusPacotePorCodigoBarras',
  'AtualizarStatusPacotePorCodigoBarrasResponse' => 'EzPedidosStructAtualizarStatusPacotePorCodigoBarrasResponse',
  'AtualizarStatusPacotePorObjeto' => 'EzPedidosStructAtualizarStatusPacotePorObjeto',
  'AtualizarStatusPacotePorObjetoResponse' => 'EzPedidosStructAtualizarStatusPacotePorObjetoResponse',
  'AtualizarStatusPacotePorPacoteID' => 'EzPedidosStructAtualizarStatusPacotePorPacoteID',
  'AtualizarStatusPacotePorPacoteIDResponse' => 'EzPedidosStructAtualizarStatusPacotePorPacoteIDResponse',
  'AtualizarStatusPedido' => 'EzPedidosStructAtualizarStatusPedido',
  'AtualizarStatusPedidoResponse' => 'EzPedidosStructAtualizarStatusPedidoResponse',
  'CampoExtendido' => 'EzPedidosStructCampoExtendido',
  'Cliente' => 'EzPedidosStructCliente',
  'ConfirmaRecebimentoPedido' => 'EzPedidosStructConfirmaRecebimentoPedido',
  'ConfirmaRecebimentoPedidoAtualizado' => 'EzPedidosStructConfirmaRecebimentoPedidoAtualizado',
  'ConfirmaRecebimentoPedidoAtualizadoLst' => 'EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLst',
  'ConfirmaRecebimentoPedidoAtualizadoLstResponse' => 'EzPedidosStructConfirmaRecebimentoPedidoAtualizadoLstResponse',
  'ConfirmaRecebimentoPedidoAtualizadoResponse' => 'EzPedidosStructConfirmaRecebimentoPedidoAtualizadoResponse',
  'ConfirmaRecebimentoPedidoLst' => 'EzPedidosStructConfirmaRecebimentoPedidoLst',
  'ConfirmaRecebimentoPedidoLstResponse' => 'EzPedidosStructConfirmaRecebimentoPedidoLstResponse',
  'ConfirmaRecebimentoPedidoResponse' => 'EzPedidosStructConfirmaRecebimentoPedidoResponse',
  'ConfirmacaoPagamento' => 'EzPedidosStructConfirmacaoPagamento',
  'CriarPacote' => 'EzPedidosStructCriarPacote',
  'CriarPacoteEntrega' => 'EzPedidosStructCriarPacoteEntrega',
  'CriarPacoteEntregaResponse' => 'EzPedidosStructCriarPacoteEntregaResponse',
  'CriarPacoteResponse' => 'EzPedidosStructCriarPacoteResponse',
  'CupomDesconto' => 'EzPedidosStructCupomDesconto',
  'EntidadeBase' => 'EzPedidosStructEntidadeBase',
  'Estoque' => 'EzPedidosStructEstoque',
  'FormaDePagamento' => 'EzPedidosStructFormaDePagamento',
  'Fornecedor' => 'EzPedidosStructFornecedor',
  'ListaProdutos' => 'EzPedidosStructListaProdutos',
  'ListaProdutosLista' => 'EzPedidosStructListaProdutosLista',
  'Marca' => 'EzPedidosStructMarca',
  'Menu' => 'EzPedidosStructMenu',
  'MenuRelation' => 'EzPedidosStructMenuRelation',
  'Pacote' => 'EzPedidosStructPacote',
  'PacoteAcompanhamentoStatus' => 'EzPedidosStructPacoteAcompanhamentoStatus',
  'PacoteEntrega' => 'EzPedidosStructPacoteEntrega',
  'PacoteEntregaItem' => 'EzPedidosStructPacoteEntregaItem',
  'PacoteProduto' => 'EzPedidosStructPacoteProduto',
  'Pedido' => 'EzPedidosStructPedido',
  'PedidoAcompanhamento' => 'EzPedidosStructPedidoAcompanhamento',
  'PedidoFiltro' => 'EzPedidosStructPedidoFiltro',
  'PedidoItem' => 'EzPedidosStructPedidoItem',
  'PedidosAtualizados' => 'EzPedidosStructPedidosAtualizados',
  'PedidosAtualizadosResponse' => 'EzPedidosStructPedidosAtualizadosResponse',
  'PedidosDisponiveis' => 'EzPedidosStructPedidosDisponiveis',
  'PedidosDisponiveisComFiltro' => 'EzPedidosStructPedidosDisponiveisComFiltro',
  'PedidosDisponiveisComFiltroResponse' => 'EzPedidosStructPedidosDisponiveisComFiltroResponse',
  'PedidosDisponiveisResponse' => 'EzPedidosStructPedidosDisponiveisResponse',
  'Preco' => 'EzPedidosStructPreco',
  'Produto' => 'EzPedidosStructProduto',
  'RemoverPacoteEntregaPorPacoteID' => 'EzPedidosStructRemoverPacoteEntregaPorPacoteID',
  'RemoverPacoteEntregaPorPacoteIDResponse' => 'EzPedidosStructRemoverPacoteEntregaPorPacoteIDResponse',
  'RemoverPacotePorCodigoBarras' => 'EzPedidosStructRemoverPacotePorCodigoBarras',
  'RemoverPacotePorCodigoBarrasResponse' => 'EzPedidosStructRemoverPacotePorCodigoBarrasResponse',
  'RemoverPacotePorPacoteID' => 'EzPedidosStructRemoverPacotePorPacoteID',
  'RemoverPacotePorPacoteIDResponse' => 'EzPedidosStructRemoverPacotePorPacoteIDResponse',
  'RemoverProdutoPacote' => 'EzPedidosStructRemoverProdutoPacote',
  'RemoverProdutoPacoteEntrega' => 'EzPedidosStructRemoverProdutoPacoteEntrega',
  'RemoverProdutoPacoteEntregaResponse' => 'EzPedidosStructRemoverProdutoPacoteEntregaResponse',
  'RemoverProdutoPacoteResponse' => 'EzPedidosStructRemoverProdutoPacoteResponse',
  'RespostaProcessamento' => 'EzPedidosStructRespostaProcessamento',
  'RespostaProcessamentoErro' => 'EzPedidosStructRespostaProcessamentoErro',
  'SalvarCupomDesconto' => 'EzPedidosStructSalvarCupomDesconto',
  'SalvarCupomDescontoResponse' => 'EzPedidosStructSalvarCupomDescontoResponse',
  'SiteCategoria' => 'EzPedidosStructSiteCategoria',
  'StatusPedido' => 'EzPedidosStructStatusPedido',
  'Subvariacao' => 'EzPedidosStructSubvariacao',
  'Variacao' => 'EzPedidosStructVariacao',
);
    }
}
