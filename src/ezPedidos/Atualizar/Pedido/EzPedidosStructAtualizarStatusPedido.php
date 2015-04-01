<?php
/**
 * File for class EzPedidosStructAtualizarStatusPedido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructAtualizarStatusPedido originally named AtualizarStatusPedido
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructAtualizarStatusPedido extends EzPedidosWsdlClass
{
    /**
     * The statusPedido
     * @var EzPedidosStructStatusPedido
     */
    public $statusPedido;
    /**
     * Constructor method for AtualizarStatusPedido
     * @see parent::__construct()
     * @param EzPedidosStructStatusPedido $_statusPedido
     * @return EzPedidosStructAtualizarStatusPedido
     */
    public function __construct($_statusPedido = NULL)
    {
        parent::__construct(array('statusPedido'=>$_statusPedido),false);
    }
    /**
     * Get statusPedido value
     * @return EzPedidosStructStatusPedido|null
     */
    public function getStatusPedido()
    {
        return $this->statusPedido;
    }
    /**
     * Set statusPedido value
     * @param EzPedidosStructStatusPedido $_statusPedido the statusPedido
     * @return EzPedidosStructStatusPedido
     */
    public function setStatusPedido($_statusPedido)
    {
        return ($this->statusPedido = $_statusPedido);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructAtualizarStatusPedido
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
