<?php
/**
 * File for class EzCatalogoStructArrayOfPreco
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfPreco originally named ArrayOfPreco
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfPreco extends EzCatalogoWsdlClass
{
    /**
     * The Preco
     * @var EzCatalogoStructPreco
     */
    public $Preco;
    /**
     * Constructor method for ArrayOfPreco
     * @see parent::__construct()
     * @param EzCatalogoStructPreco $_preco
     * @return EzCatalogoStructArrayOfPreco
     */
    public function __construct($_preco = NULL)
    {
        parent::__construct(array('Preco'=>$_preco),false);
    }
    /**
     * Get Preco value
     * @return EzCatalogoStructPreco|null
     */
    public function getPreco()
    {
        return $this->Preco;
    }
    /**
     * Set Preco value
     * @param EzCatalogoStructPreco $_preco the Preco
     * @return EzCatalogoStructPreco
     */
    public function setPreco($_preco)
    {
        return ($this->Preco = $_preco);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructPreco
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructPreco
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructPreco
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructPreco
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructPreco
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Preco
     */
    public function getAttributeName()
    {
        return 'Preco';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfPreco
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
