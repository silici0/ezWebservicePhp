<?php
/**
 * File for class EzClientesStructAcompanhamentoStatus
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructAcompanhamentoStatus originally named AcompanhamentoStatus
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructAcompanhamentoStatus extends EzClientesWsdlClass
{
    /**
     * The AlteraStatusPara
     * @var int
     */
    public $AlteraStatusPara;
    /**
     * The AlteraStatusPedido
     * @var boolean
     */
    public $AlteraStatusPedido;
    /**
     * The CodigoBarra
     * @var string
     */
    public $CodigoBarra;
    /**
     * The EmailTemplate
     * @var int
     */
    public $EmailTemplate;
    /**
     * The EnviaEmail
     * @var boolean
     */
    public $EnviaEmail;
    /**
     * The FinalizaTracking
     * @var boolean
     */
    public $FinalizaTracking;
    /**
     * The Nome
     * @var string
     */
    public $Nome;
    /**
     * The Observacao
     * @var string
     */
    public $Observacao;
    /**
     * The Ordem
     * @var int
     */
    public $Ordem;
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * The Publico
     * @var boolean
     */
    public $Publico;
    /**
     * The TrackingStatusID
     * @var int
     */
    public $TrackingStatusID;
    /**
     * Constructor method for AcompanhamentoStatus
     * @see parent::__construct()
     * @param int $_alteraStatusPara
     * @param boolean $_alteraStatusPedido
     * @param string $_codigoBarra
     * @param int $_emailTemplate
     * @param boolean $_enviaEmail
     * @param boolean $_finalizaTracking
     * @param string $_nome
     * @param string $_observacao
     * @param int $_ordem
     * @param int $_pacoteID
     * @param boolean $_publico
     * @param int $_trackingStatusID
     * @return EzClientesStructAcompanhamentoStatus
     */
    public function __construct($_alteraStatusPara = NULL,$_alteraStatusPedido = NULL,$_codigoBarra = NULL,$_emailTemplate = NULL,$_enviaEmail = NULL,$_finalizaTracking = NULL,$_nome = NULL,$_observacao = NULL,$_ordem = NULL,$_pacoteID = NULL,$_publico = NULL,$_trackingStatusID = NULL)
    {
        parent::__construct(array('AlteraStatusPara'=>$_alteraStatusPara,'AlteraStatusPedido'=>$_alteraStatusPedido,'CodigoBarra'=>$_codigoBarra,'EmailTemplate'=>$_emailTemplate,'EnviaEmail'=>$_enviaEmail,'FinalizaTracking'=>$_finalizaTracking,'Nome'=>$_nome,'Observacao'=>$_observacao,'Ordem'=>$_ordem,'PacoteID'=>$_pacoteID,'Publico'=>$_publico,'TrackingStatusID'=>$_trackingStatusID),false);
    }
    /**
     * Get AlteraStatusPara value
     * @return int|null
     */
    public function getAlteraStatusPara()
    {
        return $this->AlteraStatusPara;
    }
    /**
     * Set AlteraStatusPara value
     * @param int $_alteraStatusPara the AlteraStatusPara
     * @return int
     */
    public function setAlteraStatusPara($_alteraStatusPara)
    {
        return ($this->AlteraStatusPara = $_alteraStatusPara);
    }
    /**
     * Get AlteraStatusPedido value
     * @return boolean|null
     */
    public function getAlteraStatusPedido()
    {
        return $this->AlteraStatusPedido;
    }
    /**
     * Set AlteraStatusPedido value
     * @param boolean $_alteraStatusPedido the AlteraStatusPedido
     * @return boolean
     */
    public function setAlteraStatusPedido($_alteraStatusPedido)
    {
        return ($this->AlteraStatusPedido = $_alteraStatusPedido);
    }
    /**
     * Get CodigoBarra value
     * @return string|null
     */
    public function getCodigoBarra()
    {
        return $this->CodigoBarra;
    }
    /**
     * Set CodigoBarra value
     * @param string $_codigoBarra the CodigoBarra
     * @return string
     */
    public function setCodigoBarra($_codigoBarra)
    {
        return ($this->CodigoBarra = $_codigoBarra);
    }
    /**
     * Get EmailTemplate value
     * @return int|null
     */
    public function getEmailTemplate()
    {
        return $this->EmailTemplate;
    }
    /**
     * Set EmailTemplate value
     * @param int $_emailTemplate the EmailTemplate
     * @return int
     */
    public function setEmailTemplate($_emailTemplate)
    {
        return ($this->EmailTemplate = $_emailTemplate);
    }
    /**
     * Get EnviaEmail value
     * @return boolean|null
     */
    public function getEnviaEmail()
    {
        return $this->EnviaEmail;
    }
    /**
     * Set EnviaEmail value
     * @param boolean $_enviaEmail the EnviaEmail
     * @return boolean
     */
    public function setEnviaEmail($_enviaEmail)
    {
        return ($this->EnviaEmail = $_enviaEmail);
    }
    /**
     * Get FinalizaTracking value
     * @return boolean|null
     */
    public function getFinalizaTracking()
    {
        return $this->FinalizaTracking;
    }
    /**
     * Set FinalizaTracking value
     * @param boolean $_finalizaTracking the FinalizaTracking
     * @return boolean
     */
    public function setFinalizaTracking($_finalizaTracking)
    {
        return ($this->FinalizaTracking = $_finalizaTracking);
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
     * Get Observacao value
     * @return string|null
     */
    public function getObservacao()
    {
        return $this->Observacao;
    }
    /**
     * Set Observacao value
     * @param string $_observacao the Observacao
     * @return string
     */
    public function setObservacao($_observacao)
    {
        return ($this->Observacao = $_observacao);
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
     * Get PacoteID value
     * @return int|null
     */
    public function getPacoteID()
    {
        return $this->PacoteID;
    }
    /**
     * Set PacoteID value
     * @param int $_pacoteID the PacoteID
     * @return int
     */
    public function setPacoteID($_pacoteID)
    {
        return ($this->PacoteID = $_pacoteID);
    }
    /**
     * Get Publico value
     * @return boolean|null
     */
    public function getPublico()
    {
        return $this->Publico;
    }
    /**
     * Set Publico value
     * @param boolean $_publico the Publico
     * @return boolean
     */
    public function setPublico($_publico)
    {
        return ($this->Publico = $_publico);
    }
    /**
     * Get TrackingStatusID value
     * @return int|null
     */
    public function getTrackingStatusID()
    {
        return $this->TrackingStatusID;
    }
    /**
     * Set TrackingStatusID value
     * @param int $_trackingStatusID the TrackingStatusID
     * @return int
     */
    public function setTrackingStatusID($_trackingStatusID)
    {
        return ($this->TrackingStatusID = $_trackingStatusID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructAcompanhamentoStatus
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
