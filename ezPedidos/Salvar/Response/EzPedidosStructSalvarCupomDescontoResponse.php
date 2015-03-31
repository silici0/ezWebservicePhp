<?php
/**
 * File for class EzPedidosStructSalvarCupomDescontoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructSalvarCupomDescontoResponse originally named SalvarCupomDescontoResponse
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructSalvarCupomDescontoResponse extends EzPedidosWsdlClass
{
    /**
     * The SalvarCupomDescontoResult
     * @var EzPedidosStructRespostaProcessamento
     */
    public $SalvarCupomDescontoResult;
    /**
     * Constructor method for SalvarCupomDescontoResponse
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_salvarCupomDescontoResult
     * @return EzPedidosStructSalvarCupomDescontoResponse
     */
    public function __construct($_salvarCupomDescontoResult = NULL)
    {
        parent::__construct(array('SalvarCupomDescontoResult'=>$_salvarCupomDescontoResult),false);
    }
    /**
     * Get SalvarCupomDescontoResult value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getSalvarCupomDescontoResult()
    {
        return $this->SalvarCupomDescontoResult;
    }
    /**
     * Set SalvarCupomDescontoResult value
     * @param EzPedidosStructRespostaProcessamento $_salvarCupomDescontoResult the SalvarCupomDescontoResult
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setSalvarCupomDescontoResult($_salvarCupomDescontoResult)
    {
        return ($this->SalvarCupomDescontoResult = $_salvarCupomDescontoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructSalvarCupomDescontoResponse
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
