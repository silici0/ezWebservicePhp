<?php
/**
 * File for class EzPedidosStructPedidosAtualizadosResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructPedidosAtualizadosResponse originally named PedidosAtualizadosResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructPedidosAtualizadosResponse extends EzPedidosWsdlClass
{
    /**
     * The PedidosAtualizadosResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $PedidosAtualizadosResult;
    /**
     * Constructor method for PedidosAtualizadosResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_pedidosAtualizadosResult
     * @return EzPedidosStructPedidosAtualizadosResponse
     */
    public function __construct($_pedidosAtualizadosResult = NULL)
    {
        parent::__construct(array('PedidosAtualizadosResult'=>$_pedidosAtualizadosResult),false);
    }
    /**
     * Get PedidosAtualizadosResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getPedidosAtualizadosResult()
    {
        return $this->PedidosAtualizadosResult;
    }
    /**
     * Set PedidosAtualizadosResult value
     * @param EzPedidosStructRespostaProcessamento $_pedidosAtualizadosResult the PedidosAtualizadosResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setPedidosAtualizadosResult($_pedidosAtualizadosResult)
    {
        return ($this->PedidosAtualizadosResult = $_pedidosAtualizadosResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructPedidosAtualizadosResponse
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
