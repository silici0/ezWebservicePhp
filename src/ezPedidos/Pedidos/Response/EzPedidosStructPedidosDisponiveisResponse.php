<?php
namespace EzPedidos\Pedidos\Response;

use EzPedidos\EzPedidosWsdlClass;

/**
 * File for class EzPedidosStructPedidosDisponiveisResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPedidosDisponiveisResponse originally named PedidosDisponiveisResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPedidosDisponiveisResponse extends EzPedidosWsdlClass
{
    /**
     * The PedidosDisponiveisResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $PedidosDisponiveisResult;
    /**
     * Constructor method for PedidosDisponiveisResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_pedidosDisponiveisResult
     * @return EzPedidosStructPedidosDisponiveisResponse
     */
    public function __construct($_pedidosDisponiveisResult = NULL)
    {
        parent::__construct(array('PedidosDisponiveisResult'=>$_pedidosDisponiveisResult),false);
    }
    /**
     * Get PedidosDisponiveisResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getPedidosDisponiveisResult()
    {
        return $this->PedidosDisponiveisResult;
    }
    /**
     * Set PedidosDisponiveisResult value
     * @param EzPedidosStructRespostaProcessamento $_pedidosDisponiveisResult the PedidosDisponiveisResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setPedidosDisponiveisResult($_pedidosDisponiveisResult)
    {
        return ($this->PedidosDisponiveisResult = $_pedidosDisponiveisResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPedidosDisponiveisResponse
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
