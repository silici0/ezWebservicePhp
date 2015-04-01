<?php
/**
 * File for class EzCatalogoStructFormaDePagamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructFormaDePagamento originally named FormaDePagamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructFormaDePagamento extends EzCatalogoWsdlClass
{
    /**
     * The BoletoNumeroBancario
     * @var string
     */
    public $BoletoNumeroBancario;
    /**
     * The BoletoVencimento
     * @var dateTime
     */
    public $BoletoVencimento;
    /**
     * The CartaoCodigoAutorizacao
     * @var string
     */
    public $CartaoCodigoAutorizacao;
    /**
     * The CartaoCodigoSeguranca
     * @var string
     */
    public $CartaoCodigoSeguranca;
    /**
     * The CartaoNomeImpresso
     * @var string
     */
    public $CartaoNomeImpresso;
    /**
     * The CartaoNumero
     * @var string
     */
    public $CartaoNumero;
    /**
     * The CartaoQuantidadeParcelas
     * @var int
     */
    public $CartaoQuantidadeParcelas;
    /**
     * The CartaoValidade
     * @var string
     */
    public $CartaoValidade;
    /**
     * The FormaPagamentoAlias
     * @var string
     */
    public $FormaPagamentoAlias;
    /**
     * The FormaPagamentoID
     * @var int
     */
    public $FormaPagamentoID;
    /**
     * The Valor
     * @var double
     */
    public $Valor;
    /**
     * Constructor method for FormaDePagamento
     * @see parent::__construct()
     * @param string $_boletoNumeroBancario
     * @param dateTime $_boletoVencimento
     * @param string $_cartaoCodigoAutorizacao
     * @param string $_cartaoCodigoSeguranca
     * @param string $_cartaoNomeImpresso
     * @param string $_cartaoNumero
     * @param int $_cartaoQuantidadeParcelas
     * @param string $_cartaoValidade
     * @param string $_formaPagamentoAlias
     * @param int $_formaPagamentoID
     * @param double $_valor
     * @return EzCatalogoStructFormaDePagamento
     */
    public function __construct($_boletoNumeroBancario = NULL,$_boletoVencimento = NULL,$_cartaoCodigoAutorizacao = NULL,$_cartaoCodigoSeguranca = NULL,$_cartaoNomeImpresso = NULL,$_cartaoNumero = NULL,$_cartaoQuantidadeParcelas = NULL,$_cartaoValidade = NULL,$_formaPagamentoAlias = NULL,$_formaPagamentoID = NULL,$_valor = NULL)
    {
        parent::__construct(array('BoletoNumeroBancario'=>$_boletoNumeroBancario,'BoletoVencimento'=>$_boletoVencimento,'CartaoCodigoAutorizacao'=>$_cartaoCodigoAutorizacao,'CartaoCodigoSeguranca'=>$_cartaoCodigoSeguranca,'CartaoNomeImpresso'=>$_cartaoNomeImpresso,'CartaoNumero'=>$_cartaoNumero,'CartaoQuantidadeParcelas'=>$_cartaoQuantidadeParcelas,'CartaoValidade'=>$_cartaoValidade,'FormaPagamentoAlias'=>$_formaPagamentoAlias,'FormaPagamentoID'=>$_formaPagamentoID,'Valor'=>$_valor),false);
    }
    /**
     * Get BoletoNumeroBancario value
     * @return string|null
     */
    public function getBoletoNumeroBancario()
    {
        return $this->BoletoNumeroBancario;
    }
    /**
     * Set BoletoNumeroBancario value
     * @param string $_boletoNumeroBancario the BoletoNumeroBancario
     * @return string
     */
    public function setBoletoNumeroBancario($_boletoNumeroBancario)
    {
        return ($this->BoletoNumeroBancario = $_boletoNumeroBancario);
    }
    /**
     * Get BoletoVencimento value
     * @return dateTime|null
     */
    public function getBoletoVencimento()
    {
        return $this->BoletoVencimento;
    }
    /**
     * Set BoletoVencimento value
     * @param dateTime $_boletoVencimento the BoletoVencimento
     * @return dateTime
     */
    public function setBoletoVencimento($_boletoVencimento)
    {
        return ($this->BoletoVencimento = $_boletoVencimento);
    }
    /**
     * Get CartaoCodigoAutorizacao value
     * @return string|null
     */
    public function getCartaoCodigoAutorizacao()
    {
        return $this->CartaoCodigoAutorizacao;
    }
    /**
     * Set CartaoCodigoAutorizacao value
     * @param string $_cartaoCodigoAutorizacao the CartaoCodigoAutorizacao
     * @return string
     */
    public function setCartaoCodigoAutorizacao($_cartaoCodigoAutorizacao)
    {
        return ($this->CartaoCodigoAutorizacao = $_cartaoCodigoAutorizacao);
    }
    /**
     * Get CartaoCodigoSeguranca value
     * @return string|null
     */
    public function getCartaoCodigoSeguranca()
    {
        return $this->CartaoCodigoSeguranca;
    }
    /**
     * Set CartaoCodigoSeguranca value
     * @param string $_cartaoCodigoSeguranca the CartaoCodigoSeguranca
     * @return string
     */
    public function setCartaoCodigoSeguranca($_cartaoCodigoSeguranca)
    {
        return ($this->CartaoCodigoSeguranca = $_cartaoCodigoSeguranca);
    }
    /**
     * Get CartaoNomeImpresso value
     * @return string|null
     */
    public function getCartaoNomeImpresso()
    {
        return $this->CartaoNomeImpresso;
    }
    /**
     * Set CartaoNomeImpresso value
     * @param string $_cartaoNomeImpresso the CartaoNomeImpresso
     * @return string
     */
    public function setCartaoNomeImpresso($_cartaoNomeImpresso)
    {
        return ($this->CartaoNomeImpresso = $_cartaoNomeImpresso);
    }
    /**
     * Get CartaoNumero value
     * @return string|null
     */
    public function getCartaoNumero()
    {
        return $this->CartaoNumero;
    }
    /**
     * Set CartaoNumero value
     * @param string $_cartaoNumero the CartaoNumero
     * @return string
     */
    public function setCartaoNumero($_cartaoNumero)
    {
        return ($this->CartaoNumero = $_cartaoNumero);
    }
    /**
     * Get CartaoQuantidadeParcelas value
     * @return int|null
     */
    public function getCartaoQuantidadeParcelas()
    {
        return $this->CartaoQuantidadeParcelas;
    }
    /**
     * Set CartaoQuantidadeParcelas value
     * @param int $_cartaoQuantidadeParcelas the CartaoQuantidadeParcelas
     * @return int
     */
    public function setCartaoQuantidadeParcelas($_cartaoQuantidadeParcelas)
    {
        return ($this->CartaoQuantidadeParcelas = $_cartaoQuantidadeParcelas);
    }
    /**
     * Get CartaoValidade value
     * @return string|null
     */
    public function getCartaoValidade()
    {
        return $this->CartaoValidade;
    }
    /**
     * Set CartaoValidade value
     * @param string $_cartaoValidade the CartaoValidade
     * @return string
     */
    public function setCartaoValidade($_cartaoValidade)
    {
        return ($this->CartaoValidade = $_cartaoValidade);
    }
    /**
     * Get FormaPagamentoAlias value
     * @return string|null
     */
    public function getFormaPagamentoAlias()
    {
        return $this->FormaPagamentoAlias;
    }
    /**
     * Set FormaPagamentoAlias value
     * @param string $_formaPagamentoAlias the FormaPagamentoAlias
     * @return string
     */
    public function setFormaPagamentoAlias($_formaPagamentoAlias)
    {
        return ($this->FormaPagamentoAlias = $_formaPagamentoAlias);
    }
    /**
     * Get FormaPagamentoID value
     * @return int|null
     */
    public function getFormaPagamentoID()
    {
        return $this->FormaPagamentoID;
    }
    /**
     * Set FormaPagamentoID value
     * @param int $_formaPagamentoID the FormaPagamentoID
     * @return int
     */
    public function setFormaPagamentoID($_formaPagamentoID)
    {
        return ($this->FormaPagamentoID = $_formaPagamentoID);
    }
    /**
     * Get Valor value
     * @return double|null
     */
    public function getValor()
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param double $_valor the Valor
     * @return double
     */
    public function setValor($_valor)
    {
        return ($this->Valor = $_valor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructFormaDePagamento
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
