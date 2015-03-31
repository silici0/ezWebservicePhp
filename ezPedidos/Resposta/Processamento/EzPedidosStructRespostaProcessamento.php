<?php
/**
 * File for class EzPedidosStructRespostaProcessamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRespostaProcessamento originally named RespostaProcessamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRespostaProcessamento extends EzPedidosWsdlClass
{
    /**
     * The Erros
     * @var EzPedidosStructArrayOfRespostaProcessamentoErro
     */
    public $Erros;
    /**
     * The Mensagem
     * @var string
     */
    public $Mensagem;
    /**
     * The ObjectId
     * @var string
     */
    public $ObjectId;
    /**
     * The Protocolo
     * @var string
     */
    public $Protocolo;
    /**
     * The RespostaProcessamentoLst
     * @var EzPedidosStructArrayOfRespostaProcessamento
     */
    public $RespostaProcessamentoLst;
    /**
     * The Resultado
     * @var anyType
     */
    public $Resultado;
    /**
     * The Status
     * @var StatusProcessamento
     */
    public $Status;
    /**
     * The Tipo
     * @var string
     */
    public $Tipo;
    /**
     * The Valor
     * @var string
     */
    public $Valor;
    /**
     * Constructor method for RespostaProcessamento
     * @see parent::__construct()
     * @param EzPedidosStructArrayOfRespostaProcessamentoErro $_erros
     * @param string $_mensagem
     * @param string $_objectId
     * @param string $_protocolo
     * @param EzPedidosStructArrayOfRespostaProcessamento $_respostaProcessamentoLst
     * @param anyType $_resultado
     * @param StatusProcessamento $_status
     * @param string $_tipo
     * @param string $_valor
     * @return EzPedidosStructRespostaProcessamento
     */
    public function __construct($_erros = NULL,$_mensagem = NULL,$_objectId = NULL,$_protocolo = NULL,$_respostaProcessamentoLst = NULL,$_resultado = NULL,$_status = NULL,$_tipo = NULL,$_valor = NULL)
    {
        parent::__construct(array('Erros'=>($_erros instanceof EzPedidosStructArrayOfRespostaProcessamentoErro)?$_erros:new EzPedidosStructArrayOfRespostaProcessamentoErro($_erros),'Mensagem'=>$_mensagem,'ObjectId'=>$_objectId,'Protocolo'=>$_protocolo,'RespostaProcessamentoLst'=>($_respostaProcessamentoLst instanceof EzPedidosStructArrayOfRespostaProcessamento)?$_respostaProcessamentoLst:new EzPedidosStructArrayOfRespostaProcessamento($_respostaProcessamentoLst),'Resultado'=>$_resultado,'Status'=>$_status,'Tipo'=>$_tipo,'Valor'=>$_valor),false);
    }
    /**
     * Get Erros value
     * @return EzPedidosStructArrayOfRespostaProcessamentoErro|null
     */
    public function getErros()
    {
        return $this->Erros;
    }
    /**
     * Set Erros value
     * @param EzPedidosStructArrayOfRespostaProcessamentoErro $_erros the Erros
     * @return EzPedidosStructArrayOfRespostaProcessamentoErro
     */
    public function setErros($_erros)
    {
        return ($this->Erros = $_erros);
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
     * Get ObjectId value
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $_objectId the ObjectId
     * @return string
     */
    public function setObjectId($_objectId)
    {
        return ($this->ObjectId = $_objectId);
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
     * Get RespostaProcessamentoLst value
     * @return EzPedidosStructArrayOfRespostaProcessamento|null
     */
    public function getRespostaProcessamentoLst()
    {
        return $this->RespostaProcessamentoLst;
    }
    /**
     * Set RespostaProcessamentoLst value
     * @param EzPedidosStructArrayOfRespostaProcessamento $_respostaProcessamentoLst the RespostaProcessamentoLst
     * @return EzPedidosStructArrayOfRespostaProcessamento
     */
    public function setRespostaProcessamentoLst($_respostaProcessamentoLst)
    {
        return ($this->RespostaProcessamentoLst = $_respostaProcessamentoLst);
    }
    /**
     * Get Resultado value
     * @return anyType|null
     */
    public function getResultado()
    {
        return $this->Resultado;
    }
    /**
     * Set Resultado value
     * @param anyType $_resultado the Resultado
     * @return anyType
     */
    public function setResultado($_resultado)
    {
        return ($this->Resultado = $_resultado);
    }
    /**
     * Get Status value
     * @return StatusProcessamento|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param StatusProcessamento $_status the Status
     * @return StatusProcessamento
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Get Tipo value
     * @return string|null
     */
    public function getTipo()
    {
        return $this->Tipo;
    }
    /**
     * Set Tipo value
     * @param string $_tipo the Tipo
     * @return string
     */
    public function setTipo($_tipo)
    {
        return ($this->Tipo = $_tipo);
    }
    /**
     * Get Valor value
     * @return string|null
     */
    public function getValor()
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param string $_valor the Valor
     * @return string
     */
    public function setValor($_valor)
    {
        return ($this->Valor = $_valor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRespostaProcessamento
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
