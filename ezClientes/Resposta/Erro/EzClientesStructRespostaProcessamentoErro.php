<?php
/**
 * File for class EzClientesStructRespostaProcessamentoErro
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructRespostaProcessamentoErro originally named RespostaProcessamentoErro
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructRespostaProcessamentoErro extends EzClientesWsdlClass
{
    /**
     * The CodigoErro
     * @var int
     */
    public $CodigoErro;
    /**
     * The Mensagem
     * @var string
     */
    public $Mensagem;
    /**
     * Constructor method for RespostaProcessamentoErro
     * @see parent::__construct()
     * @param int $_codigoErro
     * @param string $_mensagem
     * @return EzClientesStructRespostaProcessamentoErro
     */
    public function __construct($_codigoErro = NULL,$_mensagem = NULL)
    {
        parent::__construct(array('CodigoErro'=>$_codigoErro,'Mensagem'=>$_mensagem),false);
    }
    /**
     * Get CodigoErro value
     * @return int|null
     */
    public function getCodigoErro()
    {
        return $this->CodigoErro;
    }
    /**
     * Set CodigoErro value
     * @param int $_codigoErro the CodigoErro
     * @return int
     */
    public function setCodigoErro($_codigoErro)
    {
        return ($this->CodigoErro = $_codigoErro);
    }
    /**
     * Get Mensagem value
     * @return string|null
     */
    public function getMensagem()
    {
        return $this->Mensagem;
    }
    /**
     * Set Mensagem value
     * @param string $_mensagem the Mensagem
     * @return string
     */
    public function setMensagem($_mensagem)
    {
        return ($this->Mensagem = $_mensagem);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructRespostaProcessamentoErro
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
