<?php
/**
 * File for class EzPedidosStructRemoverPacotePorPacoteID
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructRemoverPacotePorPacoteID originally named RemoverPacotePorPacoteID
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructRemoverPacotePorPacoteID extends EzPedidosWsdlClass
{
    /**
     * The PacoteID
     * @var int
     */
    public $PacoteID;
    /**
     * Constructor method for RemoverPacotePorPacoteID
     * @see parent::__construct()
     * @param int $_pacoteID
     * @return EzPedidosStructRemoverPacotePorPacoteID
     */
    public function __construct($_pacoteID = NULL)
    {
        parent::__construct(array('PacoteID'=>$_pacoteID),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructRemoverPacotePorPacoteID
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
