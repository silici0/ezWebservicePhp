<?php
/**
 * File for class EzCatalogoStructSalvarFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarFornecedor originally named SalvarFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarFornecedor extends EzCatalogoWsdlClass
{
    /**
     * The fornecedor
     * @var EzCatalogoStructFornecedor
     */
    public $fornecedor;
    /**
     * Constructor method for SalvarFornecedor
     * @see parent::__construct()
     * @param EzCatalogoStructFornecedor $_fornecedor
     * @return EzCatalogoStructSalvarFornecedor
     */
    public function __construct($_fornecedor = NULL)
    {
        parent::__construct(array('fornecedor'=>$_fornecedor),false);
    }
    /**
     * Get fornecedor value
     * @return EzCatalogoStructFornecedor|null
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }
    /**
     * Set fornecedor value
     * @param EzCatalogoStructFornecedor $_fornecedor the fornecedor
     * @return EzCatalogoStructFornecedor
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
     * @return EzCatalogoStructSalvarFornecedor
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
