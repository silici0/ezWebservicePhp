<?php
/**
 * File for class EzCatalogoStructExcluirMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirMarca originally named ExcluirMarca
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirMarca extends EzCatalogoWsdlClass
{
    /**
     * The marcaId
     * @var int
     */
    public $marcaId;
    /**
     * Constructor method for ExcluirMarca
     * @see parent::__construct()
     * @param int $_marcaId
     * @return EzCatalogoStructExcluirMarca
     */
    public function __construct($_marcaId = NULL)
    {
        parent::__construct(array('marcaId'=>$_marcaId),false);
    }
    /**
     * Get marcaId value
     * @return int|null
     */
    public function getMarcaId()
    {
        return $this->marcaId;
    }
    /**
     * Set marcaId value
     * @param int $_marcaId the marcaId
     * @return int
     */
    public function setMarcaId($_marcaId)
    {
        return ($this->marcaId = $_marcaId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirMarca
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
