<?php
/**
 * File for class EzCatalogoStructSalvarMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarMarca originally named SalvarMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarMarca extends EzCatalogoWsdlClass
{
    /**
     * The marca
     * @var EzCatalogoStructMarca
     */
    public $marca;
    /**
     * Constructor method for SalvarMarca
     * @see parent::__construct()
     * @param EzCatalogoStructMarca $_marca
     * @return EzCatalogoStructSalvarMarca
     */
    public function __construct($_marca = NULL)
    {
        parent::__construct(array('marca'=>$_marca),false);
    }
    /**
     * Get marca value
     * @return EzCatalogoStructMarca|null
     */
    public function getMarca()
    {
        return $this->marca;
    }
    /**
     * Set marca value
     * @param EzCatalogoStructMarca $_marca the marca
     * @return EzCatalogoStructMarca
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
     * @return EzCatalogoStructSalvarMarca
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
