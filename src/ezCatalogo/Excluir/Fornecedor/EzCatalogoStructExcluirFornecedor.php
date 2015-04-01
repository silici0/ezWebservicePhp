<?php
/**
 * File for class EzCatalogoStructExcluirFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirFornecedor originally named ExcluirFornecedor
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirFornecedor extends EzCatalogoWsdlClass
{
    /**
     * The fornecedorId
     * @var int
     */
    public $fornecedorId;
    /**
     * Constructor method for ExcluirFornecedor
     * @see parent::__construct()
     * @param int $_fornecedorId
     * @return EzCatalogoStructExcluirFornecedor
     */
    public function __construct($_fornecedorId = NULL)
    {
        parent::__construct(array('fornecedorId'=>$_fornecedorId),false);
    }
    /**
     * Get fornecedorId value
     * @return int|null
     */
    public function getFornecedorId()
    {
        return $this->fornecedorId;
    }
    /**
     * Set fornecedorId value
     * @param int $_fornecedorId the fornecedorId
     * @return int
     */
    public function setFornecedorId($_fornecedorId)
    {
        return ($this->fornecedorId = $_fornecedorId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirFornecedor
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
