<?php
/**
 * File for class EzCatalogoStructRespostaProcessamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructRespostaProcessamento originally named RespostaProcessamento
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructRespostaProcessamento extends EzCatalogoWsdlClass
{
    /**
     * The Erros
     * @var EzCatalogoStructArrayOfRespostaProcessamentoErro
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
     * @var EzCatalogoStructArrayOfRespostaProcessamento
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
     * @param EzCatalogoStructArrayOfRespostaProcessamentoErro $_erros
     * @param string $_mensagem
     * @param string $_objectId
     * @param string $_protocolo
     * @param EzCatalogoStructArrayOfRespostaProcessamento $_respostaProcessamentoLst
     * @param anyType $_resultado
     * @param StatusProcessamento $_status
     * @param string $_tipo
     * @param string $_valor
     * @return EzCatalogoStructRespostaProcessamento
     */
    public function __construct($_erros = NULL,$_mensagem = NULL,$_objectId = NULL,$_protocolo = NULL,$_respostaProcessamentoLst = NULL,$_resultado = NULL,$_status = NULL,$_tipo = NULL,$_valor = NULL)
    {
        parent::__construct(array('Erros'=>($_erros instanceof EzCatalogoStructArrayOfRespostaProcessamentoErro)?$_erros:new EzCatalogoStructArrayOfRespostaProcessamentoErro($_erros),'Mensagem'=>$_mensagem,'ObjectId'=>$_objectId,'Protocolo'=>$_protocolo,'RespostaProcessamentoLst'=>($_respostaProcessamentoLst instanceof EzCatalogoStructArrayOfRespostaProcessamento)?$_respostaProcessamentoLst:new EzCatalogoStructArrayOfRespostaProcessamento($_respostaProcessamentoLst),'Resultado'=>$_resultado,'Status'=>$_status,'Tipo'=>$_tipo,'Valor'=>$_valor),false);
    }
    /**
     * Get Erros value
     * @return EzCatalogoStructArrayOfRespostaProcessamentoErro|null
     */
    public function getErros()
    {
        return $this->Erros;
    }
    /**
     * Set Erros value
     * @param EzCatalogoStructArrayOfRespostaProcessamentoErro $_erros the Erros
     * @return EzCatalogoStructArrayOfRespostaProcessamentoErro
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
     * @return EzCatalogoStructArrayOfRespostaProcessamento|null
     */
    public function getRespostaProcessamentoLst()
    {
        return $this->RespostaProcessamentoLst;
    }
    /**
     * Set RespostaProcessamentoLst value
     * @param EzCatalogoStructArrayOfRespostaProcessamento $_respostaProcessamentoLst the RespostaProcessamentoLst
     * @return EzCatalogoStructArrayOfRespostaProcessamento
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
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructRespostaProcessamento
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
