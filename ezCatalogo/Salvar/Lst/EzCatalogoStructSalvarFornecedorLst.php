<?php
/**
 * File for class EzCatalogoStructSalvarFornecedorLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarFornecedorLst originally named SalvarFornecedorLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarFornecedorLst extends EzCatalogoWsdlClass
{
    /**
     * The fornecedor
     * @var EzCatalogoStructArrayOfFornecedor
     */
    public $fornecedor;
    /**
     * Constructor method for SalvarFornecedorLst
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfFornecedor $_fornecedor
     * @return EzCatalogoStructSalvarFornecedorLst
     */
    public function __construct($_fornecedor = NULL)
    {
        parent::__construct(array('fornecedor'=>($_fornecedor instanceof EzCatalogoStructArrayOfFornecedor)?$_fornecedor:new EzCatalogoStructArrayOfFornecedor($_fornecedor)),false);
    }
    /**
     * Get fornecedor value
     * @return EzCatalogoStructArrayOfFornecedor|null
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }
    /**
     * Set fornecedor value
     * @param EzCatalogoStructArrayOfFornecedor $_fornecedor the fornecedor
     * @return EzCatalogoStructArrayOfFornecedor
     */
    public function setFornecedor($_fornecedor)
    {
        return ($this->fornecedor = $_fornecedor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarFornecedorLst
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
