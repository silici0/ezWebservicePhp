<?php
/**
 * File for class EzClientesStructArrayOfPedidoAcompanhamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfPedidoAcompanhamento originally named ArrayOfPedidoAcompanhamento
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfPedidoAcompanhamento extends EzClientesWsdlClass
{
    /**
     * The PedidoAcompanhamento
     * @var EzClientesStructPedidoAcompanhamento
     */
    public $PedidoAcompanhamento;
    /**
     * Constructor method for ArrayOfPedidoAcompanhamento
     * @see parent::__construct()
     * @param EzClientesStructPedidoAcompanhamento $_pedidoAcompanhamento
     * @return EzClientesStructArrayOfPedidoAcompanhamento
     */
    public function __construct($_pedidoAcompanhamento = NULL)
    {
        parent::__construct(array('PedidoAcompanhamento'=>$_pedidoAcompanhamento),false);
    }
    /**
     * Get PedidoAcompanhamento value
     * @return EzClientesStructPedidoAcompanhamento|null
     */
    public function getPedidoAcompanhamento()
    {
        return $this->PedidoAcompanhamento;
    }
    /**
     * Set PedidoAcompanhamento value
     * @param EzClientesStructPedidoAcompanhamento $_pedidoAcompanhamento the PedidoAcompanhamento
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function setPedidoAcompanhamento($_pedidoAcompanhamento)
    {
        return ($this->PedidoAcompanhamento = $_pedidoAcompanhamento);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructPedidoAcompanhamento
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string PedidoAcompanhamento
     */
    public function getAttributeName()
    {
        return 'PedidoAcompanhamento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfPedidoAcompanhamento
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
