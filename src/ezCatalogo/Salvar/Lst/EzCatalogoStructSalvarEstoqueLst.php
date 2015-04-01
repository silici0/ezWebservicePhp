<?php
/**
 * File for class EzCatalogoStructSalvarEstoqueLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarEstoqueLst originally named SalvarEstoqueLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarEstoqueLst extends EzCatalogoWsdlClass
{
    /**
     * The Estoque
     * @var EzCatalogoStructArrayOfEstoque
     */
    public $Estoque;
    /**
     * Constructor method for SalvarEstoqueLst
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfEstoque $_estoque
     * @return EzCatalogoStructSalvarEstoqueLst
     */
    public function __construct($_estoque = NULL)
    {
        parent::__construct(array('Estoque'=>($_estoque instanceof EzCatalogoStructArrayOfEstoque)?$_estoque:new EzCatalogoStructArrayOfEstoque($_estoque)),false);
    }
    /**
     * Get Estoque value
     * @return EzCatalogoStructArrayOfEstoque|null
     */
    public function getEstoque()
    {
        return $this->Estoque;
    }
    /**
     * Set Estoque value
     * @param EzCatalogoStructArrayOfEstoque $_estoque the Estoque
     * @return EzCatalogoStructArrayOfEstoque
     */
    public function setEstoque($_estoque)
    {
        return ($this->Estoque = $_estoque);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarEstoqueLst
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
