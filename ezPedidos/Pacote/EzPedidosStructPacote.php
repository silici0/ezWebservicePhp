<?php
/**
 * File for class EzPedidosStructPacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPacote originally named Pacote
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPacote extends EzPedidosWsdlClass
{
    /**
     * The CodigoBarra
     * @var string
     */
    public $CodigoBarra;
    /**
     * The CodigoObjeto
     * @var string
     */
    public $CodigoObjeto;
    /**
     * The DataCriacao
     * @var dateTime
     */
    public $DataCriacao;
    /**
     * The DataEntrega
     * @var dateTime
     */
    public $DataEntrega;
    /**
     * The Entregue
     * @var boolean
     */
    public $Entregue;
    /**
     * The FormaDeEnvio
     * @var int
     */
    public $FormaDeEnvio;
    /**
     * The Observacoes
     * @var string
     */
    public $Observacoes;
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * The PacoteProdutos
     * @var EzPedidosStructArrayOfPacoteProduto
     */
    public $PacoteProdutos;
    /**
     * The PedidoCodigo
     * @var int
     */
    public $PedidoCodigo;
    /**
     * The TrackingStatus
     * @var int
     */
    public $TrackingStatus;
    /**
     * Constructor method for Pacote
     * @see parent::__construct()
     * @param string $_codigoBarra
     * @param string $_codigoObjeto
     * @param dateTime $_dataCriacao
     * @param dateTime $_dataEntrega
     * @param boolean $_entregue
     * @param int $_formaDeEnvio
     * @param string $_observacoes
     * @param int $_pacoteID
     * @param EzPedidosStructArrayOfPacoteProduto $_pacoteProdutos
     * @param int $_pedidoCodigo
     * @param int $_trackingStatus
     * @return EzPedidosStructPacote
     */
    public function __construct($_codigoBarra = NULL,$_codigoObjeto = NULL,$_dataCriacao = NULL,$_dataEntrega = NULL,$_entregue = NULL,$_formaDeEnvio = NULL,$_observacoes = NULL,$_pacoteID = NULL,$_pacoteProdutos = NULL,$_pedidoCodigo = NULL,$_trackingStatus = NULL)
    {
        parent::__construct(array('CodigoBarra'=>$_codigoBarra,'CodigoObjeto'=>$_codigoObjeto,'DataCriacao'=>$_dataCriacao,'DataEntrega'=>$_dataEntrega,'Entregue'=>$_entregue,'FormaDeEnvio'=>$_formaDeEnvio,'Observacoes'=>$_observacoes,'PacoteID'=>$_pacoteID,'PacoteProdutos'=>($_pacoteProdutos instanceof EzPedidosStructArrayOfPacoteProduto)?$_pacoteProdutos:new EzPedidosStructArrayOfPacoteProduto($_pacoteProdutos),'PedidoCodigo'=>$_pedidoCodigo,'TrackingStatus'=>$_trackingStatus),false);
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
     * Get CodigoObjeto value
     * @return string|null
     */
    public function getCodigoObjeto()
    {
        return $this->CodigoObjeto;
    }
    /**
     * Set CodigoObjeto value
     * @param string $_codigoObjeto the CodigoObjeto
     * @return string
     */
    public function setCodigoObjeto($_codigoObjeto)
    {
        return ($this->CodigoObjeto = $_codigoObjeto);
    }
    /**
     * Get DataCriacao value
     * @return dateTime|null
     */
    public function getDataCriacao()
    {
        return $this->DataCriacao;
    }
    /**
     * Set DataCriacao value
     * @param dateTime $_dataCriacao the DataCriacao
     * @return dateTime
     */
    public function setDataCriacao($_dataCriacao)
    {
        return ($this->DataCriacao = $_dataCriacao);
    }
    /**
     * Get DataEntrega value
     * @return dateTime|null
     */
    public function getDataEntrega()
    {
        return $this->DataEntrega;
    }
    /**
     * Set DataEntrega value
     * @param dateTime $_dataEntrega the DataEntrega
     * @return dateTime
     */
    public function setDataEntrega($_dataEntrega)
    {
        return ($this->DataEntrega = $_dataEntrega);
    }
    /**
     * Get Entregue value
     * @return boolean|null
     */
    public function getEntregue()
    {
        return $this->Entregue;
    }
    /**
     * Set Entregue value
     * @param boolean $_entregue the Entregue
     * @return boolean
     */
    public function setEntregue($_entregue)
    {
        return ($this->Entregue = $_entregue);
    }
    /**
     * Get FormaDeEnvio value
     * @return int|null
     */
    public function getFormaDeEnvio()
    {
        return $this->FormaDeEnvio;
    }
    /**
     * Set FormaDeEnvio value
     * @param int $_formaDeEnvio the FormaDeEnvio
     * @return int
     */
    public function setFormaDeEnvio($_formaDeEnvio)
    {
        return ($this->FormaDeEnvio = $_formaDeEnvio);
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
     * Get PacoteProdutos value
     * @return EzPedidosStructArrayOfPacoteProduto|null
     */
    public function getPacoteProdutos()
    {
        return $this->PacoteProdutos;
    }
    /**
     * Set PacoteProdutos value
     * @param EzPedidosStructArrayOfPacoteProduto $_pacoteProdutos the PacoteProdutos
     * @return EzPedidosStructArrayOfPacoteProduto
     */
    public function setPacoteProdutos($_pacoteProdutos)
    {
        return ($this->PacoteProdutos = $_pacoteProdutos);
    }
    /**
     * Get PedidoCodigo value
     * @return int|null
     */
    public function getPedidoCodigo()
    {
        return $this->PedidoCodigo;
    }
    /**
     * Set PedidoCodigo value
     * @param int $_pedidoCodigo the PedidoCodigo
     * @return int
     */
    public function setPedidoCodigo($_pedidoCodigo)
    {
        return ($this->PedidoCodigo = $_pedidoCodigo);
    }
    /**
     * Get TrackingStatus value
     * @return int|null
     */
    public function getTrackingStatus()
    {
        return $this->TrackingStatus;
    }
    /**
     * Set TrackingStatus value
     * @param int $_trackingStatus the TrackingStatus
     * @return int
     */
    public function setTrackingStatus($_trackingStatus)
    {
        return ($this->TrackingStatus = $_trackingStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPacote
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
