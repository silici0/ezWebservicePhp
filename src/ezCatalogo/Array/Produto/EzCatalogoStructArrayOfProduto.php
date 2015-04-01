<?php
/**
 * File for class EzCatalogoStructArrayOfProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructArrayOfProduto originally named ArrayOfProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructArrayOfProduto extends EzCatalogoWsdlClass
{
    /**
     * The Produto
     * @var EzCatalogoStructProduto
     */
    public $Produto;
    /**
     * Constructor method for ArrayOfProduto
     * @see parent::__construct()
     * @param EzCatalogoStructProduto $_produto
     * @return EzCatalogoStructArrayOfProduto
     */
    public function __construct($_produto = NULL)
    {
        parent::__construct(array('Produto'=>$_produto),false);
    }
    /**
     * Get Produto value
     * @return EzCatalogoStructProduto|null
     */
    public function getProduto()
    {
        return $this->Produto;
    }
    /**
     * Set Produto value
     * @param EzCatalogoStructProduto $_produto the Produto
     * @return EzCatalogoStructProduto
     */
    public function setProduto($_produto)
    {
        return ($this->Produto = $_produto);
    }
    /**
     * Returns the current element
     * @see EzCatalogoWsdlClass::current()
     * @return EzCatalogoStructProduto
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see EzCatalogoWsdlClass::item()
     * @param int $_index
     * @return EzCatalogoStructProduto
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see EzCatalogoWsdlClass::first()
     * @return EzCatalogoStructProduto
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see EzCatalogoWsdlClass::last()
     * @return EzCatalogoStructProduto
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see EzCatalogoWsdlClass::last()
     * @param int $_offset
     * @return EzCatalogoStructProduto
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see EzCatalogoWsdlClass::getAttributeName()
     * @return string Produto
     */
    public function getAttributeName()
    {
        return 'Produto';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructArrayOfProduto
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
