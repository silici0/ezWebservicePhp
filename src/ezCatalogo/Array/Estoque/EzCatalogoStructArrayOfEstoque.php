<?php
/**
 * File for class EzCatalogoStructArrayOfEstoque
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfEstoque originally named ArrayOfEstoque
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfEstoque extends EzCatalogoWsdlClass
{
    /**
     * The Estoque
     * @var EzCatalogoStructEstoque
     */
    public $Estoque;
    /**
     * Constructor method for ArrayOfEstoque
     * @see parent::__construct()
     * @param EzCatalogoStructEstoque $_estoque
     * @return EzCatalogoStructArrayOfEstoque
     */
    public function __construct($_estoque = NULL)
    {
        parent::__construct(array('Estoque'=>$_estoque),false);
    }
    /**
     * Get Estoque value
     * @return EzCatalogoStructEstoque|null
     */
    public function getEstoque()
    {
        return $this->Estoque;
    }
    /**
     * Set Estoque value
     * @param EzCatalogoStructEstoque $_estoque the Estoque
     * @return EzCatalogoStructEstoque
     */
    public function setEstoque($_estoque)
    {
        return ($this->Estoque = $_estoque);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructEstoque
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructEstoque
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructEstoque
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructEstoque
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructEstoque
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Estoque
     */
    public function getAttributeName()
    {
        return 'Estoque';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfEstoque
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
