<?php
/**
 * File for class EzPedidosStructPedidoFiltro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPedidoFiltro originally named PedidoFiltro
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPedidoFiltro extends EzPedidosWsdlClass
{
    /**
     * The CNPJ
     * @var string
     */
    public $CNPJ;
    /**
     * The CPF
     * @var string
     */
    public $CPF;
    /**
     * The DataFinal
     * @var dateTime
     */
    public $DataFinal;
    /**
     * The DataInicial
     * @var dateTime
     */
    public $DataInicial;
    /**
     * The PedidoID
     * @var int
     */
    public $PedidoID;
    /**
     * The StatusID
     * @var int
     */
    public $StatusID;
    /**
     * Constructor method for PedidoFiltro
     * @see parent::__construct()
     * @param string $_cNPJ
     * @param string $_cPF
     * @param dateTime $_dataFinal
     * @param dateTime $_dataInicial
     * @param int $_pedidoID
     * @param int $_statusID
     * @return EzPedidosStructPedidoFiltro
     */
    public function __construct($_cNPJ = NULL,$_cPF = NULL,$_dataFinal = NULL,$_dataInicial = NULL,$_pedidoID = NULL,$_statusID = NULL)
    {
        parent::__construct(array('CNPJ'=>$_cNPJ,'CPF'=>$_cPF,'DataFinal'=>$_dataFinal,'DataInicial'=>$_dataInicial,'PedidoID'=>$_pedidoID,'StatusID'=>$_statusID),false);
    }
    /**
     * Get CNPJ value
     * @return string|null
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }
    /**
     * Set CNPJ value
     * @param string $_cNPJ the CNPJ
     * @return string
     */
    public function setCNPJ($_cNPJ)
    {
        return ($this->CNPJ = $_cNPJ);
    }
    /**
     * Get CPF value
     * @return string|null
     */
    public function getCPF()
    {
        return $this->CPF;
    }
    /**
     * Set CPF value
     * @param string $_cPF the CPF
     * @return string
     */
    public function setCPF($_cPF)
    {
        return ($this->CPF = $_cPF);
    }
    /**
     * Get DataFinal value
     * @return dateTime|null
     */
    public function getDataFinal()
    {
        return $this->DataFinal;
    }
    /**
     * Set DataFinal value
     * @param dateTime $_dataFinal the DataFinal
     * @return dateTime
     */
    public function setDataFinal($_dataFinal)
    {
        return ($this->DataFinal = $_dataFinal);
    }
    /**
     * Get DataInicial value
     * @return dateTime|null
     */
    public function getDataInicial()
    {
        return $this->DataInicial;
    }
    /**
     * Set DataInicial value
     * @param dateTime $_dataInicial the DataInicial
     * @return dateTime
     */
    public function setDataInicial($_dataInicial)
    {
        return ($this->DataInicial = $_dataInicial);
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
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPedidoFiltro
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
