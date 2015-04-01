<?php
/**
 * File for class EzPedidosStructConfirmaRecebimentoPedidoAtualizado
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructConfirmaRecebimentoPedidoAtualizado originally named ConfirmaRecebimentoPedidoAtualizado
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructConfirmaRecebimentoPedidoAtualizado extends EzPedidosWsdlClass
{
    /**
     * The protocolo
     * @var string
     */
    public $protocolo;
    /**
     * Constructor method for ConfirmaRecebimentoPedidoAtualizado
     * @see parent::__construct()
     * @param string $_protocolo
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizado
     */
    public function __construct($_protocolo = NULL)
    {
        parent::__construct(array('protocolo'=>$_protocolo),false);
    }
    /**
     * Get protocolo value
     * @return string|null
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param string $_protocolo the protocolo
     * @return string
     */
    public function setProtocolo($_protocolo)
    {
        return ($this->protocolo = $_protocolo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructConfirmaRecebimentoPedidoAtualizado
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
