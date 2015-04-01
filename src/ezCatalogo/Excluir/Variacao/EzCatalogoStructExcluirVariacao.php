<?php
/**
 * File for class EzCatalogoStructExcluirVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
/**
 * This class stands for EzCatalogoStructExcluirVariacao originally named ExcluirVariacao
 * @package EzCatalogo
 * @subpackage Structs
 * @date 2015-03-31
 */
class EzCatalogoStructExcluirVariacao extends EzCatalogoWsdlClass
{
    /**
     * The VariacaoID
     * @var string
     */
    public $VariacaoID;
    /**
     * Constructor method for ExcluirVariacao
     * @see parent::__construct()
     * @param string $_variacaoID
     * @return EzCatalogoStructExcluirVariacao
     */
    public function __construct($_variacaoID = NULL)
    {
        parent::__construct(array('VariacaoID'=>$_variacaoID),false);
    }
    /**
     * Get VariacaoID value
     * @return string|null
     */
    public function getVariacaoID()
    {
        return $this->VariacaoID;
    }
    /**
     * Set VariacaoID value
     * @param string $_variacaoID the VariacaoID
     * @return string
     */
    public function setVariacaoID($_variacaoID)
    {
        return ($this->VariacaoID = $_variacaoID);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EzCatalogoWsdlClass::__set_state()
     * @uses EzCatalogoWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EzCatalogoStructExcluirVariacao
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
