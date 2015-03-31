<?php
/**
 * File for class EzCatalogoStructSalvarMarcaLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarMarcaLst originally named SalvarMarcaLst
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarMarcaLst extends EzCatalogoWsdlClass
{
    /**
     * The marca
     * @var EzCatalogoStructArrayOfMarca
     */
    public $marca;
    /**
     * Constructor method for SalvarMarcaLst
     * @see parent::__construct()
     * @param EzCatalogoStructArrayOfMarca $_marca
     * @return EzCatalogoStructSalvarMarcaLst
     */
    public function __construct($_marca = NULL)
    {
        parent::__construct(array('marca'=>($_marca instanceof EzCatalogoStructArrayOfMarca)?$_marca:new EzCatalogoStructArrayOfMarca($_marca)),false);
    }
    /**
     * Get marca value
     * @return EzCatalogoStructArrayOfMarca|null
     */
    public function getMarca()
    {
        return $this->marca;
    }
    /**
     * Set marca value
     * @param EzCatalogoStructArrayOfMarca $_marca the marca
     * @return EzCatalogoStructArrayOfMarca
     */
    public function setMarca($_marca)
    {
        return ($this->marca = $_marca);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarMarcaLst
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
