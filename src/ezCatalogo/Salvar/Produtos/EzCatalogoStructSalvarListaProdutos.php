<?php
/**
 * File for class EzCatalogoStructSalvarListaProdutos
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarListaProdutos originally named SalvarListaProdutos
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarListaProdutos extends EzCatalogoWsdlClass
{
    /**
     * The ListaProdutos
     * @var EzCatalogoStructListaProdutos
     */
    public $ListaProdutos;
    /**
     * Constructor method for SalvarListaProdutos
     * @see parent::__construct()
     * @param EzCatalogoStructListaProdutos $_listaProdutos
     * @return EzCatalogoStructSalvarListaProdutos
     */
    public function __construct($_listaProdutos = NULL)
    {
        parent::__construct(array('ListaProdutos'=>$_listaProdutos),false);
    }
    /**
     * Get ListaProdutos value
     * @return EzCatalogoStructListaProdutos|null
     */
    public function getListaProdutos()
    {
        return $this->ListaProdutos;
    }
    /**
     * Set ListaProdutos value
     * @param EzCatalogoStructListaProdutos $_listaProdutos the ListaProdutos
     * @return EzCatalogoStructListaProdutos
     */
    public function setListaProdutos($_listaProdutos)
    {
        return ($this->ListaProdutos = $_listaProdutos);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarListaProdutos
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
