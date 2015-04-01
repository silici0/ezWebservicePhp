<?php
/**
 * File for class EzPedidosStructSalvarCupomDesconto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructSalvarCupomDesconto originally named SalvarCupomDesconto
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructSalvarCupomDesconto extends EzPedidosWsdlClass
{
    /**
     * The CupomDesconto
     * @var EzPedidosStructCupomDesconto
     */
    public $CupomDesconto;
    /**
     * Constructor method for SalvarCupomDesconto
     * @see parent::__construct()
     * @param EzPedidosStructCupomDesconto $_cupomDesconto
     * @return EzPedidosStructSalvarCupomDesconto
     */
    public function __construct($_cupomDesconto = NULL)
    {
        parent::__construct(array('CupomDesconto'=>$_cupomDesconto),false);
    }
    /**
     * Get CupomDesconto value
     * @return EzPedidosStructCupomDesconto|null
     */
    public function getCupomDesconto()
    {
        return $this->CupomDesconto;
    }
    /**
     * Set CupomDesconto value
     * @param EzPedidosStructCupomDesconto $_cupomDesconto the CupomDesconto
     * @return EzPedidosStructCupomDesconto
     */
    public function setCupomDesconto($_cupomDesconto)
    {
        return ($this->CupomDesconto = $_cupomDesconto);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructSalvarCupomDesconto
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
