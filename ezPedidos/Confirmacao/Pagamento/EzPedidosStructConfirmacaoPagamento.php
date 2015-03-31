<?php
/**
 * File for class EzPedidosStructConfirmacaoPagamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmacaoPagamento originally named ConfirmacaoPagamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmacaoPagamento extends EzPedidosWsdlClass
{
    /**
     * The CodigoAutorizacao
     * @var string
     */
    public $CodigoAutorizacao;
    /**
     * The CodigoErro
     * @var string
     */
    public $CodigoErro;
    /**
     * The DataCaptura
     * @var dateTime
     */
    public $DataCaptura;
    /**
     * The IdTransacaoBraspag
     * @var string
     */
    public $IdTransacaoBraspag;
    /**
     * The MensagemErro
     * @var string
     */
    public $MensagemErro;
    /**
     * The NumeroAutorizacao
     * @var string
     */
    public $NumeroAutorizacao;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for ConfirmacaoPagamento
     * @see parent::__construct()
     * @param string $_codigoAutorizacao
     * @param string $_codigoErro
     * @param dateTime $_dataCaptura
     * @param string $_idTransacaoBraspag
     * @param string $_mensagemErro
     * @param string $_numeroAutorizacao
     * @param string $_status
     * @return EzPedidosStructConfirmacaoPagamento
     */
    public function __construct($_codigoAutorizacao = NULL,$_codigoErro = NULL,$_dataCaptura = NULL,$_idTransacaoBraspag = NULL,$_mensagemErro = NULL,$_numeroAutorizacao = NULL,$_status = NULL)
    {
        parent::__construct(array('CodigoAutorizacao'=>$_codigoAutorizacao,'CodigoErro'=>$_codigoErro,'DataCaptura'=>$_dataCaptura,'IdTransacaoBraspag'=>$_idTransacaoBraspag,'MensagemErro'=>$_mensagemErro,'NumeroAutorizacao'=>$_numeroAutorizacao,'Status'=>$_status),false);
    }
    /**
     * Get CodigoAutorizacao value
     * @return string|null
     */
    public function getCodigoAutorizacao()
    {
        return $this->CodigoAutorizacao;
    }
    /**
     * Set CodigoAutorizacao value
     * @param string $_codigoAutorizacao the CodigoAutorizacao
     * @return string
     */
    public function setCodigoAutorizacao($_codigoAutorizacao)
    {
        return ($this->CodigoAutorizacao = $_codigoAutorizacao);
    }
    /**
     * Get CodigoErro value
     * @return string|null
     */
    public function getCodigoErro()
    {
        return $this->CodigoErro;
    }
    /**
     * Set CodigoErro value
     * @param string $_codigoErro the CodigoErro
     * @return string
     */
    public function setCodigoErro($_codigoErro)
    {
        return ($this->CodigoErro = $_codigoErro);
    }
    /**
     * Get DataCaptura value
     * @return dateTime|null
     */
    public function getDataCaptura()
    {
        return $this->DataCaptura;
    }
    /**
     * Set DataCaptura value
     * @param dateTime $_dataCaptura the DataCaptura
     * @return dateTime
     */
    public function setDataCaptura($_dataCaptura)
    {
        return ($this->DataCaptura = $_dataCaptura);
    }
    /**
     * Get IdTransacaoBraspag value
     * @return string|null
     */
    public function getIdTransacaoBraspag()
    {
        return $this->IdTransacaoBraspag;
    }
    /**
     * Set IdTransacaoBraspag value
     * @param string $_idTransacaoBraspag the IdTransacaoBraspag
     * @return string
     */
    public function setIdTransacaoBraspag($_idTransacaoBraspag)
    {
        return ($this->IdTransacaoBraspag = $_idTransacaoBraspag);
    }
    /**
     * Get MensagemErro value
     * @return string|null
     */
    public function getMensagemErro()
    {
        return $this->MensagemErro;
    }
    /**
     * Set MensagemErro value
     * @param string $_mensagemErro the MensagemErro
     * @return string
     */
    public function setMensagemErro($_mensagemErro)
    {
        return ($this->MensagemErro = $_mensagemErro);
    }
    /**
     * Get NumeroAutorizacao value
     * @return string|null
     */
    public function getNumeroAutorizacao()
    {
        return $this->NumeroAutorizacao;
    }
    /**
     * Set NumeroAutorizacao value
     * @param string $_numeroAutorizacao the NumeroAutorizacao
     * @return string
     */
    public function setNumeroAutorizacao($_numeroAutorizacao)
    {
        return ($this->NumeroAutorizacao = $_numeroAutorizacao);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $_status the Status
     * @return string
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmacaoPagamento
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
