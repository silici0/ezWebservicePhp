<?php
/**
 * File for class EzCatalogoStructPedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructPedido originally named Pedido
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructPedido extends EzCatalogoWsdlClass
{
    /**
     * The AfiliadoID
     * @var int
     */
    public $AfiliadoID;
    /**
     * The ClienteID
     * @var int
     */
    public $ClienteID;
    /**
     * The CodigoPedidoExterno
     * @var string
     */
    public $CodigoPedidoExterno;
    /**
     * The ConfirmacaoPagamento
     * @var EzCatalogoStructConfirmacaoPagamento
     */
    public $ConfirmacaoPagamento;
    /**
     * The CupomCodigo
     * @var string
     */
    public $CupomCodigo;
    /**
     * The CupomValorDesconto
     * @var decimal
     */
    public $CupomValorDesconto;
    /**
     * The DataVenda
     * @var dateTime
     */
    public $DataVenda;
    /**
     * The ETA
     * @var int
     */
    public $ETA;
    /**
     * The EntregaBairro
     * @var string
     */
    public $EntregaBairro;
    /**
     * The EntregaCEP
     * @var string
     */
    public $EntregaCEP;
    /**
     * The EntregaCidade
     * @var string
     */
    public $EntregaCidade;
    /**
     * The EntregaComplementoEndereco
     * @var string
     */
    public $EntregaComplementoEndereco;
    /**
     * The EntregaEmail
     * @var string
     */
    public $EntregaEmail;
    /**
     * The EntregaEstado
     * @var string
     */
    public $EntregaEstado;
    /**
     * The EntregaLogradouro
     * @var string
     */
    public $EntregaLogradouro;
    /**
     * The EntregaNome
     * @var string
     */
    public $EntregaNome;
    /**
     * The EntregaNumero
     * @var string
     */
    public $EntregaNumero;
    /**
     * The EntregaPais
     * @var string
     */
    public $EntregaPais;
    /**
     * The EntregaTelefone
     * @var string
     */
    public $EntregaTelefone;
    /**
     * The FormaDePagamento
     * @var EzCatalogoStructFormaDePagamento
     */
    public $FormaDePagamento;
    /**
     * The FormaEntregaAlias
     * @var string
     */
    public $FormaEntregaAlias;
    /**
     * The FormaEntregaID
     * @var int
     */
    public $FormaEntregaID;
    /**
     * The FreteCodEnvio
     * @var string
     */
    public $FreteCodEnvio;
    /**
     * The Itens
     * @var EzCatalogoStructArrayOfPedidoItem
     */
    public $Itens;
    /**
     * The MaiordisponibilidadeItem
     * @var int
     */
    public $MaiordisponibilidadeItem;
    /**
     * The NumeroRegistroCliente
     * @var string
     */
    public $NumeroRegistroCliente;
    /**
     * The Observacoes
     * @var string
     */
    public $Observacoes;
    /**
     * The ObservacoesLoja
     * @var string
     */
    public $ObservacoesLoja;
    /**
     * The OrigemPedido
     * @var string
     */
    public $OrigemPedido;
    /**
     * The PedidoID
     * @var int
     */
    public $PedidoID;
    /**
     * The PrevisaoEntregaEmDias
     * @var int
     */
    public $PrevisaoEntregaEmDias;
    /**
     * The Protocolo
     * @var string
     */
    public $Protocolo;
    /**
     * The StatusDesc
     * @var string
     */
    public $StatusDesc;
    /**
     * The StatusID
     * @var int
     */
    public $StatusID;
    /**
     * The TipoCliente
     * @var string
     */
    public $TipoCliente;
    /**
     * The ValorDesconto
     * @var decimal
     */
    public $ValorDesconto;
    /**
     * The ValorEmbalagemPresente
     * @var decimal
     */
    public $ValorEmbalagemPresente;
    /**
     * The ValorEncargos
     * @var decimal
     */
    public $ValorEncargos;
    /**
     * The ValorFrete
     * @var decimal
     */
    public $ValorFrete;
    /**
     * The ValorTotal
     * @var decimal
     */
    public $ValorTotal;
    /**
     * Constructor method for Pedido
     * @see parent::__construct()
     * @param int $_afiliadoID
     * @param int $_clienteID
     * @param string $_codigoPedidoExterno
     * @param EzCatalogoStructConfirmacaoPagamento $_confirmacaoPagamento
     * @param string $_cupomCodigo
     * @param decimal $_cupomValorDesconto
     * @param dateTime $_dataVenda
     * @param int $_eTA
     * @param string $_entregaBairro
     * @param string $_entregaCEP
     * @param string $_entregaCidade
     * @param string $_entregaComplementoEndereco
     * @param string $_entregaEmail
     * @param string $_entregaEstado
     * @param string $_entregaLogradouro
     * @param string $_entregaNome
     * @param string $_entregaNumero
     * @param string $_entregaPais
     * @param string $_entregaTelefone
     * @param EzCatalogoStructFormaDePagamento $_formaDePagamento
     * @param string $_formaEntregaAlias
     * @param int $_formaEntregaID
     * @param string $_freteCodEnvio
     * @param EzCatalogoStructArrayOfPedidoItem $_itens
     * @param int $_maiordisponibilidadeItem
     * @param string $_numeroRegistroCliente
     * @param string $_observacoes
     * @param string $_observacoesLoja
     * @param string $_origemPedido
     * @param int $_pedidoID
     * @param int $_previsaoEntregaEmDias
     * @param string $_protocolo
     * @param string $_statusDesc
     * @param int $_statusID
     * @param string $_tipoCliente
     * @param decimal $_valorDesconto
     * @param decimal $_valorEmbalagemPresente
     * @param decimal $_valorEncargos
     * @param decimal $_valorFrete
     * @param decimal $_valorTotal
     * @return EzCatalogoStructPedido
     */
    public function __construct($_afiliadoID = NULL,$_clienteID = NULL,$_codigoPedidoExterno = NULL,$_confirmacaoPagamento = NULL,$_cupomCodigo = NULL,$_cupomValorDesconto = NULL,$_dataVenda = NULL,$_eTA = NULL,$_entregaBairro = NULL,$_entregaCEP = NULL,$_entregaCidade = NULL,$_entregaComplementoEndereco = NULL,$_entregaEmail = NULL,$_entregaEstado = NULL,$_entregaLogradouro = NULL,$_entregaNome = NULL,$_entregaNumero = NULL,$_entregaPais = NULL,$_entregaTelefone = NULL,$_formaDePagamento = NULL,$_formaEntregaAlias = NULL,$_formaEntregaID = NULL,$_freteCodEnvio = NULL,$_itens = NULL,$_maiordisponibilidadeItem = NULL,$_numeroRegistroCliente = NULL,$_observacoes = NULL,$_observacoesLoja = NULL,$_origemPedido = NULL,$_pedidoID = NULL,$_previsaoEntregaEmDias = NULL,$_protocolo = NULL,$_statusDesc = NULL,$_statusID = NULL,$_tipoCliente = NULL,$_valorDesconto = NULL,$_valorEmbalagemPresente = NULL,$_valorEncargos = NULL,$_valorFrete = NULL,$_valorTotal = NULL)
    {
        parent::__construct(array('AfiliadoID'=>$_afiliadoID,'ClienteID'=>$_clienteID,'CodigoPedidoExterno'=>$_codigoPedidoExterno,'ConfirmacaoPagamento'=>$_confirmacaoPagamento,'CupomCodigo'=>$_cupomCodigo,'CupomValorDesconto'=>$_cupomValorDesconto,'DataVenda'=>$_dataVenda,'ETA'=>$_eTA,'EntregaBairro'=>$_entregaBairro,'EntregaCEP'=>$_entregaCEP,'EntregaCidade'=>$_entregaCidade,'EntregaComplementoEndereco'=>$_entregaComplementoEndereco,'EntregaEmail'=>$_entregaEmail,'EntregaEstado'=>$_entregaEstado,'EntregaLogradouro'=>$_entregaLogradouro,'EntregaNome'=>$_entregaNome,'EntregaNumero'=>$_entregaNumero,'EntregaPais'=>$_entregaPais,'EntregaTelefone'=>$_entregaTelefone,'FormaDePagamento'=>$_formaDePagamento,'FormaEntregaAlias'=>$_formaEntregaAlias,'FormaEntregaID'=>$_formaEntregaID,'FreteCodEnvio'=>$_freteCodEnvio,'Itens'=>($_itens instanceof EzCatalogoStructArrayOfPedidoItem)?$_itens:new EzCatalogoStructArrayOfPedidoItem($_itens),'MaiordisponibilidadeItem'=>$_maiordisponibilidadeItem,'NumeroRegistroCliente'=>$_numeroRegistroCliente,'Observacoes'=>$_observacoes,'ObservacoesLoja'=>$_observacoesLoja,'OrigemPedido'=>$_origemPedido,'PedidoID'=>$_pedidoID,'PrevisaoEntregaEmDias'=>$_previsaoEntregaEmDias,'Protocolo'=>$_protocolo,'StatusDesc'=>$_statusDesc,'StatusID'=>$_statusID,'TipoCliente'=>$_tipoCliente,'ValorDesconto'=>$_valorDesconto,'ValorEmbalagemPresente'=>$_valorEmbalagemPresente,'ValorEncargos'=>$_valorEncargos,'ValorFrete'=>$_valorFrete,'ValorTotal'=>$_valorTotal),false);
    }
    /**
     * Get AfiliadoID value
     * @return int|null
     */
    public function getAfiliadoID()
    {
        return $this->AfiliadoID;
    }
    /**
     * Set AfiliadoID value
     * @param int $_afiliadoID the AfiliadoID
     * @return int
     */
    public function setAfiliadoID($_afiliadoID)
    {
        return ($this->AfiliadoID = $_afiliadoID);
    }
    /**
     * Get ClienteID value
     * @return int|null
     */
    public function getClienteID()
    {
        return $this->ClienteID;
    }
    /**
     * Set ClienteID value
     * @param int $_clienteID the ClienteID
     * @return int
     */
    public function setClienteID($_clienteID)
    {
        return ($this->ClienteID = $_clienteID);
    }
    /**
     * Get CodigoPedidoExterno value
     * @return string|null
     */
    public function getCodigoPedidoExterno()
    {
        return $this->CodigoPedidoExterno;
    }
    /**
     * Set CodigoPedidoExterno value
     * @param string $_codigoPedidoExterno the CodigoPedidoExterno
     * @return string
     */
    public function setCodigoPedidoExterno($_codigoPedidoExterno)
    {
        return ($this->CodigoPedidoExterno = $_codigoPedidoExterno);
    }
    /**
     * Get ConfirmacaoPagamento value
     * @return EzCatalogoStructConfirmacaoPagamento|null
     */
    public function getConfirmacaoPagamento()
    {
        return $this->ConfirmacaoPagamento;
    }
    /**
     * Set ConfirmacaoPagamento value
     * @param EzCatalogoStructConfirmacaoPagamento $_confirmacaoPagamento the ConfirmacaoPagamento
     * @return EzCatalogoStructConfirmacaoPagamento
     */
    public function setConfirmacaoPagamento($_confirmacaoPagamento)
    {
        return ($this->ConfirmacaoPagamento = $_confirmacaoPagamento);
    }
    /**
     * Get CupomCodigo value
     * @return string|null
     */
    public function getCupomCodigo()
    {
        return $this->CupomCodigo;
    }
    /**
     * Set CupomCodigo value
     * @param string $_cupomCodigo the CupomCodigo
     * @return string
     */
    public function setCupomCodigo($_cupomCodigo)
    {
        return ($this->CupomCodigo = $_cupomCodigo);
    }
    /**
     * Get CupomValorDesconto value
     * @return decimal|null
     */
    public function getCupomValorDesconto()
    {
        return $this->CupomValorDesconto;
    }
    /**
     * Set CupomValorDesconto value
     * @param decimal $_cupomValorDesconto the CupomValorDesconto
     * @return decimal
     */
    public function setCupomValorDesconto($_cupomValorDesconto)
    {
        return ($this->CupomValorDesconto = $_cupomValorDesconto);
    }
    /**
     * Get DataVenda value
     * @return dateTime|null
     */
    public function getDataVenda()
    {
        return $this->DataVenda;
    }
    /**
     * Set DataVenda value
     * @param dateTime $_dataVenda the DataVenda
     * @return dateTime
     */
    public function setDataVenda($_dataVenda)
    {
        return ($this->DataVenda = $_dataVenda);
    }
    /**
     * Get ETA value
     * @return int|null
     */
    public function getETA()
    {
        return $this->ETA;
    }
    /**
     * Set ETA value
     * @param int $_eTA the ETA
     * @return int
     */
    public function setETA($_eTA)
    {
        return ($this->ETA = $_eTA);
    }
    /**
     * Get EntregaBairro value
     * @return string|null
     */
    public function getEntregaBairro()
    {
        return $this->EntregaBairro;
    }
    /**
     * Set EntregaBairro value
     * @param string $_entregaBairro the EntregaBairro
     * @return string
     */
    public function setEntregaBairro($_entregaBairro)
    {
        return ($this->EntregaBairro = $_entregaBairro);
    }
    /**
     * Get EntregaCEP value
     * @return string|null
     */
    public function getEntregaCEP()
    {
        return $this->EntregaCEP;
    }
    /**
     * Set EntregaCEP value
     * @param string $_entregaCEP the EntregaCEP
     * @return string
     */
    public function setEntregaCEP($_entregaCEP)
    {
        return ($this->EntregaCEP = $_entregaCEP);
    }
    /**
     * Get EntregaCidade value
     * @return string|null
     */
    public function getEntregaCidade()
    {
        return $this->EntregaCidade;
    }
    /**
     * Set EntregaCidade value
     * @param string $_entregaCidade the EntregaCidade
     * @return string
     */
    public function setEntregaCidade($_entregaCidade)
    {
        return ($this->EntregaCidade = $_entregaCidade);
    }
    /**
     * Get EntregaComplementoEndereco value
     * @return string|null
     */
    public function getEntregaComplementoEndereco()
    {
        return $this->EntregaComplementoEndereco;
    }
    /**
     * Set EntregaComplementoEndereco value
     * @param string $_entregaComplementoEndereco the EntregaComplementoEndereco
     * @return string
     */
    public function setEntregaComplementoEndereco($_entregaComplementoEndereco)
    {
        return ($this->EntregaComplementoEndereco = $_entregaComplementoEndereco);
    }
    /**
     * Get EntregaEmail value
     * @return string|null
     */
    public function getEntregaEmail()
    {
        return $this->EntregaEmail;
    }
    /**
     * Set EntregaEmail value
     * @param string $_entregaEmail the EntregaEmail
     * @return string
     */
    public function setEntregaEmail($_entregaEmail)
    {
        return ($this->EntregaEmail = $_entregaEmail);
    }
    /**
     * Get EntregaEstado value
     * @return string|null
     */
    public function getEntregaEstado()
    {
        return $this->EntregaEstado;
    }
    /**
     * Set EntregaEstado value
     * @param string $_entregaEstado the EntregaEstado
     * @return string
     */
    public function setEntregaEstado($_entregaEstado)
    {
        return ($this->EntregaEstado = $_entregaEstado);
    }
    /**
     * Get EntregaLogradouro value
     * @return string|null
     */
    public function getEntregaLogradouro()
    {
        return $this->EntregaLogradouro;
    }
    /**
     * Set EntregaLogradouro value
     * @param string $_entregaLogradouro the EntregaLogradouro
     * @return string
     */
    public function setEntregaLogradouro($_entregaLogradouro)
    {
        return ($this->EntregaLogradouro = $_entregaLogradouro);
    }
    /**
     * Get EntregaNome value
     * @return string|null
     */
    public function getEntregaNome()
    {
        return $this->EntregaNome;
    }
    /**
     * Set EntregaNome value
     * @param string $_entregaNome the EntregaNome
     * @return string
     */
    public function setEntregaNome($_entregaNome)
    {
        return ($this->EntregaNome = $_entregaNome);
    }
    /**
     * Get EntregaNumero value
     * @return string|null
     */
    public function getEntregaNumero()
    {
        return $this->EntregaNumero;
    }
    /**
     * Set EntregaNumero value
     * @param string $_entregaNumero the EntregaNumero
     * @return string
     */
    public function setEntregaNumero($_entregaNumero)
    {
        return ($this->EntregaNumero = $_entregaNumero);
    }
    /**
     * Get EntregaPais value
     * @return string|null
     */
    public function getEntregaPais()
    {
        return $this->EntregaPais;
    }
    /**
     * Set EntregaPais value
     * @param string $_entregaPais the EntregaPais
     * @return string
     */
    public function setEntregaPais($_entregaPais)
    {
        return ($this->EntregaPais = $_entregaPais);
    }
    /**
     * Get EntregaTelefone value
     * @return string|null
     */
    public function getEntregaTelefone()
    {
        return $this->EntregaTelefone;
    }
    /**
     * Set EntregaTelefone value
     * @param string $_entregaTelefone the EntregaTelefone
     * @return string
     */
    public function setEntregaTelefone($_entregaTelefone)
    {
        return ($this->EntregaTelefone = $_entregaTelefone);
    }
    /**
     * Get FormaDePagamento value
     * @return EzCatalogoStructFormaDePagamento|null
     */
    public function getFormaDePagamento()
    {
        return $this->FormaDePagamento;
    }
    /**
     * Set FormaDePagamento value
     * @param EzCatalogoStructFormaDePagamento $_formaDePagamento the FormaDePagamento
     * @return EzCatalogoStructFormaDePagamento
     */
    public function setFormaDePagamento($_formaDePagamento)
    {
        return ($this->FormaDePagamento = $_formaDePagamento);
    }
    /**
     * Get FormaEntregaAlias value
     * @return string|null
     */
    public function getFormaEntregaAlias()
    {
        return $this->FormaEntregaAlias;
    }
    /**
     * Set FormaEntregaAlias value
     * @param string $_formaEntregaAlias the FormaEntregaAlias
     * @return string
     */
    public function setFormaEntregaAlias($_formaEntregaAlias)
    {
        return ($this->FormaEntregaAlias = $_formaEntregaAlias);
    }
    /**
     * Get FormaEntregaID value
     * @return int|null
     */
    public function getFormaEntregaID()
    {
        return $this->FormaEntregaID;
    }
    /**
     * Set FormaEntregaID value
     * @param int $_formaEntregaID the FormaEntregaID
     * @return int
     */
    public function setFormaEntregaID($_formaEntregaID)
    {
        return ($this->FormaEntregaID = $_formaEntregaID);
    }
    /**
     * Get FreteCodEnvio value
     * @return string|null
     */
    public function getFreteCodEnvio()
    {
        return $this->FreteCodEnvio;
    }
    /**
     * Set FreteCodEnvio value
     * @param string $_freteCodEnvio the FreteCodEnvio
     * @return string
     */
    public function setFreteCodEnvio($_freteCodEnvio)
    {
        return ($this->FreteCodEnvio = $_freteCodEnvio);
    }
    /**
     * Get Itens value
     * @return EzCatalogoStructArrayOfPedidoItem|null
     */
    public function getItens()
    {
        return $this->Itens;
    }
    /**
     * Set Itens value
     * @param EzCatalogoStructArrayOfPedidoItem $_itens the Itens
     * @return EzCatalogoStructArrayOfPedidoItem
     */
    public function setItens($_itens)
    {
        return ($this->Itens = $_itens);
    }
    /**
     * Get MaiordisponibilidadeItem value
     * @return int|null
     */
    public function getMaiordisponibilidadeItem()
    {
        return $this->MaiordisponibilidadeItem;
    }
    /**
     * Set MaiordisponibilidadeItem value
     * @param int $_maiordisponibilidadeItem the MaiordisponibilidadeItem
     * @return int
     */
    public function setMaiordisponibilidadeItem($_maiordisponibilidadeItem)
    {
        return ($this->MaiordisponibilidadeItem = $_maiordisponibilidadeItem);
    }
    /**
     * Get NumeroRegistroCliente value
     * @return string|null
     */
    public function getNumeroRegistroCliente()
    {
        return $this->NumeroRegistroCliente;
    }
    /**
     * Set NumeroRegistroCliente value
     * @param string $_numeroRegistroCliente the NumeroRegistroCliente
     * @return string
     */
    public function setNumeroRegistroCliente($_numeroRegistroCliente)
    {
        return ($this->NumeroRegistroCliente = $_numeroRegistroCliente);
    }
    /**
     * Get Observacoes value
     * @return string|null
     */
    public function getObservacoes()
    {
        return $this->Observacoes;
    }
    /**
     * Set Observacoes value
     * @param string $_observacoes the Observacoes
     * @return string
     */
    public function setObservacoes($_observacoes)
    {
        return ($this->Observacoes = $_observacoes);
    }
    /**
     * Get ObservacoesLoja value
     * @return string|null
     */
    public function getObservacoesLoja()
    {
        return $this->ObservacoesLoja;
    }
    /**
     * Set ObservacoesLoja value
     * @param string $_observacoesLoja the ObservacoesLoja
     * @return string
     */
    public function setObservacoesLoja($_observacoesLoja)
    {
        return ($this->ObservacoesLoja = $_observacoesLoja);
    }
    /**
     * Get OrigemPedido value
     * @return string|null
     */
    public function getOrigemPedido()
    {
        return $this->OrigemPedido;
    }
    /**
     * Set OrigemPedido value
     * @param string $_origemPedido the OrigemPedido
     * @return string
     */
    public function setOrigemPedido($_origemPedido)
    {
        return ($this->OrigemPedido = $_origemPedido);
    }
    /**
     * Get PedidoID value
     * @return int|null
     */
    public function getPedidoID()
    {
        return $this->PedidoID;
    }
    /**
     * Set PedidoID value
     * @param int $_pedidoID the PedidoID
     * @return int
     */
    public function setPedidoID($_pedidoID)
    {
        return ($this->PedidoID = $_pedidoID);
    }
    /**
     * Get PrevisaoEntregaEmDias value
     * @return int|null
     */
    public function getPrevisaoEntregaEmDias()
    {
        return $this->PrevisaoEntregaEmDias;
    }
    /**
     * Set PrevisaoEntregaEmDias value
     * @param int $_previsaoEntregaEmDias the PrevisaoEntregaEmDias
     * @return int
     */
    public function setPrevisaoEntregaEmDias($_previsaoEntregaEmDias)
    {
        return ($this->PrevisaoEntregaEmDias = $_previsaoEntregaEmDias);
    }
    /**
     * Get Protocolo value
     * @return string|null
     */
    public function getProtocolo()
    {
        return $this->Protocolo;
    }
    /**
     * Set Protocolo value
     * @param string $_protocolo the Protocolo
     * @return string
     */
    public function setProtocolo($_protocolo)
    {
        return ($this->Protocolo = $_protocolo);
    }
    /**
     * Get StatusDesc value
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->StatusDesc;
    }
    /**
     * Set StatusDesc value
     * @param string $_statusDesc the StatusDesc
     * @return string
     */
    public function setStatusDesc($_statusDesc)
    {
        return ($this->StatusDesc = $_statusDesc);
    }
    /**
     * Get StatusID value
     * @return int|null
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }
    /**
     * Set StatusID value
     * @param int $_statusID the StatusID
     * @return int
     */
    public function setStatusID($_statusID)
    {
        return ($this->StatusID = $_statusID);
    }
    /**
     * Get TipoCliente value
     * @return string|null
     */
    public function getTipoCliente()
    {
        return $this->TipoCliente;
    }
    /**
     * Set TipoCliente value
     * @param string $_tipoCliente the TipoCliente
     * @return string
     */
    public function setTipoCliente($_tipoCliente)
    {
        return ($this->TipoCliente = $_tipoCliente);
    }
    /**
     * Get ValorDesconto value
     * @return decimal|null
     */
    public function getValorDesconto()
    {
        return $this->ValorDesconto;
    }
    /**
     * Set ValorDesconto value
     * @param decimal $_valorDesconto the ValorDesconto
     * @return decimal
     */
    public function setValorDesconto($_valorDesconto)
    {
        return ($this->ValorDesconto = $_valorDesconto);
    }
    /**
     * Get ValorEmbalagemPresente value
     * @return decimal|null
     */
    public function getValorEmbalagemPresente()
    {
        return $this->ValorEmbalagemPresente;
    }
    /**
     * Set ValorEmbalagemPresente value
     * @param decimal $_valorEmbalagemPresente the ValorEmbalagemPresente
     * @return decimal
     */
    public function setValorEmbalagemPresente($_valorEmbalagemPresente)
    {
        return ($this->ValorEmbalagemPresente = $_valorEmbalagemPresente);
    }
    /**
     * Get ValorEncargos value
     * @return decimal|null
     */
    public function getValorEncargos()
    {
        return $this->ValorEncargos;
    }
    /**
     * Set ValorEncargos value
     * @param decimal $_valorEncargos the ValorEncargos
     * @return decimal
     */
    public function setValorEncargos($_valorEncargos)
    {
        return ($this->ValorEncargos = $_valorEncargos);
    }
    /**
     * Get ValorFrete value
     * @return decimal|null
     */
    public function getValorFrete()
    {
        return $this->ValorFrete;
    }
    /**
     * Set ValorFrete value
     * @param decimal $_valorFrete the ValorFrete
     * @return decimal
     */
    public function setValorFrete($_valorFrete)
    {
        return ($this->ValorFrete = $_valorFrete);
    }
    /**
     * Get ValorTotal value
     * @return decimal|null
     */
    public function getValorTotal()
    {
        return $this->ValorTotal;
    }
    /**
     * Set ValorTotal value
     * @param decimal $_valorTotal the ValorTotal
     * @return decimal
     */
    public function setValorTotal($_valorTotal)
    {
        return ($this->ValorTotal = $_valorTotal);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructPedido
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
