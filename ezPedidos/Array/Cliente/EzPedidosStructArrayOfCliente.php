<?php
/**
 * File for class EzPedidosStructArrayOfCliente
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzPedidosStructArrayOfCliente originally named ArrayOfCliente
 * @package EzPedidos
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzPedidosStructArrayOfCliente extends EzPedidosWsdlClass
{
    /**
     * The Cliente
     * @var EzPedidosStructCliente
     */
    public $Cliente;
    /**
     * Constructor method for ArrayOfCliente
     * @see parent::__construct()
     * @param EzPedidosStructCliente $_cliente
     * @return EzPedidosStructArrayOfCliente
     */
    public function __construct($_cliente = NULL)
    {
        parent::__construct(array('Cliente'=>$_cliente),false);
    }
    /**
     * Get Cliente value
     * @return EzPedidosStructCliente|null
     */
    public function getCliente()
    {
        return $this->Cliente;
    }
    /**
     * Set Cliente value
     * @param EzPedidosStructCliente $_cliente the Cliente
     * @return EzPedidosStructCliente
     */
    public function setCliente($_cliente)
    {
        return ($this->Cliente = $_cliente);
    }
    /**
     * Returns the current element
     * @see EzPedidosWsdlClass::current()
     * @return EzPedidosStructCliente
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzPedidosWsdlClass::item()
     * @param int $_index
     * @return EzPedidosStructCliente
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzPedidosWsdlClass::first()
     * @return EzPedidosStructCliente
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzPedidosWsdlClass::last()
     * @return EzPedidosStructCliente
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzPedidosWsdlClass::last()
     * @param int $_offset
     * @return EzPedidosStructCliente
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzPedidosWsdlClass::getAttributeName()
     * @return string Cliente
     */
    public function getAttributeName()
    {
        return 'Cliente';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzPedidosWsdlClass::__set_state()
     * @uses EzPedidosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzPedidosStructArrayOfCliente
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
