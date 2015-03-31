<?php
/**
 * File for class EzPedidosStructPacoteEntregaItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPacoteEntregaItem originally named PacoteEntregaItem
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPacoteEntregaItem extends EzPedidosWsdlClass
{
    /**
     * The Data
     * @var dateTime
     */
    public $Data;
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * The ProdutoCodigo
     * @var string
     */
    public $ProdutoCodigo;
    /**
     * The Quantidade
     * @var int
     */
    public $Quantidade;
    /**
     * The SubVariacaoCodigo
     * @var string
     */
    public $SubVariacaoCodigo;
    /**
     * The VariacaoCodigo
     * @var string
     */
    public $VariacaoCodigo;
    /**
     * Constructor method for PacoteEntregaItem
     * @see parent::__construct()
     * @param dateTime $_data
     * @param int $_pacoteID
     * @param string $_produtoCodigo
     * @param int $_quantidade
     * @param string $_subVariacaoCodigo
     * @param string $_variacaoCodigo
     * @return EzPedidosStructPacoteEntregaItem
     */
    public function __construct($_data = NULL,$_pacoteID = NULL,$_produtoCodigo = NULL,$_quantidade = NULL,$_subVariacaoCodigo = NULL,$_variacaoCodigo = NULL)
    {
        parent::__construct(array('Data'=>$_data,'PacoteID'=>$_pacoteID,'ProdutoCodigo'=>$_produtoCodigo,'Quantidade'=>$_quantidade,'SubVariacaoCodigo'=>$_subVariacaoCodigo,'VariacaoCodigo'=>$_variacaoCodigo),false);
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
     * Get ProdutoCodigo value
     * @return string|null
     */
    public function getProdutoCodigo()
    {
        return $this->ProdutoCodigo;
    }
    /**
     * Set ProdutoCodigo value
     * @param string $_produtoCodigo the ProdutoCodigo
     * @return string
     */
    public function setProdutoCodigo($_produtoCodigo)
    {
        return ($this->ProdutoCodigo = $_produtoCodigo);
    }
    /**
     * Get Quantidade value
     * @return int|null
     */
    public function getQuantidade()
    {
        return $this->Quantidade;
    }
    /**
     * Set Quantidade value
     * @param int $_quantidade the Quantidade
     * @return int
     */
    public function setQuantidade($_quantidade)
    {
        return ($this->Quantidade = $_quantidade);
    }
    /**
     * Get SubVariacaoCodigo value
     * @return string|null
     */
    public function getSubVariacaoCodigo()
    {
        return $this->SubVariacaoCodigo;
    }
    /**
     * Set SubVariacaoCodigo value
     * @param string $_subVariacaoCodigo the SubVariacaoCodigo
     * @return string
     */
    public function setSubVariacaoCodigo($_subVariacaoCodigo)
    {
        return ($this->SubVariacaoCodigo = $_subVariacaoCodigo);
    }
    /**
     * Get VariacaoCodigo value
     * @return string|null
     */
    public function getVariacaoCodigo()
    {
        return $this->VariacaoCodigo;
    }
    /**
     * Set VariacaoCodigo value
     * @param string $_variacaoCodigo the VariacaoCodigo
     * @return string
     */
    public function setVariacaoCodigo($_variacaoCodigo)
    {
        return ($this->VariacaoCodigo = $_variacaoCodigo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPacoteEntregaItem
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
