<?php
/**
 * File for class EzCatalogoStructSalvarEstoque
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarEstoque originally named SalvarEstoque
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarEstoque extends EzCatalogoWsdlClass
{
    /**
     * The Estoque
     * @var EzCatalogoStructEstoque
     */
    public $Estoque;
    /**
     * Constructor method for SalvarEstoque
     * @see parent::__construct()
     * @param EzCatalogoStructEstoque $_estoque
     * @return EzCatalogoStructSalvarEstoque
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarEstoque
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
