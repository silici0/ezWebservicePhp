<?php
/**
 * File for the class which returns the class map definition
 * @package EzCatalogo
 * @date 2015-03-31
 */
/**
 * Class which returns the class map definition by the static method EzCatalogoClassMap::classMap()
 * @package EzCatalogo
 * @date 2015-03-31
 */
class EzCatalogoClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AcompanhamentoStatus' => 'EzCatalogoStructAcompanhamentoStatus',
  'ArrayOfAssinante' => 'EzCatalogoStructArrayOfAssinante',
  'ArrayOfAssociacao' => 'EzCatalogoStructArrayOfAssociacao',
  'ArrayOfCampoExtendido' => 'EzCatalogoStructArrayOfCampoExtendido',
  'ArrayOfCliente' => 'EzCatalogoStructArrayOfCliente',
  'ArrayOfEstoque' => 'EzCatalogoStructArrayOfEstoque',
  'ArrayOfFornecedor' => 'EzCatalogoStructArrayOfFornecedor',
  'ArrayOfListaProdutosLista' => 'EzCatalogoStructArrayOfListaProdutosLista',
  'ArrayOfMarca' => 'EzCatalogoStructArrayOfMarca',
  'ArrayOfMenu' => 'EzCatalogoStructArrayOfMenu',
  'ArrayOfMenuRelation' => 'EzCatalogoStructArrayOfMenuRelation',
  'ArrayOfPacoteProduto' => 'EzCatalogoStructArrayOfPacoteProduto',
  'ArrayOfPedido' => 'EzCatalogoStructArrayOfPedido',
  'ArrayOfPedidoAcompanhamento' => 'EzCatalogoStructArrayOfPedidoAcompanhamento',
  'ArrayOfPedidoItem' => 'EzCatalogoStructArrayOfPedidoItem',
  'ArrayOfPreco' => 'EzCatalogoStructArrayOfPreco',
  'ArrayOfProduto' => 'EzCatalogoStructArrayOfProduto',
  'ArrayOfRespostaProcessamento' => 'EzCatalogoStructArrayOfRespostaProcessamento',
  'ArrayOfRespostaProcessamentoErro' => 'EzCatalogoStructArrayOfRespostaProcessamentoErro',
  'ArrayOfanyType' => 'EzCatalogoStructArrayOfanyType',
  'ArrayOfint' => 'EzCatalogoStructArrayOfint',
  'ArrayOfstring' => 'EzCatalogoStructArrayOfstring',
  'Assinante' => 'EzCatalogoStructAssinante',
  'Associacao' => 'EzCatalogoStructAssociacao',
  'BuscaMenusPersonalizados' => 'EzCatalogoStructBuscaMenusPersonalizados',
  'BuscaMenusPersonalizadosResponse' => 'EzCatalogoStructBuscaMenusPersonalizadosResponse',
  'BuscaRelacaoMenuCategoria' => 'EzCatalogoStructBuscaRelacaoMenuCategoria',
  'BuscaRelacaoMenuCategoriaResponse' => 'EzCatalogoStructBuscaRelacaoMenuCategoriaResponse',
  'CampoExtendido' => 'EzCatalogoStructCampoExtendido',
  'Cliente' => 'EzCatalogoStructCliente',
  'ConfirmacaoPagamento' => 'EzCatalogoStructConfirmacaoPagamento',
  'CupomDesconto' => 'EzCatalogoStructCupomDesconto',
  'EntidadeBase' => 'EzCatalogoStructEntidadeBase',
  'Estoque' => 'EzCatalogoStructEstoque',
  'ExcluirFornecedor' => 'EzCatalogoStructExcluirFornecedor',
  'ExcluirFornecedorResponse' => 'EzCatalogoStructExcluirFornecedorResponse',
  'ExcluirMarca' => 'EzCatalogoStructExcluirMarca',
  'ExcluirMarcaResponse' => 'EzCatalogoStructExcluirMarcaResponse',
  'ExcluirProduto' => 'EzCatalogoStructExcluirProduto',
  'ExcluirProdutoResponse' => 'EzCatalogoStructExcluirProdutoResponse',
  'ExcluirSiteCategoria' => 'EzCatalogoStructExcluirSiteCategoria',
  'ExcluirSiteCategoriaResponse' => 'EzCatalogoStructExcluirSiteCategoriaResponse',
  'ExcluirSubVariacao' => 'EzCatalogoStructExcluirSubVariacao',
  'ExcluirSubVariacaoResponse' => 'EzCatalogoStructExcluirSubVariacaoResponse',
  'ExcluirVariacao' => 'EzCatalogoStructExcluirVariacao',
  'ExcluirVariacaoResponse' => 'EzCatalogoStructExcluirVariacaoResponse',
  'FormaDePagamento' => 'EzCatalogoStructFormaDePagamento',
  'Fornecedor' => 'EzCatalogoStructFornecedor',
  'ListaProdutos' => 'EzCatalogoStructListaProdutos',
  'ListaProdutosLista' => 'EzCatalogoStructListaProdutosLista',
  'Marca' => 'EzCatalogoStructMarca',
  'Menu' => 'EzCatalogoStructMenu',
  'MenuRelation' => 'EzCatalogoStructMenuRelation',
  'Pacote' => 'EzCatalogoStructPacote',
  'PacoteAcompanhamentoStatus' => 'EzCatalogoStructPacoteAcompanhamentoStatus',
  'PacoteProduto' => 'EzCatalogoStructPacoteProduto',
  'Pedido' => 'EzCatalogoStructPedido',
  'PedidoAcompanhamento' => 'EzCatalogoStructPedidoAcompanhamento',
  'PedidoItem' => 'EzCatalogoStructPedidoItem',
  'Preco' => 'EzCatalogoStructPreco',
  'Produto' => 'EzCatalogoStructProduto',
  'RespostaProcessamento' => 'EzCatalogoStructRespostaProcessamento',
  'RespostaProcessamentoErro' => 'EzCatalogoStructRespostaProcessamentoErro',
  'SalvarEstoque' => 'EzCatalogoStructSalvarEstoque',
  'SalvarEstoqueLst' => 'EzCatalogoStructSalvarEstoqueLst',
  'SalvarEstoqueLstResponse' => 'EzCatalogoStructSalvarEstoqueLstResponse',
  'SalvarEstoqueResponse' => 'EzCatalogoStructSalvarEstoqueResponse',
  'SalvarFornecedor' => 'EzCatalogoStructSalvarFornecedor',
  'SalvarFornecedorLst' => 'EzCatalogoStructSalvarFornecedorLst',
  'SalvarFornecedorLstResponse' => 'EzCatalogoStructSalvarFornecedorLstResponse',
  'SalvarFornecedorResponse' => 'EzCatalogoStructSalvarFornecedorResponse',
  'SalvarListaProdutos' => 'EzCatalogoStructSalvarListaProdutos',
  'SalvarListaProdutosResponse' => 'EzCatalogoStructSalvarListaProdutosResponse',
  'SalvarMarca' => 'EzCatalogoStructSalvarMarca',
  'SalvarMarcaLst' => 'EzCatalogoStructSalvarMarcaLst',
  'SalvarMarcaLstResponse' => 'EzCatalogoStructSalvarMarcaLstResponse',
  'SalvarMarcaResponse' => 'EzCatalogoStructSalvarMarcaResponse',
  'SalvarPreco' => 'EzCatalogoStructSalvarPreco',
  'SalvarPrecoLst' => 'EzCatalogoStructSalvarPrecoLst',
  'SalvarPrecoLstResponse' => 'EzCatalogoStructSalvarPrecoLstResponse',
  'SalvarPrecoResponse' => 'EzCatalogoStructSalvarPrecoResponse',
  'SalvarProduto' => 'EzCatalogoStructSalvarProduto',
  'SalvarProdutoLst' => 'EzCatalogoStructSalvarProdutoLst',
  'SalvarProdutoLstResponse' => 'EzCatalogoStructSalvarProdutoLstResponse',
  'SalvarProdutoResponse' => 'EzCatalogoStructSalvarProdutoResponse',
  'SalvarSiteCategoria' => 'EzCatalogoStructSalvarSiteCategoria',
  'SalvarSiteCategoriaResponse' => 'EzCatalogoStructSalvarSiteCategoriaResponse',
  'SalvarSubVariacao' => 'EzCatalogoStructSalvarSubVariacao',
  'SalvarSubVariacaoResponse' => 'EzCatalogoStructSalvarSubVariacaoResponse',
  'SalvarVariacao' => 'EzCatalogoStructSalvarVariacao',
  'SalvarVariacaoResponse' => 'EzCatalogoStructSalvarVariacaoResponse',
  'SetaRelacaoMenuSecao' => 'EzCatalogoStructSetaRelacaoMenuSecao',
  'SetaRelacaoMenuSecaoResponse' => 'EzCatalogoStructSetaRelacaoMenuSecaoResponse',
  'SiteCategoria' => 'EzCatalogoStructSiteCategoria',
  'StatusPedido' => 'EzCatalogoStructStatusPedido',
  'Subvariacao' => 'EzCatalogoStructSubvariacao',
  'Variacao' => 'EzCatalogoStructVariacao',
);
    }
}
