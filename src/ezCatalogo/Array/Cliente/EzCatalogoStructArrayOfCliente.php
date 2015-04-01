<?php
/**
 * File for class EzCatalogoStructArrayOfCliente
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfCliente originally named ArrayOfCliente
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfCliente extends EzCatalogoWsdlClass
{
    /**
     * The Cliente
     * @var EzCatalogoStructCliente
     */
    public $Cliente;
    /**
     * Constructor method for ArrayOfCliente
     * @see parent::__construct()
     * @param EzCatalogoStructCliente $_cliente
     * @return EzCatalogoStructArrayOfCliente
     */
    public function __construct($_cliente = NULL)
    {
        parent::__construct(array('Cliente'=>$_cliente),false);
    }
    /**
     * Get Cliente value
     * @return EzCatalogoStructCliente|null
     */
    public function getCliente()
    {
        return $this->Cliente;
    }
    /**
     * Set Cliente value
     * @param EzCatalogoStructCliente $_cliente the Cliente
     * @return EzCatalogoStructCliente
     */
    public function setCliente($_cliente)
    {
        return ($this->Cliente = $_cliente);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructCliente
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructCliente
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructCliente
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructCliente
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructCliente
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Cliente
     */
    public function getAttributeName()
    {
        return 'Cliente';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfCliente
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
