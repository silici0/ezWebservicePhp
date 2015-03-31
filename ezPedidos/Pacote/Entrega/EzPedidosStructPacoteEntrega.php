<?php
/**
 * File for class EzPedidosStructPacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPacoteEntrega originally named PacoteEntrega
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPacoteEntrega extends EzPedidosWsdlClass
{
    /**
     * The CodigoRastreio
     * @var string
     */
    public $CodigoRastreio;
    /**
     * The DataEntregaTransportadora
     * @var dateTime
     */
    public $DataEntregaTransportadora;
    /**
     * The DataEstimativaEntrega
     * @var dateTime
     */
    public $DataEstimativaEntrega;
    /**
     * The PacoteEntregaItems
     * @var EzPedidosStructArrayOfPacoteEntregaItem
     */
    public $PacoteEntregaItems;
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * The PedidoCodigo
     * @var int
     */
    public $PedidoCodigo;
    /**
     * Constructor method for PacoteEntrega
     * @see parent::__construct()
     * @param string $_codigoRastreio
     * @param dateTime $_dataEntregaTransportadora
     * @param dateTime $_dataEstimativaEntrega
     * @param EzPedidosStructArrayOfPacoteEntregaItem $_pacoteEntregaItems
     * @param int $_pacoteID
     * @param int $_pedidoCodigo
     * @return EzPedidosStructPacoteEntrega
     */
    public function __construct($_codigoRastreio = NULL,$_dataEntregaTransportadora = NULL,$_dataEstimativaEntrega = NULL,$_pacoteEntregaItems = NULL,$_pacoteID = NULL,$_pedidoCodigo = NULL)
    {
        parent::__construct(array('CodigoRastreio'=>$_codigoRastreio,'DataEntregaTransportadora'=>$_dataEntregaTransportadora,'DataEstimativaEntrega'=>$_dataEstimativaEntrega,'PacoteEntregaItems'=>($_pacoteEntregaItems instanceof EzPedidosStructArrayOfPacoteEntregaItem)?$_pacoteEntregaItems:new EzPedidosStructArrayOfPacoteEntregaItem($_pacoteEntregaItems),'PacoteID'=>$_pacoteID,'PedidoCodigo'=>$_pedidoCodigo),false);
    }
    /**
     * Get CodigoRastreio value
     * @return string|null
     */
    public function getCodigoRastreio()
    {
        return $this->CodigoRastreio;
    }
    /**
     * Set CodigoRastreio value
     * @param string $_codigoRastreio the CodigoRastreio
     * @return string
     */
    public function setCodigoRastreio($_codigoRastreio)
    {
        return ($this->CodigoRastreio = $_codigoRastreio);
    }
    /**
     * Get DataEntregaTransportadora value
     * @return dateTime|null
     */
    public function getDataEntregaTransportadora()
    {
        return $this->DataEntregaTransportadora;
    }
    /**
     * Set DataEntregaTransportadora value
     * @param dateTime $_dataEntregaTransportadora the DataEntregaTransportadora
     * @return dateTime
     */
    public function setDataEntregaTransportadora($_dataEntregaTransportadora)
    {
        return ($this->DataEntregaTransportadora = $_dataEntregaTransportadora);
    }
    /**
     * Get DataEstimativaEntrega value
     * @return dateTime|null
     */
    public function getDataEstimativaEntrega()
    {
        return $this->DataEstimativaEntrega;
    }
    /**
     * Set DataEstimativaEntrega value
     * @param dateTime $_dataEstimativaEntrega the DataEstimativaEntrega
     * @return dateTime
     */
    public function setDataEstimativaEntrega($_dataEstimativaEntrega)
    {
        return ($this->DataEstimativaEntrega = $_dataEstimativaEntrega);
    }
    /**
     * Get PacoteEntregaItems value
     * @return EzPedidosStructArrayOfPacoteEntregaItem|null
     */
    public function getPacoteEntregaItems()
    {
        return $this->PacoteEntregaItems;
    }
    /**
     * Set PacoteEntregaItems value
     * @param EzPedidosStructArrayOfPacoteEntregaItem $_pacoteEntregaItems the PacoteEntregaItems
     * @return EzPedidosStructArrayOfPacoteEntregaItem
     */
    public function setPacoteEntregaItems($_pacoteEntregaItems)
    {
        return ($this->PacoteEntregaItems = $_pacoteEntregaItems);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPacoteEntrega
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
