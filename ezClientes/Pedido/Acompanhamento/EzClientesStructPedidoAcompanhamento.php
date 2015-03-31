<?php
/**
 * File for class EzClientesStructPedidoAcompanhamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructPedidoAcompanhamento originally named PedidoAcompanhamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructPedidoAcompanhamento extends EzClientesWsdlClass
{
    /**
     * The DataAtualizacao
     * @var dateTime
     */
    public $DataAtualizacao;
    /**
     * The PedidoID
     * @var int
     */
    public $PedidoID;
    /**
     * The Protocolo
     * @var string
     */
    public $Protocolo;
    /**
     * The StatusDesc
     * @var string
     */
    public $StatusDesc;
    /**
     * The StatusID
     * @var int
     */
    public $StatusID;
    /**
     * Constructor method for PedidoAcompanhamento
     * @see parent::__construct()
     * @param dateTime $_dataAtualizacao
     * @param int $_pedidoID
     * @param string $_protocolo
     * @param string $_statusDesc
     * @param int $_statusID
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function __construct($_dataAtualizacao = NULL,$_pedidoID = NULL,$_protocolo = NULL,$_statusDesc = NULL,$_statusID = NULL)
    {
        parent::__construct(array('DataAtualizacao'=>$_dataAtualizacao,'PedidoID'=>$_pedidoID,'Protocolo'=>$_protocolo,'StatusDesc'=>$_statusDesc,'StatusID'=>$_statusID),false);
    }
    /**
     * Get DataAtualizacao value
     * @return dateTime|null
     */
    public function getDataAtualizacao()
    {
        return $this->DataAtualizacao;
    }
    /**
     * Set DataAtualizacao value
     * @param dateTime $_dataAtualizacao the DataAtualizacao
     * @return dateTime
     */
    public function setDataAtualizacao($_dataAtualizacao)
    {
        return ($this->DataAtualizacao = $_dataAtualizacao);
    }
    /**
     * Get PedidoID value
     * @return int|null
     */
    public function getPedidoID()
    {
        return $this->PedidoID;
    }
    /**
     * Set PedidoID value
     * @param int $_pedidoID the PedidoID
     * @return int
     */
    public function setPedidoID($_pedidoID)
    {
        return ($this->PedidoID = $_pedidoID);
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
     * Get StatusDesc value
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->StatusDesc;
    }
    /**
     * Set StatusDesc value
     * @param string $_statusDesc the StatusDesc
     * @return string
     */
    public function setStatusDesc($_statusDesc)
    {
        return ($this->StatusDesc = $_statusDesc);
    }
    /**
     * Get StatusID value
     * @return int|null
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }
    /**
     * Set StatusID value
     * @param int $_statusID the StatusID
     * @return int
     */
    public function setStatusID($_statusID)
    {
        return ($this->StatusID = $_statusID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructPedidoAcompanhamento
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
