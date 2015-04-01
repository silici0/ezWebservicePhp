<?php
/**
 * File for class EzCatalogoStructPedidoItem
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructPedidoItem originally named PedidoItem
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructPedidoItem extends EzCatalogoWsdlClass
{
    /**
     * The AtributosEspeciais
     * @var string
     */
    public $AtributosEspeciais;
    /**
     * The CodigoDoKit
     * @var int
     */
    public $CodigoDoKit;
    /**
     * The CodigoDoProduto
     * @var int
     */
    public $CodigoDoProduto;
    /**
     * The CodigoIntegracao
     * @var string
     */
    public $CodigoIntegracao;
    /**
     * The CodigoIntegracaoSubVariacao
     * @var string
     */
    public $CodigoIntegracaoSubVariacao;
    /**
     * The CodigoIntegracaoVariacao
     * @var string
     */
    public $CodigoIntegracaoVariacao;
    /**
     * The DescontoItem
     * @var double
     */
    public $DescontoItem;
    /**
     * The DisponibilidadeItem
     * @var int
     */
    public $DisponibilidadeItem;
    /**
     * The EmbalagemPresente
     * @var boolean
     */
    public $EmbalagemPresente;
    /**
     * The NomeDoProduto
     * @var string
     */
    public $NomeDoProduto;
    /**
     * The PrecoCusto
     * @var double
     */
    public $PrecoCusto;
    /**
     * The PrecoUnitario
     * @var double
     */
    public $PrecoUnitario;
    /**
     * The PrevisaoEntregaEmDias
     * @var int
     */
    public $PrevisaoEntregaEmDias;
    /**
     * The Quantidade
     * @var int
     */
    public $Quantidade;
    /**
     * The Referencia
     * @var string
     */
    public $Referencia;
    /**
     * Constructor method for PedidoItem
     * @see parent::__construct()
     * @param string $_atributosEspeciais
     * @param int $_codigoDoKit
     * @param int $_codigoDoProduto
     * @param string $_codigoIntegracao
     * @param string $_codigoIntegracaoSubVariacao
     * @param string $_codigoIntegracaoVariacao
     * @param double $_descontoItem
     * @param int $_disponibilidadeItem
     * @param boolean $_embalagemPresente
     * @param string $_nomeDoProduto
     * @param double $_precoCusto
     * @param double $_precoUnitario
     * @param int $_previsaoEntregaEmDias
     * @param int $_quantidade
     * @param string $_referencia
     * @return EzCatalogoStructPedidoItem
     */
    public function __construct($_atributosEspeciais = NULL,$_codigoDoKit = NULL,$_codigoDoProduto = NULL,$_codigoIntegracao = NULL,$_codigoIntegracaoSubVariacao = NULL,$_codigoIntegracaoVariacao = NULL,$_descontoItem = NULL,$_disponibilidadeItem = NULL,$_embalagemPresente = NULL,$_nomeDoProduto = NULL,$_precoCusto = NULL,$_precoUnitario = NULL,$_previsaoEntregaEmDias = NULL,$_quantidade = NULL,$_referencia = NULL)
    {
        parent::__construct(array('AtributosEspeciais'=>$_atributosEspeciais,'CodigoDoKit'=>$_codigoDoKit,'CodigoDoProduto'=>$_codigoDoProduto,'CodigoIntegracao'=>$_codigoIntegracao,'CodigoIntegracaoSubVariacao'=>$_codigoIntegracaoSubVariacao,'CodigoIntegracaoVariacao'=>$_codigoIntegracaoVariacao,'DescontoItem'=>$_descontoItem,'DisponibilidadeItem'=>$_disponibilidadeItem,'EmbalagemPresente'=>$_embalagemPresente,'NomeDoProduto'=>$_nomeDoProduto,'PrecoCusto'=>$_precoCusto,'PrecoUnitario'=>$_precoUnitario,'PrevisaoEntregaEmDias'=>$_previsaoEntregaEmDias,'Quantidade'=>$_quantidade,'Referencia'=>$_referencia),false);
    }
    /**
     * Get AtributosEspeciais value
     * @return string|null
     */
    public function getAtributosEspeciais()
    {
        return $this->AtributosEspeciais;
    }
    /**
     * Set AtributosEspeciais value
     * @param string $_atributosEspeciais the AtributosEspeciais
     * @return string
     */
    public function setAtributosEspeciais($_atributosEspeciais)
    {
        return ($this->AtributosEspeciais = $_atributosEspeciais);
    }
    /**
     * Get CodigoDoKit value
     * @return int|null
     */
    public function getCodigoDoKit()
    {
        return $this->CodigoDoKit;
    }
    /**
     * Set CodigoDoKit value
     * @param int $_codigoDoKit the CodigoDoKit
     * @return int
     */
    public function setCodigoDoKit($_codigoDoKit)
    {
        return ($this->CodigoDoKit = $_codigoDoKit);
    }
    /**
     * Get CodigoDoProduto value
     * @return int|null
     */
    public function getCodigoDoProduto()
    {
        return $this->CodigoDoProduto;
    }
    /**
     * Set CodigoDoProduto value
     * @param int $_codigoDoProduto the CodigoDoProduto
     * @return int
     */
    public function setCodigoDoProduto($_codigoDoProduto)
    {
        return ($this->CodigoDoProduto = $_codigoDoProduto);
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
     * Get CodigoIntegracaoSubVariacao value
     * @return string|null
     */
    public function getCodigoIntegracaoSubVariacao()
    {
        return $this->CodigoIntegracaoSubVariacao;
    }
    /**
     * Set CodigoIntegracaoSubVariacao value
     * @param string $_codigoIntegracaoSubVariacao the CodigoIntegracaoSubVariacao
     * @return string
     */
    public function setCodigoIntegracaoSubVariacao($_codigoIntegracaoSubVariacao)
    {
        return ($this->CodigoIntegracaoSubVariacao = $_codigoIntegracaoSubVariacao);
    }
    /**
     * Get CodigoIntegracaoVariacao value
     * @return string|null
     */
    public function getCodigoIntegracaoVariacao()
    {
        return $this->CodigoIntegracaoVariacao;
    }
    /**
     * Set CodigoIntegracaoVariacao value
     * @param string $_codigoIntegracaoVariacao the CodigoIntegracaoVariacao
     * @return string
     */
    public function setCodigoIntegracaoVariacao($_codigoIntegracaoVariacao)
    {
        return ($this->CodigoIntegracaoVariacao = $_codigoIntegracaoVariacao);
    }
    /**
     * Get DescontoItem value
     * @return double|null
     */
    public function getDescontoItem()
    {
        return $this->DescontoItem;
    }
    /**
     * Set DescontoItem value
     * @param double $_descontoItem the DescontoItem
     * @return double
     */
    public function setDescontoItem($_descontoItem)
    {
        return ($this->DescontoItem = $_descontoItem);
    }
    /**
     * Get DisponibilidadeItem value
     * @return int|null
     */
    public function getDisponibilidadeItem()
    {
        return $this->DisponibilidadeItem;
    }
    /**
     * Set DisponibilidadeItem value
     * @param int $_disponibilidadeItem the DisponibilidadeItem
     * @return int
     */
    public function setDisponibilidadeItem($_disponibilidadeItem)
    {
        return ($this->DisponibilidadeItem = $_disponibilidadeItem);
    }
    /**
     * Get EmbalagemPresente value
     * @return boolean|null
     */
    public function getEmbalagemPresente()
    {
        return $this->EmbalagemPresente;
    }
    /**
     * Set EmbalagemPresente value
     * @param boolean $_embalagemPresente the EmbalagemPresente
     * @return boolean
     */
    public function setEmbalagemPresente($_embalagemPresente)
    {
        return ($this->EmbalagemPresente = $_embalagemPresente);
    }
    /**
     * Get NomeDoProduto value
     * @return string|null
     */
    public function getNomeDoProduto()
    {
        return $this->NomeDoProduto;
    }
    /**
     * Set NomeDoProduto value
     * @param string $_nomeDoProduto the NomeDoProduto
     * @return string
     */
    public function setNomeDoProduto($_nomeDoProduto)
    {
        return ($this->NomeDoProduto = $_nomeDoProduto);
    }
    /**
     * Get PrecoCusto value
     * @return double|null
     */
    public function getPrecoCusto()
    {
        return $this->PrecoCusto;
    }
    /**
     * Set PrecoCusto value
     * @param double $_precoCusto the PrecoCusto
     * @return double
     */
    public function setPrecoCusto($_precoCusto)
    {
        return ($this->PrecoCusto = $_precoCusto);
    }
    /**
     * Get PrecoUnitario value
     * @return double|null
     */
    public function getPrecoUnitario()
    {
        return $this->PrecoUnitario;
    }
    /**
     * Set PrecoUnitario value
     * @param double $_precoUnitario the PrecoUnitario
     * @return double
     */
    public function setPrecoUnitario($_precoUnitario)
    {
        return ($this->PrecoUnitario = $_precoUnitario);
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
     * Get Quantidade value
     * @return int|null
     */
    public function getQuantidade()
    {
        return $this->Quantidade;
    }
    /**
     * Set Quantidade value
     * @param int $_quantidade the Quantidade
     * @return int
     */
    public function setQuantidade($_quantidade)
    {
        return ($this->Quantidade = $_quantidade);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructPedidoItem
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
