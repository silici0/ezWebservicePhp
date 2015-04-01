<?php
/**
 * File for class EzPedidosStructAtualizarStatusPacotePorObjeto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPacotePorObjeto originally named AtualizarStatusPacotePorObjeto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPacotePorObjeto extends EzPedidosWsdlClass
{
    /**
     * The AcompanhamentoStatus
     * @var EzPedidosStructAcompanhamentoStatus
     */
    public $AcompanhamentoStatus;
    /**
     * Constructor method for AtualizarStatusPacotePorObjeto
     * @see parent::__construct()
     * @param EzPedidosStructAcompanhamentoStatus $_acompanhamentoStatus
     * @return EzPedidosStructAtualizarStatusPacotePorObjeto
     */
    public function __construct($_acompanhamentoStatus = NULL)
    {
        parent::__construct(array('AcompanhamentoStatus'=>$_acompanhamentoStatus),false);
    }
    /**
     * Get AcompanhamentoStatus value
     * @return EzPedidosStructAcompanhamentoStatus|null
     */
    public function getAcompanhamentoStatus()
    {
        return $this->AcompanhamentoStatus;
    }
    /**
     * Set AcompanhamentoStatus value
     * @param EzPedidosStructAcompanhamentoStatus $_acompanhamentoStatus the AcompanhamentoStatus
     * @return EzPedidosStructAcompanhamentoStatus
     */
    public function setAcompanhamentoStatus($_acompanhamentoStatus)
    {
        return ($this->AcompanhamentoStatus = $_acompanhamentoStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPacotePorObjeto
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
