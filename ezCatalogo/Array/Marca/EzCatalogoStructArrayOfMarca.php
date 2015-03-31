<?php
/**
 * File for class EzCatalogoStructArrayOfMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfMarca originally named ArrayOfMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfMarca extends EzCatalogoWsdlClass
{
    /**
     * The Marca
     * @var EzCatalogoStructMarca
     */
    public $Marca;
    /**
     * Constructor method for ArrayOfMarca
     * @see parent::__construct()
     * @param EzCatalogoStructMarca $_marca
     * @return EzCatalogoStructArrayOfMarca
     */
    public function __construct($_marca = NULL)
    {
        parent::__construct(array('Marca'=>$_marca),false);
    }
    /**
     * Get Marca value
     * @return EzCatalogoStructMarca|null
     */
    public function getMarca()
    {
        return $this->Marca;
    }
    /**
     * Set Marca value
     * @param EzCatalogoStructMarca $_marca the Marca
     * @return EzCatalogoStructMarca
     */
    public function setMarca($_marca)
    {
        return ($this->Marca = $_marca);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructMarca
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructMarca
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructMarca
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructMarca
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructMarca
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Marca
     */
    public function getAttributeName()
    {
        return 'Marca';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfMarca
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
