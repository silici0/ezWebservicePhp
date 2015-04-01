<?php
/**
 * File for class EzPedidosStructPedidosDisponiveisComFiltroResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPedidosDisponiveisComFiltroResponse originally named PedidosDisponiveisComFiltroResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPedidosDisponiveisComFiltroResponse extends EzPedidosWsdlClass
{
    /**
     * The PedidosDisponiveisComFiltroResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $PedidosDisponiveisComFiltroResult;
    /**
     * Constructor method for PedidosDisponiveisComFiltroResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_pedidosDisponiveisComFiltroResult
     * @return EzPedidosStructPedidosDisponiveisComFiltroResponse
     */
    public function __construct($_pedidosDisponiveisComFiltroResult = NULL)
    {
        parent::__construct(array('PedidosDisponiveisComFiltroResult'=>$_pedidosDisponiveisComFiltroResult),false);
    }
    /**
     * Get PedidosDisponiveisComFiltroResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getPedidosDisponiveisComFiltroResult()
    {
        return $this->PedidosDisponiveisComFiltroResult;
    }
    /**
     * Set PedidosDisponiveisComFiltroResult value
     * @param EzPedidosStructRespostaProcessamento $_pedidosDisponiveisComFiltroResult the PedidosDisponiveisComFiltroResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setPedidosDisponiveisComFiltroResult($_pedidosDisponiveisComFiltroResult)
    {
        return ($this->PedidosDisponiveisComFiltroResult = $_pedidosDisponiveisComFiltroResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPedidosDisponiveisComFiltroResponse
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
