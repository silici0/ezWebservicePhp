<?php
/**
 * File for class EzPedidosStructEstoque
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructEstoque originally named Estoque
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructEstoque extends EzPedidosWsdlClass
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
     * Constructor method for Estoque
     * @see parent::__construct()
     * @param string $_codigoIntegracao
     * @param string $_codigoIntegracaoSubVariacao
     * @param string $_codigoIntegracaoVariacao
     * @param int $_estoqueAtual
     * @param int $_estoqueMinimo
     * @return EzPedidosStructEstoque
     */
    public function __construct($_codigoIntegracao = NULL,$_codigoIntegracaoSubVariacao = NULL,$_codigoIntegracaoVariacao = NULL,$_estoqueAtual = NULL,$_estoqueMinimo = NULL)
    {
        parent::__construct(array('CodigoIntegracao'=>$_codigoIntegracao,'CodigoIntegracaoSubVariacao'=>$_codigoIntegracaoSubVariacao,'CodigoIntegracaoVariacao'=>$_codigoIntegracaoVariacao,'EstoqueAtual'=>$_estoqueAtual,'EstoqueMinimo'=>$_estoqueMinimo),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructEstoque
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
