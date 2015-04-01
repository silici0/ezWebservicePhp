<?php
/**
 * File for class EzCatalogoStructSalvarSiteCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructSalvarSiteCategoria originally named SalvarSiteCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructSalvarSiteCategoria extends EzCatalogoWsdlClass
{
    /**
     * The categoria
     * @var EzCatalogoStructSiteCategoria
     */
    public $categoria;
    /**
     * Constructor method for SalvarSiteCategoria
     * @see parent::__construct()
     * @param EzCatalogoStructSiteCategoria $_categoria
     * @return EzCatalogoStructSalvarSiteCategoria
     */
    public function __construct($_categoria = NULL)
    {
        parent::__construct(array('categoria'=>$_categoria),false);
    }
    /**
     * Get categoria value
     * @return EzCatalogoStructSiteCategoria|null
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * Set categoria value
     * @param EzCatalogoStructSiteCategoria $_categoria the categoria
     * @return EzCatalogoStructSiteCategoria
     */
    public function setCategoria($_categoria)
    {
        return ($this->categoria = $_categoria);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructSalvarSiteCategoria
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
