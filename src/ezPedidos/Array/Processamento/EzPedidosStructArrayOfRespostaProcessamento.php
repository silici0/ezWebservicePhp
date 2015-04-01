<?php
/**
 * File for class EzPedidosStructArrayOfRespostaProcessamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfRespostaProcessamento originally named ArrayOfRespostaProcessamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfRespostaProcessamento extends EzPedidosWsdlClass
{
    /**
     * The RespostaProcessamento
     * @var EzPedidosStructRespostaProcessamento
     */
    public $RespostaProcessamento;
    /**
     * Constructor method for ArrayOfRespostaProcessamento
     * @see parent::__construct()
     * @param EzPedidosStructRespostaProcessamento $_respostaProcessamento
     * @return EzPedidosStructArrayOfRespostaProcessamento
     */
    public function __construct($_respostaProcessamento = NULL)
    {
        parent::__construct(array('RespostaProcessamento'=>$_respostaProcessamento),false);
    }
    /**
     * Get RespostaProcessamento value
     * @return EzPedidosStructRespostaProcessamento|null
     */
    public function getRespostaProcessamento()
    {
        return $this->RespostaProcessamento;
    }
    /**
     * Set RespostaProcessamento value
     * @param EzPedidosStructRespostaProcessamento $_respostaProcessamento the RespostaProcessamento
     * @return EzPedidosStructRespostaProcessamento
     */
    public function setRespostaProcessamento($_respostaProcessamento)
    {
        return ($this->RespostaProcessamento = $_respostaProcessamento);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructRespostaProcessamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructRespostaProcessamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructRespostaProcessamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructRespostaProcessamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructRespostaProcessamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string RespostaProcessamento
     */
    public function getAttributeName()
    {
        return 'RespostaProcessamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfRespostaProcessamento
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
