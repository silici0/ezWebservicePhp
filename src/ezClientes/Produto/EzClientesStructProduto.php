<?php
/**
 * File for class EzClientesStructProduto
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructProduto originally named Produto
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructProduto extends EzClientesWsdlClass
{
    /**
     * The Altura
     * @var double
     */
    public $Altura;
    /**
     * The ArremateCodigos
     * @var string
     */
    public $ArremateCodigos;
    /**
     * The AssociacaoID
     * @var int
     */
    public $AssociacaoID;
    /**
     * The Associacoes
     * @var EzClientesStructArrayOfAssociacao
     */
    public $Associacoes;
    /**
     * The Ativo
     * @var boolean
     */
    public $Ativo;
    /**
     * The CamposExtendidos
     * @var EzClientesStructArrayOfCampoExtendido
     */
    public $CamposExtendidos;
    /**
     * The Classificacao
     * @var ClassificacaoProdutoEnum
     */
    public $Classificacao;
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * The Conteudo
     * @var string
     */
    public $Conteudo;
    /**
     * The Custo
     * @var decimal
     */
    public $Custo;
    /**
     * The DataEntrada
     * @var dateTime
     */
    public $DataEntrada;
    /**
     * The DataSaida
     * @var dateTime
     */
    public $DataSaida;
    /**
     * The DescricaoCurta
     * @var string
     */
    public $DescricaoCurta;
    /**
     * The DescricaoLonga
     * @var string
     */
    public $DescricaoLonga;
    /**
     * The DisponibilidadeEmEstoque
     * @var int
     */
    public $DisponibilidadeEmEstoque;
    /**
     * The DisponibilidadeSemEstoque
     * @var int
     */
    public $DisponibilidadeSemEstoque;
    /**
     * The EstoqueAtual
     * @var int
     */
    public $EstoqueAtual;
    /**
     * The EstoqueMinimo
     * @var int
     */
    public $EstoqueMinimo;
    /**
     * The EstoqueMinimoFrase
     * @var string
     */
    public $EstoqueMinimoFrase;
    /**
     * The ExibirDisponibilidade
     * @var boolean
     */
    public $ExibirDisponibilidade;
    /**
     * The FornecedorID
     * @var int
     */
    public $FornecedorID;
    /**
     * The FreteGratis
     * @var boolean
     */
    public $FreteGratis;
    /**
     * The Largura
     * @var double
     */
    public $Largura;
    /**
     * The MarcaID
     * @var int
     */
    public $MarcaID;
    /**
     * The MercadoLivreCodigos
     * @var string
     */
    public $MercadoLivreCodigos;
    /**
     * The MetaDescription
     * @var string
     */
    public $MetaDescription;
    /**
     * The MetaKeywords
     * @var string
     */
    public $MetaKeywords;
    /**
     * The MetaTitle
     * @var string
     */
    public $MetaTitle;
    /**
     * The Modelo
     * @var string
     */
    public $Modelo;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The NumeroMaximoParcelas
     * @var int
     */
    public $NumeroMaximoParcelas;
    /**
     * The Ordem
     * @var int
     */
    public $Ordem;
    /**
     * The PalavrasParaPesquisa
     * @var string
     */
    public $PalavrasParaPesquisa;
    /**
     * The Peso
     * @var double
     */
    public $Peso;
    /**
     * The PesoCubico
     * @var double
     */
    public $PesoCubico;
    /**
     * The Pontos
     * @var int
     */
    public $Pontos;
    /**
     * The PreVenda
     * @var boolean
     */
    public $PreVenda;
    /**
     * The PreVendaData
     * @var dateTime
     */
    public $PreVendaData;
    /**
     * The PreVendaLimite
     * @var int
     */
    public $PreVendaLimite;
    /**
     * The Preco
     * @var decimal
     */
    public $Preco;
    /**
     * The PrecoPromocional
     * @var decimal
     */
    public $PrecoPromocional;
    /**
     * The Presente
     * @var int
     */
    public $Presente;
    /**
     * The PresenteValor
     * @var double
     */
    public $PresenteValor;
    /**
     * The PrevalecerPreco
     * @var PrevalecerPrecoEnum
     */
    public $PrevalecerPreco;
    /**
     * The Profundidade
     * @var double
     */
    public $Profundidade;
    /**
     * The Promocao
     * @var boolean
     */
    public $Promocao;
    /**
     * The PromocaoFim
     * @var dateTime
     */
    public $PromocaoFim;
    /**
     * The PromocaoInicio
     * @var dateTime
     */
    public $PromocaoInicio;
    /**
     * The QuantidadeMaximaPorCliente
     * @var int
     */
    public $QuantidadeMaximaPorCliente;
    /**
     * The QuantidadeMinimaVenda
     * @var int
     */
    public $QuantidadeMinimaVenda;
    /**
     * The Referencia
     * @var string
     */
    public $Referencia;
    /**
     * The SemEntrega
     * @var boolean
     */
    public $SemEntrega;
    /**
     * The SiteCategoriaAlternativas
     * @var EzClientesStructArrayOfint
     */
    public $SiteCategoriaAlternativas;
    /**
     * The SiteCategoriaPrincipal
     * @var int
     */
    public $SiteCategoriaPrincipal;
    /**
     * The Taxa
     * @var decimal
     */
    public $Taxa;
    /**
     * The TermoDeAceitacao
     * @var string
     */
    public $TermoDeAceitacao;
    /**
     * The Tipo
     * @var TipoProdutoEnum
     */
    public $Tipo;
    /**
     * The TipoDisponibilidade
     * @var TipoDisponibilidadeEnum
     */
    public $TipoDisponibilidade;
    /**
     * The TipoReposicao
     * @var TipoReposicaoEnum
     */
    public $TipoReposicao;
    /**
     * The TituloSubVariacao
     * @var string
     */
    public $TituloSubVariacao;
    /**
     * The TituloVariacao
     * @var string
     */
    public $TituloVariacao;
    /**
     * The TodoOfertaCodigos
     * @var string
     */
    public $TodoOfertaCodigos;
    /**
     * The VendaSemEstoque
     * @var boolean
     */
    public $VendaSemEstoque;
    /**
     * The VendaSemEstoqueData
     * @var dateTime
     */
    public $VendaSemEstoqueData;
    /**
     * The VendaSemEstoqueLimite
     * @var int
     */
    public $VendaSemEstoqueLimite;
    /**
     * The Video
     * @var string
     */
    public $Video;
    /**
     * The VisualizaBusca
     * @var int
     */
    public $VisualizaBusca;
    /**
     * The VisualizaLogado
     * @var int
     */
    public $VisualizaLogado;
    /**
     * The VisualizaPreco
     * @var int
     */
    public $VisualizaPreco;
    /**
     * The VisualizaUrlDireta
     * @var int
     */
    public $VisualizaUrlDireta;
    /**
     * Constructor method for Produto
     * @see parent::__construct()
     * @param double $_altura
     * @param string $_arremateCodigos
     * @param int $_associacaoID
     * @param EzClientesStructArrayOfAssociacao $_associacoes
     * @param boolean $_ativo
     * @param EzClientesStructArrayOfCampoExtendido $_camposExtendidos
     * @param ClassificacaoProdutoEnum $_classificacao
     * @param string $_codigoIntegracao
     * @param string $_conteudo
     * @param decimal $_custo
     * @param dateTime $_dataEntrada
     * @param dateTime $_dataSaida
     * @param string $_descricaoCurta
     * @param string $_descricaoLonga
     * @param int $_disponibilidadeEmEstoque
     * @param int $_disponibilidadeSemEstoque
     * @param int $_estoqueAtual
     * @param int $_estoqueMinimo
     * @param string $_estoqueMinimoFrase
     * @param boolean $_exibirDisponibilidade
     * @param int $_fornecedorID
     * @param boolean $_freteGratis
     * @param double $_largura
     * @param int $_marcaID
     * @param string $_mercadoLivreCodigos
     * @param string $_metaDescription
     * @param string $_metaKeywords
     * @param string $_metaTitle
     * @param string $_modelo
     * @param string $_nome
     * @param int $_numeroMaximoParcelas
     * @param int $_ordem
     * @param string $_palavrasParaPesquisa
     * @param double $_peso
     * @param double $_pesoCubico
     * @param int $_pontos
     * @param boolean $_preVenda
     * @param dateTime $_preVendaData
     * @param int $_preVendaLimite
     * @param decimal $_preco
     * @param decimal $_precoPromocional
     * @param int $_presente
     * @param double $_presenteValor
     * @param PrevalecerPrecoEnum $_prevalecerPreco
     * @param double $_profundidade
     * @param boolean $_promocao
     * @param dateTime $_promocaoFim
     * @param dateTime $_promocaoInicio
     * @param int $_quantidadeMaximaPorCliente
     * @param int $_quantidadeMinimaVenda
     * @param string $_referencia
     * @param boolean $_semEntrega
     * @param EzClientesStructArrayOfint $_siteCategoriaAlternativas
     * @param int $_siteCategoriaPrincipal
     * @param decimal $_taxa
     * @param string $_termoDeAceitacao
     * @param TipoProdutoEnum $_tipo
     * @param TipoDisponibilidadeEnum $_tipoDisponibilidade
     * @param TipoReposicaoEnum $_tipoReposicao
     * @param string $_tituloSubVariacao
     * @param string $_tituloVariacao
     * @param string $_todoOfertaCodigos
     * @param boolean $_vendaSemEstoque
     * @param dateTime $_vendaSemEstoqueData
     * @param int $_vendaSemEstoqueLimite
     * @param string $_video
     * @param int $_visualizaBusca
     * @param int $_visualizaLogado
     * @param int $_visualizaPreco
     * @param int $_visualizaUrlDireta
     * @return EzClientesStructProduto
     */
    public function __construct($_altura = NULL,$_arremateCodigos = NULL,$_associacaoID = NULL,$_associacoes = NULL,$_ativo = NULL,$_camposExtendidos = NULL,$_classificacao = NULL,$_codigoIntegracao = NULL,$_conteudo = NULL,$_custo = NULL,$_dataEntrada = NULL,$_dataSaida = NULL,$_descricaoCurta = NULL,$_descricaoLonga = NULL,$_disponibilidadeEmEstoque = NULL,$_disponibilidadeSemEstoque = NULL,$_estoqueAtual = NULL,$_estoqueMinimo = NULL,$_estoqueMinimoFrase = NULL,$_exibirDisponibilidade = NULL,$_fornecedorID = NULL,$_freteGratis = NULL,$_largura = NULL,$_marcaID = NULL,$_mercadoLivreCodigos = NULL,$_metaDescription = NULL,$_metaKeywords = NULL,$_metaTitle = NULL,$_modelo = NULL,$_nome = NULL,$_numeroMaximoParcelas = NULL,$_ordem = NULL,$_palavrasParaPesquisa = NULL,$_peso = NULL,$_pesoCubico = NULL,$_pontos = NULL,$_preVenda = NULL,$_preVendaData = NULL,$_preVendaLimite = NULL,$_preco = NULL,$_precoPromocional = NULL,$_presente = NULL,$_presenteValor = NULL,$_prevalecerPreco = NULL,$_profundidade = NULL,$_promocao = NULL,$_promocaoFim = NULL,$_promocaoInicio = NULL,$_quantidadeMaximaPorCliente = NULL,$_quantidadeMinimaVenda = NULL,$_referencia = NULL,$_semEntrega = NULL,$_siteCategoriaAlternativas = NULL,$_siteCategoriaPrincipal = NULL,$_taxa = NULL,$_termoDeAceitacao = NULL,$_tipo = NULL,$_tipoDisponibilidade = NULL,$_tipoReposicao = NULL,$_tituloSubVariacao = NULL,$_tituloVariacao = NULL,$_todoOfertaCodigos = NULL,$_vendaSemEstoque = NULL,$_vendaSemEstoqueData = NULL,$_vendaSemEstoqueLimite = NULL,$_video = NULL,$_visualizaBusca = NULL,$_visualizaLogado = NULL,$_visualizaPreco = NULL,$_visualizaUrlDireta = NULL)
    {
        parent::__construct(array('Altura'=>$_altura,'ArremateCodigos'=>$_arremateCodigos,'AssociacaoID'=>$_associacaoID,'Associacoes'=>($_associacoes instanceof EzClientesStructArrayOfAssociacao)?$_associacoes:new EzClientesStructArrayOfAssociacao($_associacoes),'Ativo'=>$_ativo,'CamposExtendidos'=>($_camposExtendidos instanceof EzClientesStructArrayOfCampoExtendido)?$_camposExtendidos:new EzClientesStructArrayOfCampoExtendido($_camposExtendidos),'Classificacao'=>$_classificacao,'CodigoIntegracao'=>$_codigoIntegracao,'Conteudo'=>$_conteudo,'Custo'=>$_custo,'DataEntrada'=>$_dataEntrada,'DataSaida'=>$_dataSaida,'DescricaoCurta'=>$_descricaoCurta,'DescricaoLonga'=>$_descricaoLonga,'DisponibilidadeEmEstoque'=>$_disponibilidadeEmEstoque,'DisponibilidadeSemEstoque'=>$_disponibilidadeSemEstoque,'EstoqueAtual'=>$_estoqueAtual,'EstoqueMinimo'=>$_estoqueMinimo,'EstoqueMinimoFrase'=>$_estoqueMinimoFrase,'ExibirDisponibilidade'=>$_exibirDisponibilidade,'FornecedorID'=>$_fornecedorID,'FreteGratis'=>$_freteGratis,'Largura'=>$_largura,'MarcaID'=>$_marcaID,'MercadoLivreCodigos'=>$_mercadoLivreCodigos,'MetaDescription'=>$_metaDescription,'MetaKeywords'=>$_metaKeywords,'MetaTitle'=>$_metaTitle,'Modelo'=>$_modelo,'Nome'=>$_nome,'NumeroMaximoParcelas'=>$_numeroMaximoParcelas,'Ordem'=>$_ordem,'PalavrasParaPesquisa'=>$_palavrasParaPesquisa,'Peso'=>$_peso,'PesoCubico'=>$_pesoCubico,'Pontos'=>$_pontos,'PreVenda'=>$_preVenda,'PreVendaData'=>$_preVendaData,'PreVendaLimite'=>$_preVendaLimite,'Preco'=>$_preco,'PrecoPromocional'=>$_precoPromocional,'Presente'=>$_presente,'PresenteValor'=>$_presenteValor,'PrevalecerPreco'=>$_prevalecerPreco,'Profundidade'=>$_profundidade,'Promocao'=>$_promocao,'PromocaoFim'=>$_promocaoFim,'PromocaoInicio'=>$_promocaoInicio,'QuantidadeMaximaPorCliente'=>$_quantidadeMaximaPorCliente,'QuantidadeMinimaVenda'=>$_quantidadeMinimaVenda,'Referencia'=>$_referencia,'SemEntrega'=>$_semEntrega,'SiteCategoriaAlternativas'=>($_siteCategoriaAlternativas instanceof EzClientesStructArrayOfint)?$_siteCategoriaAlternativas:new EzClientesStructArrayOfint($_siteCategoriaAlternativas),'SiteCategoriaPrincipal'=>$_siteCategoriaPrincipal,'Taxa'=>$_taxa,'TermoDeAceitacao'=>$_termoDeAceitacao,'Tipo'=>$_tipo,'TipoDisponibilidade'=>$_tipoDisponibilidade,'TipoReposicao'=>$_tipoReposicao,'TituloSubVariacao'=>$_tituloSubVariacao,'TituloVariacao'=>$_tituloVariacao,'TodoOfertaCodigos'=>$_todoOfertaCodigos,'VendaSemEstoque'=>$_vendaSemEstoque,'VendaSemEstoqueData'=>$_vendaSemEstoqueData,'VendaSemEstoqueLimite'=>$_vendaSemEstoqueLimite,'Video'=>$_video,'VisualizaBusca'=>$_visualizaBusca,'VisualizaLogado'=>$_visualizaLogado,'VisualizaPreco'=>$_visualizaPreco,'VisualizaUrlDireta'=>$_visualizaUrlDireta),false);
    }
    /**
     * Get Altura value
     * @return double|null
     */
    public function getAltura()
    {
        return $this->Altura;
    }
    /**
     * Set Altura value
     * @param double $_altura the Altura
     * @return double
     */
    public function setAltura($_altura)
    {
        return ($this->Altura = $_altura);
    }
    /**
     * Get ArremateCodigos value
     * @return string|null
     */
    public function getArremateCodigos()
    {
        return $this->ArremateCodigos;
    }
    /**
     * Set ArremateCodigos value
     * @param string $_arremateCodigos the ArremateCodigos
     * @return string
     */
    public function setArremateCodigos($_arremateCodigos)
    {
        return ($this->ArremateCodigos = $_arremateCodigos);
    }
    /**
     * Get AssociacaoID value
     * @return int|null
     */
    public function getAssociacaoID()
    {
        return $this->AssociacaoID;
    }
    /**
     * Set AssociacaoID value
     * @param int $_associacaoID the AssociacaoID
     * @return int
     */
    public function setAssociacaoID($_associacaoID)
    {
        return ($this->AssociacaoID = $_associacaoID);
    }
    /**
     * Get Associacoes value
     * @return EzClientesStructArrayOfAssociacao|null
     */
    public function getAssociacoes()
    {
        return $this->Associacoes;
    }
    /**
     * Set Associacoes value
     * @param EzClientesStructArrayOfAssociacao $_associacoes the Associacoes
     * @return EzClientesStructArrayOfAssociacao
     */
    public function setAssociacoes($_associacoes)
    {
        return ($this->Associacoes = $_associacoes);
    }
    /**
     * Get Ativo value
     * @return boolean|null
     */
    public function getAtivo()
    {
        return $this->Ativo;
    }
    /**
     * Set Ativo value
     * @param boolean $_ativo the Ativo
     * @return boolean
     */
    public function setAtivo($_ativo)
    {
        return ($this->Ativo = $_ativo);
    }
    /**
     * Get CamposExtendidos value
     * @return EzClientesStructArrayOfCampoExtendido|null
     */
    public function getCamposExtendidos()
    {
        return $this->CamposExtendidos;
    }
    /**
     * Set CamposExtendidos value
     * @param EzClientesStructArrayOfCampoExtendido $_camposExtendidos the CamposExtendidos
     * @return EzClientesStructArrayOfCampoExtendido
     */
    public function setCamposExtendidos($_camposExtendidos)
    {
        return ($this->CamposExtendidos = $_camposExtendidos);
    }
    /**
     * Get Classificacao value
     * @return ClassificacaoProdutoEnum|null
     */
    public function getClassificacao()
    {
        return $this->Classificacao;
    }
    /**
     * Set Classificacao value
     * @param ClassificacaoProdutoEnum $_classificacao the Classificacao
     * @return ClassificacaoProdutoEnum
     */
    public function setClassificacao($_classificacao)
    {
        return ($this->Classificacao = $_classificacao);
    }
    /**
     * Get CodigoIntegracao value
     * @return string|null
     */
    public function getCodigoIntegracao()
    {
        return $this->CodigoIntegracao;
    }
    /**
     * Set CodigoIntegracao value
     * @param string $_codigoIntegracao the CodigoIntegracao
     * @return string
     */
    public function setCodigoIntegracao($_codigoIntegracao)
    {
        return ($this->CodigoIntegracao = $_codigoIntegracao);
    }
    /**
     * Get Conteudo value
     * @return string|null
     */
    public function getConteudo()
    {
        return $this->Conteudo;
    }
    /**
     * Set Conteudo value
     * @param string $_conteudo the Conteudo
     * @return string
     */
    public function setConteudo($_conteudo)
    {
        return ($this->Conteudo = $_conteudo);
    }
    /**
     * Get Custo value
     * @return decimal|null
     */
    public function getCusto()
    {
        return $this->Custo;
    }
    /**
     * Set Custo value
     * @param decimal $_custo the Custo
     * @return decimal
     */
    public function setCusto($_custo)
    {
        return ($this->Custo = $_custo);
    }
    /**
     * Get DataEntrada value
     * @return dateTime|null
     */
    public function getDataEntrada()
    {
        return $this->DataEntrada;
    }
    /**
     * Set DataEntrada value
     * @param dateTime $_dataEntrada the DataEntrada
     * @return dateTime
     */
    public function setDataEntrada($_dataEntrada)
    {
        return ($this->DataEntrada = $_dataEntrada);
    }
    /**
     * Get DataSaida value
     * @return dateTime|null
     */
    public function getDataSaida()
    {
        return $this->DataSaida;
    }
    /**
     * Set DataSaida value
     * @param dateTime $_dataSaida the DataSaida
     * @return dateTime
     */
    public function setDataSaida($_dataSaida)
    {
        return ($this->DataSaida = $_dataSaida);
    }
    /**
     * Get DescricaoCurta value
     * @return string|null
     */
    public function getDescricaoCurta()
    {
        return $this->DescricaoCurta;
    }
    /**
     * Set DescricaoCurta value
     * @param string $_descricaoCurta the DescricaoCurta
     * @return string
     */
    public function setDescricaoCurta($_descricaoCurta)
    {
        return ($this->DescricaoCurta = $_descricaoCurta);
    }
    /**
     * Get DescricaoLonga value
     * @return string|null
     */
    public function getDescricaoLonga()
    {
        return $this->DescricaoLonga;
    }
    /**
     * Set DescricaoLonga value
     * @param string $_descricaoLonga the DescricaoLonga
     * @return string
     */
    public function setDescricaoLonga($_descricaoLonga)
    {
        return ($this->DescricaoLonga = $_descricaoLonga);
    }
    /**
     * Get DisponibilidadeEmEstoque value
     * @return int|null
     */
    public function getDisponibilidadeEmEstoque()
    {
        return $this->DisponibilidadeEmEstoque;
    }
    /**
     * Set DisponibilidadeEmEstoque value
     * @param int $_disponibilidadeEmEstoque the DisponibilidadeEmEstoque
     * @return int
     */
    public function setDisponibilidadeEmEstoque($_disponibilidadeEmEstoque)
    {
        return ($this->DisponibilidadeEmEstoque = $_disponibilidadeEmEstoque);
    }
    /**
     * Get DisponibilidadeSemEstoque value
     * @return int|null
     */
    public function getDisponibilidadeSemEstoque()
    {
        return $this->DisponibilidadeSemEstoque;
    }
    /**
     * Set DisponibilidadeSemEstoque value
     * @param int $_disponibilidadeSemEstoque the DisponibilidadeSemEstoque
     * @return int
     */
    public function setDisponibilidadeSemEstoque($_disponibilidadeSemEstoque)
    {
        return ($this->DisponibilidadeSemEstoque = $_disponibilidadeSemEstoque);
    }
    /**
     * Get EstoqueAtual value
     * @return int|null
     */
    public function getEstoqueAtual()
    {
        return $this->EstoqueAtual;
    }
    /**
     * Set EstoqueAtual value
     * @param int $_estoqueAtual the EstoqueAtual
     * @return int
     */
    public function setEstoqueAtual($_estoqueAtual)
    {
        return ($this->EstoqueAtual = $_estoqueAtual);
    }
    /**
     * Get EstoqueMinimo value
     * @return int|null
     */
    public function getEstoqueMinimo()
    {
        return $this->EstoqueMinimo;
    }
    /**
     * Set EstoqueMinimo value
     * @param int $_estoqueMinimo the EstoqueMinimo
     * @return int
     */
    public function setEstoqueMinimo($_estoqueMinimo)
    {
        return ($this->EstoqueMinimo = $_estoqueMinimo);
    }
    /**
     * Get EstoqueMinimoFrase value
     * @return string|null
     */
    public function getEstoqueMinimoFrase()
    {
        return $this->EstoqueMinimoFrase;
    }
    /**
     * Set EstoqueMinimoFrase value
     * @param string $_estoqueMinimoFrase the EstoqueMinimoFrase
     * @return string
     */
    public function setEstoqueMinimoFrase($_estoqueMinimoFrase)
    {
        return ($this->EstoqueMinimoFrase = $_estoqueMinimoFrase);
    }
    /**
     * Get ExibirDisponibilidade value
     * @return boolean|null
     */
    public function getExibirDisponibilidade()
    {
        return $this->ExibirDisponibilidade;
    }
    /**
     * Set ExibirDisponibilidade value
     * @param boolean $_exibirDisponibilidade the ExibirDisponibilidade
     * @return boolean
     */
    public function setExibirDisponibilidade($_exibirDisponibilidade)
    {
        return ($this->ExibirDisponibilidade = $_exibirDisponibilidade);
    }
    /**
     * Get FornecedorID value
     * @return int|null
     */
    public function getFornecedorID()
    {
        return $this->FornecedorID;
    }
    /**
     * Set FornecedorID value
     * @param int $_fornecedorID the FornecedorID
     * @return int
     */
    public function setFornecedorID($_fornecedorID)
    {
        return ($this->FornecedorID = $_fornecedorID);
    }
    /**
     * Get FreteGratis value
     * @return boolean|null
     */
    public function getFreteGratis()
    {
        return $this->FreteGratis;
    }
    /**
     * Set FreteGratis value
     * @param boolean $_freteGratis the FreteGratis
     * @return boolean
     */
    public function setFreteGratis($_freteGratis)
    {
        return ($this->FreteGratis = $_freteGratis);
    }
    /**
     * Get Largura value
     * @return double|null
     */
    public function getLargura()
    {
        return $this->Largura;
    }
    /**
     * Set Largura value
     * @param double $_largura the Largura
     * @return double
     */
    public function setLargura($_largura)
    {
        return ($this->Largura = $_largura);
    }
    /**
     * Get MarcaID value
     * @return int|null
     */
    public function getMarcaID()
    {
        return $this->MarcaID;
    }
    /**
     * Set MarcaID value
     * @param int $_marcaID the MarcaID
     * @return int
     */
    public function setMarcaID($_marcaID)
    {
        return ($this->MarcaID = $_marcaID);
    }
    /**
     * Get MercadoLivreCodigos value
     * @return string|null
     */
    public function getMercadoLivreCodigos()
    {
        return $this->MercadoLivreCodigos;
    }
    /**
     * Set MercadoLivreCodigos value
     * @param string $_mercadoLivreCodigos the MercadoLivreCodigos
     * @return string
     */
    public function setMercadoLivreCodigos($_mercadoLivreCodigos)
    {
        return ($this->MercadoLivreCodigos = $_mercadoLivreCodigos);
    }
    /**
     * Get MetaDescription value
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->MetaDescription;
    }
    /**
     * Set MetaDescription value
     * @param string $_metaDescription the MetaDescription
     * @return string
     */
    public function setMetaDescription($_metaDescription)
    {
        return ($this->MetaDescription = $_metaDescription);
    }
    /**
     * Get MetaKeywords value
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->MetaKeywords;
    }
    /**
     * Set MetaKeywords value
     * @param string $_metaKeywords the MetaKeywords
     * @return string
     */
    public function setMetaKeywords($_metaKeywords)
    {
        return ($this->MetaKeywords = $_metaKeywords);
    }
    /**
     * Get MetaTitle value
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->MetaTitle;
    }
    /**
     * Set MetaTitle value
     * @param string $_metaTitle the MetaTitle
     * @return string
     */
    public function setMetaTitle($_metaTitle)
    {
        return ($this->MetaTitle = $_metaTitle);
    }
    /**
     * Get Modelo value
     * @return string|null
     */
    public function getModelo()
    {
        return $this->Modelo;
    }
    /**
     * Set Modelo value
     * @param string $_modelo the Modelo
     * @return string
     */
    public function setModelo($_modelo)
    {
        return ($this->Modelo = $_modelo);
    }
    /**
     * Get Nome value
     * @return string|null
     */
    public function getNome()
    {
        return $this->Nome;
    }
    /**
     * Set Nome value
     * @param string $_nome the Nome
     * @return string
     */
    public function setNome($_nome)
    {
        return ($this->Nome = $_nome);
    }
    /**
     * Get NumeroMaximoParcelas value
     * @return int|null
     */
    public function getNumeroMaximoParcelas()
    {
        return $this->NumeroMaximoParcelas;
    }
    /**
     * Set NumeroMaximoParcelas value
     * @param int $_numeroMaximoParcelas the NumeroMaximoParcelas
     * @return int
     */
    public function setNumeroMaximoParcelas($_numeroMaximoParcelas)
    {
        return ($this->NumeroMaximoParcelas = $_numeroMaximoParcelas);
    }
    /**
     * Get Ordem value
     * @return int|null
     */
    public function getOrdem()
    {
        return $this->Ordem;
    }
    /**
     * Set Ordem value
     * @param int $_ordem the Ordem
     * @return int
     */
    public function setOrdem($_ordem)
    {
        return ($this->Ordem = $_ordem);
    }
    /**
     * Get PalavrasParaPesquisa value
     * @return string|null
     */
    public function getPalavrasParaPesquisa()
    {
        return $this->PalavrasParaPesquisa;
    }
    /**
     * Set PalavrasParaPesquisa value
     * @param string $_palavrasParaPesquisa the PalavrasParaPesquisa
     * @return string
     */
    public function setPalavrasParaPesquisa($_palavrasParaPesquisa)
    {
        return ($this->PalavrasParaPesquisa = $_palavrasParaPesquisa);
    }
    /**
     * Get Peso value
     * @return double|null
     */
    public function getPeso()
    {
        return $this->Peso;
    }
    /**
     * Set Peso value
     * @param double $_peso the Peso
     * @return double
     */
    public function setPeso($_peso)
    {
        return ($this->Peso = $_peso);
    }
    /**
     * Get PesoCubico value
     * @return double|null
     */
    public function getPesoCubico()
    {
        return $this->PesoCubico;
    }
    /**
     * Set PesoCubico value
     * @param double $_pesoCubico the PesoCubico
     * @return double
     */
    public function setPesoCubico($_pesoCubico)
    {
        return ($this->PesoCubico = $_pesoCubico);
    }
    /**
     * Get Pontos value
     * @return int|null
     */
    public function getPontos()
    {
        return $this->Pontos;
    }
    /**
     * Set Pontos value
     * @param int $_pontos the Pontos
     * @return int
     */
    public function setPontos($_pontos)
    {
        return ($this->Pontos = $_pontos);
    }
    /**
     * Get PreVenda value
     * @return boolean|null
     */
    public function getPreVenda()
    {
        return $this->PreVenda;
    }
    /**
     * Set PreVenda value
     * @param boolean $_preVenda the PreVenda
     * @return boolean
     */
    public function setPreVenda($_preVenda)
    {
        return ($this->PreVenda = $_preVenda);
    }
    /**
     * Get PreVendaData value
     * @return dateTime|null
     */
    public function getPreVendaData()
    {
        return $this->PreVendaData;
    }
    /**
     * Set PreVendaData value
     * @param dateTime $_preVendaData the PreVendaData
     * @return dateTime
     */
    public function setPreVendaData($_preVendaData)
    {
        return ($this->PreVendaData = $_preVendaData);
    }
    /**
     * Get PreVendaLimite value
     * @return int|null
     */
    public function getPreVendaLimite()
    {
        return $this->PreVendaLimite;
    }
    /**
     * Set PreVendaLimite value
     * @param int $_preVendaLimite the PreVendaLimite
     * @return int
     */
    public function setPreVendaLimite($_preVendaLimite)
    {
        return ($this->PreVendaLimite = $_preVendaLimite);
    }
    /**
     * Get Preco value
     * @return decimal|null
     */
    public function getPreco()
    {
        return $this->Preco;
    }
    /**
     * Set Preco value
     * @param decimal $_preco the Preco
     * @return decimal
     */
    public function setPreco($_preco)
    {
        return ($this->Preco = $_preco);
    }
    /**
     * Get PrecoPromocional value
     * @return decimal|null
     */
    public function getPrecoPromocional()
    {
        return $this->PrecoPromocional;
    }
    /**
     * Set PrecoPromocional value
     * @param decimal $_precoPromocional the PrecoPromocional
     * @return decimal
     */
    public function setPrecoPromocional($_precoPromocional)
    {
        return ($this->PrecoPromocional = $_precoPromocional);
    }
    /**
     * Get Presente value
     * @return int|null
     */
    public function getPresente()
    {
        return $this->Presente;
    }
    /**
     * Set Presente value
     * @param int $_presente the Presente
     * @return int
     */
    public function setPresente($_presente)
    {
        return ($this->Presente = $_presente);
    }
    /**
     * Get PresenteValor value
     * @return double|null
     */
    public function getPresenteValor()
    {
        return $this->PresenteValor;
    }
    /**
     * Set PresenteValor value
     * @param double $_presenteValor the PresenteValor
     * @return double
     */
    public function setPresenteValor($_presenteValor)
    {
        return ($this->PresenteValor = $_presenteValor);
    }
    /**
     * Get PrevalecerPreco value
     * @return PrevalecerPrecoEnum|null
     */
    public function getPrevalecerPreco()
    {
        return $this->PrevalecerPreco;
    }
    /**
     * Set PrevalecerPreco value
     * @param PrevalecerPrecoEnum $_prevalecerPreco the PrevalecerPreco
     * @return PrevalecerPrecoEnum
     */
    public function setPrevalecerPreco($_prevalecerPreco)
    {
        return ($this->PrevalecerPreco = $_prevalecerPreco);
    }
    /**
     * Get Profundidade value
     * @return double|null
     */
    public function getProfundidade()
    {
        return $this->Profundidade;
    }
    /**
     * Set Profundidade value
     * @param double $_profundidade the Profundidade
     * @return double
     */
    public function setProfundidade($_profundidade)
    {
        return ($this->Profundidade = $_profundidade);
    }
    /**
     * Get Promocao value
     * @return boolean|null
     */
    public function getPromocao()
    {
        return $this->Promocao;
    }
    /**
     * Set Promocao value
     * @param boolean $_promocao the Promocao
     * @return boolean
     */
    public function setPromocao($_promocao)
    {
        return ($this->Promocao = $_promocao);
    }
    /**
     * Get PromocaoFim value
     * @return dateTime|null
     */
    public function getPromocaoFim()
    {
        return $this->PromocaoFim;
    }
    /**
     * Set PromocaoFim value
     * @param dateTime $_promocaoFim the PromocaoFim
     * @return dateTime
     */
    public function setPromocaoFim($_promocaoFim)
    {
        return ($this->PromocaoFim = $_promocaoFim);
    }
    /**
     * Get PromocaoInicio value
     * @return dateTime|null
     */
    public function getPromocaoInicio()
    {
        return $this->PromocaoInicio;
    }
    /**
     * Set PromocaoInicio value
     * @param dateTime $_promocaoInicio the PromocaoInicio
     * @return dateTime
     */
    public function setPromocaoInicio($_promocaoInicio)
    {
        return ($this->PromocaoInicio = $_promocaoInicio);
    }
    /**
     * Get QuantidadeMaximaPorCliente value
     * @return int|null
     */
    public function getQuantidadeMaximaPorCliente()
    {
        return $this->QuantidadeMaximaPorCliente;
    }
    /**
     * Set QuantidadeMaximaPorCliente value
     * @param int $_quantidadeMaximaPorCliente the QuantidadeMaximaPorCliente
     * @return int
     */
    public function setQuantidadeMaximaPorCliente($_quantidadeMaximaPorCliente)
    {
        return ($this->QuantidadeMaximaPorCliente = $_quantidadeMaximaPorCliente);
    }
    /**
     * Get QuantidadeMinimaVenda value
     * @return int|null
     */
    public function getQuantidadeMinimaVenda()
    {
        return $this->QuantidadeMinimaVenda;
    }
    /**
     * Set QuantidadeMinimaVenda value
     * @param int $_quantidadeMinimaVenda the QuantidadeMinimaVenda
     * @return int
     */
    public function setQuantidadeMinimaVenda($_quantidadeMinimaVenda)
    {
        return ($this->QuantidadeMinimaVenda = $_quantidadeMinimaVenda);
    }
    /**
     * Get Referencia value
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }
    /**
     * Set Referencia value
     * @param string $_referencia the Referencia
     * @return string
     */
    public function setReferencia($_referencia)
    {
        return ($this->Referencia = $_referencia);
    }
    /**
     * Get SemEntrega value
     * @return boolean|null
     */
    public function getSemEntrega()
    {
        return $this->SemEntrega;
    }
    /**
     * Set SemEntrega value
     * @param boolean $_semEntrega the SemEntrega
     * @return boolean
     */
    public function setSemEntrega($_semEntrega)
    {
        return ($this->SemEntrega = $_semEntrega);
    }
    /**
     * Get SiteCategoriaAlternativas value
     * @return EzClientesStructArrayOfint|null
     */
    public function getSiteCategoriaAlternativas()
    {
        return $this->SiteCategoriaAlternativas;
    }
    /**
     * Set SiteCategoriaAlternativas value
     * @param EzClientesStructArrayOfint $_siteCategoriaAlternativas the SiteCategoriaAlternativas
     * @return EzClientesStructArrayOfint
     */
    public function setSiteCategoriaAlternativas($_siteCategoriaAlternativas)
    {
        return ($this->SiteCategoriaAlternativas = $_siteCategoriaAlternativas);
    }
    /**
     * Get SiteCategoriaPrincipal value
     * @return int|null
     */
    public function getSiteCategoriaPrincipal()
    {
        return $this->SiteCategoriaPrincipal;
    }
    /**
     * Set SiteCategoriaPrincipal value
     * @param int $_siteCategoriaPrincipal the SiteCategoriaPrincipal
     * @return int
     */
    public function setSiteCategoriaPrincipal($_siteCategoriaPrincipal)
    {
        return ($this->SiteCategoriaPrincipal = $_siteCategoriaPrincipal);
    }
    /**
     * Get Taxa value
     * @return decimal|null
     */
    public function getTaxa()
    {
        return $this->Taxa;
    }
    /**
     * Set Taxa value
     * @param decimal $_taxa the Taxa
     * @return decimal
     */
    public function setTaxa($_taxa)
    {
        return ($this->Taxa = $_taxa);
    }
    /**
     * Get TermoDeAceitacao value
     * @return string|null
     */
    public function getTermoDeAceitacao()
    {
        return $this->TermoDeAceitacao;
    }
    /**
     * Set TermoDeAceitacao value
     * @param string $_termoDeAceitacao the TermoDeAceitacao
     * @return string
     */
    public function setTermoDeAceitacao($_termoDeAceitacao)
    {
        return ($this->TermoDeAceitacao = $_termoDeAceitacao);
    }
    /**
     * Get Tipo value
     * @return TipoProdutoEnum|null
     */
    public function getTipo()
    {
        return $this->Tipo;
    }
    /**
     * Set Tipo value
     * @param TipoProdutoEnum $_tipo the Tipo
     * @return TipoProdutoEnum
     */
    public function setTipo($_tipo)
    {
        return ($this->Tipo = $_tipo);
    }
    /**
     * Get TipoDisponibilidade value
     * @return TipoDisponibilidadeEnum|null
     */
    public function getTipoDisponibilidade()
    {
        return $this->TipoDisponibilidade;
    }
    /**
     * Set TipoDisponibilidade value
     * @param TipoDisponibilidadeEnum $_tipoDisponibilidade the TipoDisponibilidade
     * @return TipoDisponibilidadeEnum
     */
    public function setTipoDisponibilidade($_tipoDisponibilidade)
    {
        return ($this->TipoDisponibilidade = $_tipoDisponibilidade);
    }
    /**
     * Get TipoReposicao value
     * @return TipoReposicaoEnum|null
     */
    public function getTipoReposicao()
    {
        return $this->TipoReposicao;
    }
    /**
     * Set TipoReposicao value
     * @param TipoReposicaoEnum $_tipoReposicao the TipoReposicao
     * @return TipoReposicaoEnum
     */
    public function setTipoReposicao($_tipoReposicao)
    {
        return ($this->TipoReposicao = $_tipoReposicao);
    }
    /**
     * Get TituloSubVariacao value
     * @return string|null
     */
    public function getTituloSubVariacao()
    {
        return $this->TituloSubVariacao;
    }
    /**
     * Set TituloSubVariacao value
     * @param string $_tituloSubVariacao the TituloSubVariacao
     * @return string
     */
    public function setTituloSubVariacao($_tituloSubVariacao)
    {
        return ($this->TituloSubVariacao = $_tituloSubVariacao);
    }
    /**
     * Get TituloVariacao value
     * @return string|null
     */
    public function getTituloVariacao()
    {
        return $this->TituloVariacao;
    }
    /**
     * Set TituloVariacao value
     * @param string $_tituloVariacao the TituloVariacao
     * @return string
     */
    public function setTituloVariacao($_tituloVariacao)
    {
        return ($this->TituloVariacao = $_tituloVariacao);
    }
    /**
     * Get TodoOfertaCodigos value
     * @return string|null
     */
    public function getTodoOfertaCodigos()
    {
        return $this->TodoOfertaCodigos;
    }
    /**
     * Set TodoOfertaCodigos value
     * @param string $_todoOfertaCodigos the TodoOfertaCodigos
     * @return string
     */
    public function setTodoOfertaCodigos($_todoOfertaCodigos)
    {
        return ($this->TodoOfertaCodigos = $_todoOfertaCodigos);
    }
    /**
     * Get VendaSemEstoque value
     * @return boolean|null
     */
    public function getVendaSemEstoque()
    {
        return $this->VendaSemEstoque;
    }
    /**
     * Set VendaSemEstoque value
     * @param boolean $_vendaSemEstoque the VendaSemEstoque
     * @return boolean
     */
    public function setVendaSemEstoque($_vendaSemEstoque)
    {
        return ($this->VendaSemEstoque = $_vendaSemEstoque);
    }
    /**
     * Get VendaSemEstoqueData value
     * @return dateTime|null
     */
    public function getVendaSemEstoqueData()
    {
        return $this->VendaSemEstoqueData;
    }
    /**
     * Set VendaSemEstoqueData value
     * @param dateTime $_vendaSemEstoqueData the VendaSemEstoqueData
     * @return dateTime
     */
    public function setVendaSemEstoqueData($_vendaSemEstoqueData)
    {
        return ($this->VendaSemEstoqueData = $_vendaSemEstoqueData);
    }
    /**
     * Get VendaSemEstoqueLimite value
     * @return int|null
     */
    public function getVendaSemEstoqueLimite()
    {
        return $this->VendaSemEstoqueLimite;
    }
    /**
     * Set VendaSemEstoqueLimite value
     * @param int $_vendaSemEstoqueLimite the VendaSemEstoqueLimite
     * @return int
     */
    public function setVendaSemEstoqueLimite($_vendaSemEstoqueLimite)
    {
        return ($this->VendaSemEstoqueLimite = $_vendaSemEstoqueLimite);
    }
    /**
     * Get Video value
     * @return string|null
     */
    public function getVideo()
    {
        return $this->Video;
    }
    /**
     * Set Video value
     * @param string $_video the Video
     * @return string
     */
    public function setVideo($_video)
    {
        return ($this->Video = $_video);
    }
    /**
     * Get VisualizaBusca value
     * @return int|null
     */
    public function getVisualizaBusca()
    {
        return $this->VisualizaBusca;
    }
    /**
     * Set VisualizaBusca value
     * @param int $_visualizaBusca the VisualizaBusca
     * @return int
     */
    public function setVisualizaBusca($_visualizaBusca)
    {
        return ($this->VisualizaBusca = $_visualizaBusca);
    }
    /**
     * Get VisualizaLogado value
     * @return int|null
     */
    public function getVisualizaLogado()
    {
        return $this->VisualizaLogado;
    }
    /**
     * Set VisualizaLogado value
     * @param int $_visualizaLogado the VisualizaLogado
     * @return int
     */
    public function setVisualizaLogado($_visualizaLogado)
    {
        return ($this->VisualizaLogado = $_visualizaLogado);
    }
    /**
     * Get VisualizaPreco value
     * @return int|null
     */
    public function getVisualizaPreco()
    {
        return $this->VisualizaPreco;
    }
    /**
     * Set VisualizaPreco value
     * @param int $_visualizaPreco the VisualizaPreco
     * @return int
     */
    public function setVisualizaPreco($_visualizaPreco)
    {
        return ($this->VisualizaPreco = $_visualizaPreco);
    }
    /**
     * Get VisualizaUrlDireta value
     * @return int|null
     */
    public function getVisualizaUrlDireta()
    {
        return $this->VisualizaUrlDireta;
    }
    /**
     * Set VisualizaUrlDireta value
     * @param int $_visualizaUrlDireta the VisualizaUrlDireta
     * @return int
     */
    public function setVisualizaUrlDireta($_visualizaUrlDireta)
    {
        return ($this->VisualizaUrlDireta = $_visualizaUrlDireta);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructProduto
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
