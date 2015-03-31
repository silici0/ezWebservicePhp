<?php
/**
 * File for class EzCatalogoStructExcluirSiteCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirSiteCategoria originally named ExcluirSiteCategoria
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirSiteCategoria extends EzCatalogoWsdlClass
{
    /**
     * The categoriaId
     * @var int
     */
    public $categoriaId;
    /**
     * Constructor method for ExcluirSiteCategoria
     * @see parent::__construct()
     * @param int $_categoriaId
     * @return EzCatalogoStructExcluirSiteCategoria
     */
    public function __construct($_categoriaId = NULL)
    {
        parent::__construct(array('categoriaId'=>$_categoriaId),false);
    }
    /**
     * Get categoriaId value
     * @return int|null
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }
    /**
     * Set categoriaId value
     * @param int $_categoriaId the categoriaId
     * @return int
     */
    public function setCategoriaId($_categoriaId)
    {
        return ($this->categoriaId = $_categoriaId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirSiteCategoria
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
