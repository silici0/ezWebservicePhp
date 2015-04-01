<?php
/**
 * File for class EzCatalogoStructPacoteAcompanhamentoStatus
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructPacoteAcompanhamentoStatus originally named PacoteAcompanhamentoStatus
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructPacoteAcompanhamentoStatus extends EzCatalogoWsdlClass
{
    /**
     * The Data
     * @var dateTime
     */
    public $Data;
    /**
     * The Observacao
     * @var string
     */
    public $Observacao;
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
     * Constructor method for PacoteAcompanhamentoStatus
     * @see parent::__construct()
     * @param dateTime $_data
     * @param string $_observacao
     * @param int $_pacoteID
     * @param int $_trackingStatusID
     * @return EzCatalogoStructPacoteAcompanhamentoStatus
     */
    public function __construct($_data = NULL,$_observacao = NULL,$_pacoteID = NULL,$_trackingStatusID = NULL)
    {
        parent::__construct(array('Data'=>$_data,'Observacao'=>$_observacao,'PacoteID'=>$_pacoteID,'TrackingStatusID'=>$_trackingStatusID),false);
    }
    /**
     * Get Data value
     * @return dateTime|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param dateTime $_data the Data
     * @return dateTime
     */
    public function setData($_data)
    {
        return ($this->Data = $_data);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructPacoteAcompanhamentoStatus
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
