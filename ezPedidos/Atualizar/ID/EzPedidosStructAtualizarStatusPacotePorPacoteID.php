<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorPacoteID
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorPacoteID originally named AtualizarStatusPacotePorPacoteID
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorPacoteID extends EzPedidosWsdlClass
{
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * The TrackingStatusID
     * @var int
     */
    public $TrackingStatusID;
    /**
     * The Observacoes
     * @var string
     */
    public $Observacoes;
    /**
     * Constructor method for AtualizarStatusPacotePorPacoteID
     * @see parent::__construct()
     * @param int $_pacoteID
     * @param int $_trackingStatusID
     * @param string $_observacoes
     * @return EzPedidosStructAtualizarStatusPacotePorPacoteID
     */
    public function __construct($_pacoteID = NULL,$_trackingStatusID = NULL,$_observacoes = NULL)
    {
        parent::__construct(array('PacoteID'=>$_pacoteID,'TrackingStatusID'=>$_trackingStatusID,'Observacoes'=>$_observacoes),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPacotePorPacoteID
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
