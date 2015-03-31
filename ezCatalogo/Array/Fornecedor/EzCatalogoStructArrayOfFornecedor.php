<?php
/**
 * File for class EzCatalogoStructArrayOfFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfFornecedor originally named ArrayOfFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfFornecedor extends EzCatalogoWsdlClass
{
    /**
     * The Fornecedor
     * @var EzCatalogoStructFornecedor
     */
    public $Fornecedor;
    /**
     * Constructor method for ArrayOfFornecedor
     * @see parent::__construct()
     * @param EzCatalogoStructFornecedor $_fornecedor
     * @return EzCatalogoStructArrayOfFornecedor
     */
    public function __construct($_fornecedor = NULL)
    {
        parent::__construct(array('Fornecedor'=>$_fornecedor),false);
    }
    /**
     * Get Fornecedor value
     * @return EzCatalogoStructFornecedor|null
     */
    public function getFornecedor()
    {
        return $this->Fornecedor;
    }
    /**
     * Set Fornecedor value
     * @param EzCatalogoStructFornecedor $_fornecedor the Fornecedor
     * @return EzCatalogoStructFornecedor
     */
    public function setFornecedor($_fornecedor)
    {
        return ($this->Fornecedor = $_fornecedor);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructFornecedor
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructFornecedor
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructFornecedor
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructFornecedor
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructFornecedor
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Fornecedor
     */
    public function getAttributeName()
    {
        return 'Fornecedor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfFornecedor
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
