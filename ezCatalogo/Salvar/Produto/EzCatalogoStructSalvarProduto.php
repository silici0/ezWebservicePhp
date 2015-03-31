<?php
/**
 * File for class EzCatalogoStructSalvarProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarProduto originally named SalvarProduto
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarProduto extends EzCatalogoWsdlClass
{
    /**
     * The produto
     * @var EzCatalogoStructProduto
     */
    public $produto;
    /**
     * Constructor method for SalvarProduto
     * @see parent::__construct()
     * @param EzCatalogoStructProduto $_produto
     * @return EzCatalogoStructSalvarProduto
     */
    public function __construct($_produto = NULL)
    {
        parent::__construct(array('produto'=>$_produto),false);
    }
    /**
     * Get produto value
     * @return EzCatalogoStructProduto|null
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param EzCatalogoStructProduto $_produto the produto
     * @return EzCatalogoStructProduto
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
     * @return EzCatalogoStructSalvarProduto
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
