<?php
/**
 * File for class EzCatalogoStructExcluirSubVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirSubVariacao originally named ExcluirSubVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirSubVariacao extends EzCatalogoWsdlClass
{
    /**
     * The SubVariacaoID
     * @var string
     */
    public $SubVariacaoID;
    /**
     * Constructor method for ExcluirSubVariacao
     * @see parent::__construct()
     * @param string $_subVariacaoID
     * @return EzCatalogoStructExcluirSubVariacao
     */
    public function __construct($_subVariacaoID = NULL)
    {
        parent::__construct(array('SubVariacaoID'=>$_subVariacaoID),false);
    }
    /**
     * Get SubVariacaoID value
     * @return string|null
     */
    public function getSubVariacaoID()
    {
        return $this->SubVariacaoID;
    }
    /**
     * Set SubVariacaoID value
     * @param string $_subVariacaoID the SubVariacaoID
     * @return string
     */
    public function setSubVariacaoID($_subVariacaoID)
    {
        return ($this->SubVariacaoID = $_subVariacaoID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirSubVariacao
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
