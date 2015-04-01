<?php
/**
 * File for class EzCatalogoStructSalvarPrecoLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarPrecoLst originally named SalvarPrecoLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarPrecoLst extends EzCatalogoWsdlClass
{
    /**
     * The Preco
     * @var EzCatalogoStructArrayOfPreco
     */
    public $Preco;
    /**
     * Constructor method for SalvarPrecoLst
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfPreco $_preco
     * @return EzCatalogoStructSalvarPrecoLst
     */
    public function __construct($_preco = NULL)
    {
        parent::__construct(array('Preco'=>($_preco instanceof EzCatalogoStructArrayOfPreco)?$_preco:new EzCatalogoStructArrayOfPreco($_preco)),false);
    }
    /**
     * Get Preco value
     * @return EzCatalogoStructArrayOfPreco|null
     */
    public function getPreco()
    {
        return $this->Preco;
    }
    /**
     * Set Preco value
     * @param EzCatalogoStructArrayOfPreco $_preco the Preco
     * @return EzCatalogoStructArrayOfPreco
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
     * @return EzCatalogoStructSalvarPrecoLst
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
