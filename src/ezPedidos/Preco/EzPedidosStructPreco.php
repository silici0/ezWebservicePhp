<?php
/**
 * File for class EzPedidosStructPreco
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPreco originally named Preco
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPreco extends EzPedidosWsdlClass
{
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
     * The PrecoProduto
     * @var decimal
     */
    public $PrecoProduto;
    /**
     * The PrecoPromocao
     * @var decimal
     */
    public $PrecoPromocao;
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
     * Constructor method for Preco
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @param string $_codigoIntegracaoSubVariacao
     * @param string $_codigoIntegracaoVariacao
     * @param decimal $_precoProduto
     * @param decimal $_precoPromocao
     * @param boolean $_promocao
     * @param dateTime $_promocaoFim
     * @param dateTime $_promocaoInicio
     * @return EzPedidosStructPreco
     */
    public function __construct($_codigoIntegracao = NULL,$_codigoIntegracaoSubVariacao = NULL,$_codigoIntegracaoVariacao = NULL,$_precoProduto = NULL,$_precoPromocao = NULL,$_promocao = NULL,$_promocaoFim = NULL,$_promocaoInicio = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao,'CodigoIntegracaoSubVariacao'=>$_codigoIntegracaoSubVariacao,'CodigoIntegracaoVariacao'=>$_codigoIntegracaoVariacao,'PrecoProduto'=>$_precoProduto,'PrecoPromocao'=>$_precoPromocao,'Promocao'=>$_promocao,'PromocaoFim'=>$_promocaoFim,'PromocaoInicio'=>$_promocaoInicio),false);
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
     * Get PrecoProduto value
     * @return decimal|null
     */
    public function getPrecoProduto()
    {
        return $this->PrecoProduto;
    }
    /**
     * Set PrecoProduto value
     * @param decimal $_precoProduto the PrecoProduto
     * @return decimal
     */
    public function setPrecoProduto($_precoProduto)
    {
        return ($this->PrecoProduto = $_precoProduto);
    }
    /**
     * Get PrecoPromocao value
     * @return decimal|null
     */
    public function getPrecoPromocao()
    {
        return $this->PrecoPromocao;
    }
    /**
     * Set PrecoPromocao value
     * @param decimal $_precoPromocao the PrecoPromocao
     * @return decimal
     */
    public function setPrecoPromocao($_precoPromocao)
    {
        return ($this->PrecoPromocao = $_precoPromocao);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPreco
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
