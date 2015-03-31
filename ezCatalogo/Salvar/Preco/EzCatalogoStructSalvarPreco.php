<?php
/**
 * File for class EzCatalogoStructSalvarPreco
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarPreco originally named SalvarPreco
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarPreco extends EzCatalogoWsdlClass
{
    /**
     * The Preco
     * @var EzCatalogoStructPreco
     */
    public $Preco;
    /**
     * Constructor method for SalvarPreco
     * @see parent::__construct()
     * @param EzCatalogoStructPreco $_preco
     * @return EzCatalogoStructSalvarPreco
     */
    public function __construct($_preco = NULL)
    {
        parent::__construct(array('Preco'=>$_preco),false);
    }
    /**
     * Get Preco value
     * @return EzCatalogoStructPreco|null
     */
    public function getPreco()
    {
        return $this->Preco;
    }
    /**
     * Set Preco value
     * @param EzCatalogoStructPreco $_preco the Preco
     * @return EzCatalogoStructPreco
     */
    public function setPreco($_preco)
    {
        return ($this->Preco = $_preco);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarPreco
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
