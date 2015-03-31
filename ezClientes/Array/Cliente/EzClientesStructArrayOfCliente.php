<?php
/**
 * File for class EzClientesStructArrayOfCliente
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzClientesStructArrayOfCliente originally named ArrayOfCliente
 * @package EzClientes
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzClientesStructArrayOfCliente extends EzClientesWsdlClass
{
    /**
     * The Cliente
     * @var EzClientesStructCliente
     */
    public $Cliente;
    /**
     * Constructor method for ArrayOfCliente
     * @see parent::__construct()
     * @param EzClientesStructCliente $_cliente
     * @return EzClientesStructArrayOfCliente
     */
    public function __construct($_cliente = NULL)
    {
        parent::__construct(array('Cliente'=>$_cliente),false);
    }
    /**
     * Get Cliente value
     * @return EzClientesStructCliente|null
     */
    public function getCliente()
    {
        return $this->Cliente;
    }
    /**
     * Set Cliente value
     * @param EzClientesStructCliente $_cliente the Cliente
     * @return EzClientesStructCliente
     */
    public function setCliente($_cliente)
    {
        return ($this->Cliente = $_cliente);
    }
    /**
     * Returns the current element
     * @see EzClientesWsdlClass::current()
     * @return EzClientesStructCliente
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzClientesWsdlClass::item()
     * @param int $_index
     * @return EzClientesStructCliente
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzClientesWsdlClass::first()
     * @return EzClientesStructCliente
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzClientesWsdlClass::last()
     * @return EzClientesStructCliente
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzClientesWsdlClass::last()
     * @param int $_offset
     * @return EzClientesStructCliente
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzClientesWsdlClass::getAttributeName()
     * @return string Cliente
     */
    public function getAttributeName()
    {
        return 'Cliente';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzClientesWsdlClass::__set_state()
     * @uses EzClientesWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzClientesStructArrayOfCliente
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
