<?php
/**
 * File for class EzPedidosStructArrayOfPedidoAcompanhamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfPedidoAcompanhamento originally named ArrayOfPedidoAcompanhamento
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfPedidoAcompanhamento extends EzPedidosWsdlClass
{
    /**
     * The PedidoAcompanhamento
     * @var EzPedidosStructPedidoAcompanhamento
     */
    public $PedidoAcompanhamento;
    /**
     * Constructor method for ArrayOfPedidoAcompanhamento
     * @see parent::__construct()
     * @param EzPedidosStructPedidoAcompanhamento $_pedidoAcompanhamento
     * @return EzPedidosStructArrayOfPedidoAcompanhamento
     */
    public function __construct($_pedidoAcompanhamento = NULL)
    {
        parent::__construct(array('PedidoAcompanhamento'=>$_pedidoAcompanhamento),false);
    }
    /**
     * Get PedidoAcompanhamento value
     * @return EzPedidosStructPedidoAcompanhamento|null
     */
    public function getPedidoAcompanhamento()
    {
        return $this->PedidoAcompanhamento;
    }
    /**
     * Set PedidoAcompanhamento value
     * @param EzPedidosStructPedidoAcompanhamento $_pedidoAcompanhamento the PedidoAcompanhamento
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function setPedidoAcompanhamento($_pedidoAcompanhamento)
    {
        return ($this->PedidoAcompanhamento = $_pedidoAcompanhamento);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructPedidoAcompanhamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string PedidoAcompanhamento
     */
    public function getAttributeName()
    {
        return 'PedidoAcompanhamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfPedidoAcompanhamento
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
