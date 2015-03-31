<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorCodigoBarras
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorCodigoBarras originally named AtualizarStatusPacotePorCodigoBarras
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorCodigoBarras extends EzPedidosWsdlClass
{
    /**
     * The CodigoBarras
     * @var string
     */
    public $CodigoBarras;
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
     * Constructor method for AtualizarStatusPacotePorCodigoBarras
     * @see parent::__construct()
     * @param string $_codigoBarras
     * @param int $_trackingStatusID
     * @param string $_observacoes
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarras
     */
    public function __construct($_codigoBarras = NULL,$_trackingStatusID = NULL,$_observacoes = NULL)
    {
        parent::__construct(array('CodigoBarras'=>$_codigoBarras,'TrackingStatusID'=>$_trackingStatusID,'Observacoes'=>$_observacoes),false);
    }
    /**
     * Get CodigoBarras value
     * @return string|null
     */
    public function getCodigoBarras()
    {
        return $this->CodigoBarras;
    }
    /**
     * Set CodigoBarras value
     * @param string $_codigoBarras the CodigoBarras
     * @return string
     */
    public function setCodigoBarras($_codigoBarras)
    {
        return ($this->CodigoBarras = $_codigoBarras);
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
     * @return EzPedidosStructAtualizarStatusPacotePorCodigoBarras
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
