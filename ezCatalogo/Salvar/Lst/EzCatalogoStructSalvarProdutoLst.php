<?php
/**
 * File for class EzCatalogoStructSalvarProdutoLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarProdutoLst originally named SalvarProdutoLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarProdutoLst extends EzCatalogoWsdlClass
{
    /**
     * The produto
     * @var EzCatalogoStructArrayOfProduto
     */
    public $produto;
    /**
     * Constructor method for SalvarProdutoLst
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfProduto $_produto
     * @return EzCatalogoStructSalvarProdutoLst
     */
    public function __construct($_produto = NULL)
    {
        parent::__construct(array('produto'=>($_produto instanceof EzCatalogoStructArrayOfProduto)?$_produto:new EzCatalogoStructArrayOfProduto($_produto)),false);
    }
    /**
     * Get produto value
     * @return EzCatalogoStructArrayOfProduto|null
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param EzCatalogoStructArrayOfProduto $_produto the produto
     * @return EzCatalogoStructArrayOfProduto
     */
    public function setProduto($_produto)
    {
        return ($this->produto = $_produto);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarProdutoLst
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
